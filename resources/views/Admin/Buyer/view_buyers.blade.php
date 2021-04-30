@extends('/Admin/layout')
@section('content')

<div class="row-fluid sortable"> 

        <div class="box span12">
 <a href="add-buyer"><button class="btn btn-primary" style="margin: 5px;width:130px">Add New</button></a>
          <div class="box-header" data-original-title>

            <h2><i class="halflings-icon user"></i><span class="break"></span>All Buyers</h2>
          </div>

          <div class="box-content">

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                  <th>IB</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Country</th>
                  <th>City</th>
                  <th>Address</th>
                  <th>Postal Code</th>
                  <th>Phone #</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

                @if(!empty($all_buyers))
                @foreach($all_buyers as $buyer)
                  <tr>
                    <td>{{$buyer->id}}</td>
                    <td>{{$buyer->user_name}}</td>
                    <td>{{$buyer->email}}</td>
                    <td>{{$buyer->user_country}}</td>
                    <td>{{$buyer->user_city}}</td>
                    <td>{{$buyer->user_address}}</td>
                    <td>{{$buyer->user_postal_code}}</td>
                    <td>{{$buyer->user_phone}}</td>
                    <td>Active</td>
                    <td>
                      <a href="edit-buyer/{{$buyer->id}}" class="btn btn-success"><i class="halflings-icon white edit"></i></a>
                      <a href="delete-buyer/{{$buyer->id}}" class="btn btn-danger"><i class="halflings-icon white trash"></i></a>
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