@if(Session::has('message'))
    <div class="alert alert-success" style="background: cyan;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{Session::get('message')}}
    </div>
@endif