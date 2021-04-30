@extends('/Admin/layout')
@section('content')

<div class="row-fluid sortable"> 

        <div class="box span12">
 <a href="add-category"><button class="btn btn-primary" style="margin: 5px;width:130px">Add New</button></a>
          <div class="box-header" data-original-title>

            <h2><i class="halflings-icon user"></i><span class="break"></span>All Products</h2>
          </div>

          <div class="box-content">

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                  <th>Category ID</th>
                  <th>Category Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

                @if(!empty($all_categorys))
                @foreach($all_categorys as $category)
                  <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>Active</td>
                    <td>
                      <a href="edit-category/{{$category->id}}" class="btn btn-success"><i class="halflings-icon white edit"></i></a>
                      <a href="delete-category/{{$category->id}}" class="btn btn-danger"><i class="halflings-icon white trash"></i></a>
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