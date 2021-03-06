<?php

namespace App\Http\Controllers;

use App\Report;
use App\User;
use Carbon\Carbon;
use App\Http\Requests\ReportRequest;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;
use Helper;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::paginate(6);
        return view('reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = User::all();
        return view('reports.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportRequest $request)
    {
        Report::create($request->all());
        Session::flash('message', 'El Reporte fue creado correctamente');
        return redirect('/reports');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = Report::where("id","=",$id)->first();
        $students = User::all();
        return view('reports.edit', compact('report', 'students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReportRequest $request, $id)
    {
        $report = Report::where("id","=",$id)->first();
        $report->fill($request->all());
        $report->save();
        Session::flash('message', 'El Reporte fue actualizado correctamente');
        return redirect('/reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Report::find($id);
        $report->delete();
        Session::flash('message', 'Reporte eliminado correctamente');
    }

    public function export($id)
    {
        $reports = Report::select('reports.*')->where('id_student', '=', $id)->get();
        $reports_excel = [];

        foreach ($reports as $report) {
            $aux = [
                
                'name_teacher' => $report->name_teacher,
                'reason' => $report->reason,
                'description' => $report->description,
                'signed_hour' => $report->signed_hour,
                'created_at' => Carbon::parse($report->created_at)->format("d-m-Y")
            ];
            array_push($reports_excel, $aux);
        }

        $headers = array( 'Docente', 'DESCRIPCION', 'HORAS ASIGNADAS', 'FECHA DE REPORTE');//reportes

        array_unshift($reports_excel, $headers);
        ob_start();
        ob_clean();

        Excel::create('Reporte', function ($excel) use ($reports_excel) {
            $excel->sheet('Listado', function ($sheet) use ($reports_excel) {
                $sheet->fromArray($reports_excel, null, 'A1', false, false);
            });
        })->export('xls');

    }

    public function exportAll()
    {
        $reports = Report::all();

        $report_excel = [];
        foreach ($reports as $report) {
            $aux = [
                'student' => Helper::getStudentName($report->id_student)->name,
                'name_teacher' => $report->name_teacher,
                'reason' => $report->reason,
                'description' => $report->description,
                'signed_hour' => $report ->signed_hour,
                'created_at' => Carbon::parse($report->created_At)->format('d-m-Y')
            ];
            array_push($report_excel,$aux);

        }
        $headers = array('Nombre Alumno','PROFESOR', 'RAZÓN', 'DESCRIPCIÓN', 'HORAS ASIGNADAS', 'FECHA DE REPORTE');

        array_unshift($report_excel, $headers);
        ob_start();
        ob_clean();

        Excel::create('Reporte', function ($excel) use ($report_excel) {
            $excel->sheet('Listado', function ($sheet) use ($report_excel) {
                $sheet->fromArray($report_excel, null, 'A1', false, false);
            });
        })->export('xls');

    }

    public function filter(Request $request)
    {
        $reports = Report::select("reports.*")
            ->join("users","users.id","reports.id_student")
            ->where([['users.name','like','%'.$request->filter.'%']])->paginate(10);
        return view('reports.index',compact('reports'));
    }
}
