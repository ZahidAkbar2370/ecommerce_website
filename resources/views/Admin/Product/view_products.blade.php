@extends('/Admin/layout')
@section('content')


<div class="row-fluid sortable">    
        <div class="box span12">
          <a href="add-product"><button class="btn btn-primary" style="margin: 5px;width:130px">Add New</button></a>
          <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>All Products</h2>
          </div>
          <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
               <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Product Categoey</th>
                  <th>Price</th>
                  <th>Picture</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
             
                 <tbody>

                @if(!empty($all_products))
                @foreach($all_products as $product)
                  <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->category}}</td>
                    <td>${{$product->price}}</td>
                    <td><img src="{{$product->image}}" style="width:80px;height:80px"></td>
                    <td>{{$product->description}}</td>
                    <td>Active</td>
                    <td>
                      <a href="edit-product/{{$product->id}}" class="btn btn-info" ><i class="halflings-icon white edit"></i></a>
                      <a href="delete-product/{{$product->id}}" class="btn btn-danger" ><i class="halflings-icon white trash"></i></a>
                    </td>
                </tr>
                @endforeach
                @endif
              </tbody>
                
              
            </table>            
          </div>
        </div><!--/span-->
      
      </div><!--/row-->

    
    

@endsection