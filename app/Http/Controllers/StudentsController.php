<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportRequest;
use App\Role;
use App\Report;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StudentRequest;
use Illuminate\Support\Facades\Session;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::select("users.*")->where("id_rollet","=","2")->paginate(6);
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('student.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        User::create($request->all());
        Session::flash('message','El alumno se creo exitosamente');
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $reports = Report::select("*")->where('id','=',$id);
        return view('student.student');
    }

    public function find(Request $request)
    {
        $reports = Report::select("reports.*")->join('users','reports.id_student','=','users.id')->where('users.ncontrol','=',$request->ncontrol)->get();
        $cantRep = Report::select('reports.*')->join('users','reports.id_student','=','users.id')->where('users.ncontrol','=',$request->ncontrol)->sum('reports.signed_hour');
        $idStudent = User::select('id')->where('ncontrol','=',$request->ncontrol)->first();
        return view('student.student',compact('reports','cantRep','idStudent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = User::find($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {
        $student = User::find($id);
        $student->fill($request->all());
        $student->save();
        Session::flash('message','El alumno se actualizó exitosamente');
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = User::find($id);
        $student->delete();
        Session::flash('message','El alumno fue eliminado correctamente');
    }
  

    public function export()
    {
        $students = User::select('users.*')->where('id_rollet','=','2')->get();

        $student_excel = [];
        foreach ($students as $student) {
            $aux = [
                'student' =>$student->name,
                'ncontrol' => $student->ncontrol,
                'curp' => $student->curp,
                'grado' => $student->grade,
                'especiality' => $student->specialty,
                'group' => $student->group,
                'email' => $student->email,
                'phone' => $student->phone,
                'group' => $student->grup,
                'imss'  => $student->imss,
                'tutor' => $student->tutor,
                'phoneTutor' => $student->phoneTutor,
                //'created_at' => Carbon::parse($student->created_At)->format('d-m-Y')
            ];
            array_push($student_excel,$aux);

        }
        $headers = array('Nombre Alumno', 'N° Control', 'CURP', 'Grado','Especialidad','Grupo', 'Correo Electronico','Telefono Alumno','IMSS','Tutor','Telefono Tutor');

        array_unshift($student_excel, $headers);
        ob_start();
        ob_clean();

        Excel::create('Lista General Alumos', function ($excel) use ($student_excel) {
            $excel->sheet('Listado', function ($sheet) use ($student_excel) {
                $sheet->fromArray($student_excel, null, 'A1', false, false);
            });
        })->export('xls');

    }
    public function filter(Request $request)
    {
        $students = User::select("users.*")->where([['name','like','%'.$request->filter.'%'],['id_rollet','=','2']])->paginate(10);
        return view('student.index',compact('students'));
    }
}
