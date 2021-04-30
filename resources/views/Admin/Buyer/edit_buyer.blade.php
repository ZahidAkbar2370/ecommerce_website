@extends('Admin/layout')
@section('content')




<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Edit Buyer</h2>
		</div>
		<div class="box-content">



		<form action="{{URL::to('/update-buyer',$edit_buyer->id)}}" method="post">
			@csrf

			<div class="control-group">
				<label class="control-label" for="date01">Buyer Name</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="user_name" value="{{$edit_buyer->user_name}}" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Email</label>
				<div class="controls">
					<input type="email" class="input-xlarge" name="email" value="{{$edit_buyer->email}}" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Country</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="user_country" value="{{$edit_buyer->user_country}}" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">City</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="user_city" value="{{$edit_buyer->user_city}}" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Phone #</label>
				<div class="controls">
					<input type="number" class="input-xlarge" name="user_phone" value="{{$edit_buyer->user_phone}}" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Postal Code</label>
				<div class="controls">
					<input type="number" class="input-xlarge" name="user_postal_code"  value="{{$edit_buyer->user_postal_code}}"required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Address</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="user_address" value="{{$edit_buyer->user_address}}" required>
				</div>
			</div>

			
			<div class="control-group">
				<div class="controls">
					<input type="submit" class="input-xlarge btn btn-primary" name="member_name" value="Update" >
				</div>
			</div>
		</form>	
		</div>
	</div><!--/span-->
			
</div><!--/row-->
@endsection