@if(session()->has('my_error'))
 <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Ooops.!</h4>
        {{ session()->get('my_error') }}
 </div>
@endif

@if(count($errors))
 <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        @foreach($errors->all() as $error)
        	<li>{{ $error }}</li>
        @endforeach
 </div>
@endif