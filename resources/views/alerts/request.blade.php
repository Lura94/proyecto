@if(count($errors)>0)
    <div class="alert alert-big alert-lightred alert-dismissable fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <ul>
            @foreach($errors->all() as $error)
                <li class="text-danger">{!!$error!!}</li>
            @endforeach
        </ul>
    </div>
@endif