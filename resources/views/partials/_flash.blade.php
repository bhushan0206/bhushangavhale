<div class="alert alert-info">
	
	@if(Session::has('success'))
	    <div class="alert-box success">
	        <h2>{{ Session::get('success') }}</h2>
	    </div>
	@endif

</div>