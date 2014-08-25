@if(!$errors->isEmpty())
    <div class="alert alert-danger alert-dismissible alert-top" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <div class="container-fluid">
            Pastikan isian form sudah benar
        </div>
    </div>
@endif

@if(Session::get('error'))
    <div class="alert alert-danger alert-dismissible alert-top" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <div class="container-fluid">
            {{{ Session::get('error') }}}
        </div>
    </div>
@endif

@if(Session::get('info'))
<div class="alert alert-info alert-dismissible alert-top" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <div class="container-fluid">
        {{{ Session::get('info') }}}
    </div>
</div>
@endif