@if($message = Session::get('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{$message}}
    </div>
@endif
@if($message = Session::get('info'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{$message}}
    </div>
@endif
@if($message = Session::get('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{$message}}
    </div>
@endif
@if($message = Session::get('warning'))
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{$message}}
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        Girdiğiniz bilgiler yanlış!
    </div>
@endif
