@extends('/Admin/layout')
@section('content')

<div class="row-fluid sortable"> 

        <div class="box span12">
        <div class="box-header" data-original-title>

            <h2><i class="halflings-icon user"></i><span class="break"></span>All Messages</h2>
          </div>

          <div class="box-content">

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                  <th>Contact ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

                @if(!empty($all_contacts))
                @foreach($all_contacts as $contact)
                  <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->message}}</td>
                    <td>Active</td>
                    <td>
                     <a href="delete-contact/{{$contact->id}}" class="btn btn-danger"><i class="halflings-icon white trash"></i></a>
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