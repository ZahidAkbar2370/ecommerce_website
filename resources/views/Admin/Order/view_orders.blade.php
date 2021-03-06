@extends('/Admin/layout')
@section('content')
<div class="row-fluid sortable"> 

        <div class="box span12">
          <div class="box-header" data-original-title>
          <h2><i class="halflings-icon user"></i><span class="break"></span>All Orders</h2>
          </div>

          <div class="box-content">

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                  <th>Order ID</th>
                  <th>User Name</th>
                  <th>User Email</th>
                  <th>User Address</th>
                  <th>User Phone</th>
                  <th>Ordered Items</th>
                  <th>Total Price</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

                @foreach($data as $values)
                  <tr>
                    <td>{{$values->orderID}}</td>
                    <td>{{$values->user_name}}</td>
                    <td>{{$values->email}}</td>
                    <td>{{$values->user_address}}</td>
                    <td>{{$values->user_phone}}</td>
                    <td>{{$values->total_items}}</td>
                    <td>{{$values->total_price}}</td>
                    <td><a href="view_order_detail/{{$values->orderID}}">Order Detail</a></td>
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