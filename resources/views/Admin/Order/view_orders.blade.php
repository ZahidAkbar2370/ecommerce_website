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
                  <th>Ordered Product Quantity</th>
                  <th>Total Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

                
                  <tr>
                    <td>1</td>
                    <td>Zahid</td>
                    <td>janu@gmail.com</td>
                    <td>layyah</td>
                    <td>03081312527</td>
                    <td>2</td>
                    <td>200</td>
                    <td>Pending</td>
                    <td><a href="#">Order Detail</a></td>
                    <td>
                      <a href="#" class="btn btn-success"><i class="halflings-icon white thum"></i></a>
                      <a href="#" class="btn btn-danger"><i class="halflings-icon white trash"></i></a>
                  </td>
                </tr>
              </tbody>
                
              
            </table>            
          </div>
        </div><!--/span-->
      
      </div><!--/row-->

    
    

@endsection