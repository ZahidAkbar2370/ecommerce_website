@extends('/Admin/layout')
@section('content')

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Add Product</h2>
		</div>
		<div class="box-content">



		<form action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
			@csrf

			<div class="control-group">
				<label class="control-label" for="date01">Product Name</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="product_name" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Product Price</label>
				<div class="controls">
					<input type="number" class="input-xlarge" name="product_price" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Catgory Name</label>
				<div class="controls"> 
					<select class="input-xlarge" name='product_category'>
		    			<option value="">Select Category</option>
		    			@foreach($all_categorys as $category)
							<option value="{{$category->category_name}}">					{{$category->category_name}}
							</option>
						@endforeach

					</select>
				</div>
			</div>

			 <div class="control-group">
				<label class="control-label" for="date01">Product Description</label>
				<div class="controls">
					<textarea id="product_name" name="product_description" class="input-xlarge" required cols="8" rows="9"></textarea>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Product Image</label>
				<div class="controls">
					<input id="filebutton" name="image1" class="input-xlarge" type="file">
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