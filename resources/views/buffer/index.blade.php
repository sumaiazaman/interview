@extends('layouts.app')
<style type="text/css">
	.custom-img{
	    border-radius: 24px;
		height: 43px;
	}
</style>
@section('content')
<div class="container-fluid app-body app-home">
	<div class="row">
		<div class="col-md-2">
			<input type="date" class="form-control" name="">
		</div>
		<div class="col-md-5">
			<div class="md-form active-pink active-pink-2 mb-3 mt-0">
			  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
			</div>
		</div>
		<div class="col-md-3">
			<select class="form-control group">
				<option value="0">All Group</option>
				@foreach($groups as $key => $group)	
				<option value="{{ $group->id }}">{{ $group->group_name }}</option>
				@endforeach
			</select>
		</div>				
	</div>


	<table class="table table-resonsive table-striped table-bordered" style="margin-top: 10px;">
	  <thead>
	    <tr>	     
	      <th scope="col">Group Name</th>
	      <th scope="col">Group Type</th>
	      <th scope="col">Account Name</th>
	      <th scope="col">Post Text</th>
	      <th scope="col">Time</th>	      
	    </tr>
	  </thead>
	  <tbody>

	  <div class="append-div">
	  	<span class="span-display">
	  		@foreach($groups as $key => $group)	    
		    <tr>   
		      <th scope="row">{{ $group->group_name }}</th>     
		      <th scope="row">{{ $group->group_type }}</th>  
		      <th scope="row">
		      	<img src="{{ $group->avatar }}" class="custom-img">
		      </th>     
		      <th scope="row">{{ $group->post_text }}</th> 	       
		      <th scope="row">{{ $group->created_at }}</th>     
		    </tr>	    
	    @endforeach
	  	</span>	  	
	  </div>	  
	  </tbody>
</table>
{{ $groups->links() }}
</div>
@endsection

