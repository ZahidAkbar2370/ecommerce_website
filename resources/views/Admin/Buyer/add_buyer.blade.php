@extends('Admin/layout')
@section('content')




<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Add Buyer</h2>
		</div>
		<div class="box-content">



		<form action="{{URL::to('/save-buyer')}}" method="post">
			@csrf

			<div class="control-group">
				<label class="control-label" for="date01">Buyer Name</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="user_name" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Password</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="password" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Email</label>
				<div class="controls">
					<input type="email" class="input-xlarge" name="email" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Country</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="user_country" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">City</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="user_city" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Phone #</label>
				<div class="controls">
					<input type="number" class="input-xlarge" name="user_phone" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Postal Code</label>
				<div class="controls">
					<input type="number" class="input-xlarge" name="user_postal_code" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Address</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="user_address" required>
				</div>
			</div>

			
			<div class="control-group">
				<div class="controls">
					<input type="submit" class="input-xlarge btn btn-primary" name="member_name" value="Save" >
				</div>
			</div>
		</form>	
		</div>
	</div><!--/span-->
			
</div><!--/row-->
@endsection
