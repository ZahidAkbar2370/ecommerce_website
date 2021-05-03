@extends('/Admin/layout')
@section('content')
<div class="row-fluid sortable"> 

        <div class="box span12">
          <div class="box-header" data-original-title>
          <h2><i class="halflings-icon user"></i><span class="break"></span>Order Detail</h2>
          </div>

          <div class="box-content">

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                  <th>Cart ID</th>
                  <th>User Name</th>
                  <th>Product Name</th>
                  <th>Product Quantity</th>
                  <th>Product Price</th>
                  <th>Total Price</th>
                  <th>Status</th>
                  <th>Create at</th>
                </tr>
              </thead>

              <tbody>

                @foreach($data as $values)
                  <tr>
                    <td>{{$values->cartID}}</td>
                    <td>{{$values->user_name}}</td>
                    <td>{{$values->product_name}}</td>
                    <td>{{$values->product_quantity}}</td>
                    <td>{{$values->price}}</td>
                    <td>{{$values->product_quantity*$values->price}}</td>
                    <td>{{$values->status}}</td>
                    <td>{{$values->Order_Created_At}}</td>
                    <!-- <td>
                      <a href="#" class="btn btn-success"><i class="halflings-icon white thum"></i></a>
                      <a href="#" class="btn btn-danger"><i class="halflings-icon white trash"></i></a>
                    </td> -->
                </tr>
                @endforeach

              </tbody>
                
              
            </table>            
          </div>
        </div><!--/span-->
      
      </div><!--/row-->

    
    

@endsection