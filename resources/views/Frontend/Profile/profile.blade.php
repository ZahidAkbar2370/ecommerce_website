@extends('frontend/layout')
@section('content')


<div class="banner3">
                    <div class="container shadow rounded" >
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-3">
                                      
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 products" style="padding: 10px;border: 1px solid; border-radius: 5px;  box-shadow: 5px 5px 5px 5px #888888">
                          <center><h1>My Profile</h1></center>
                                <div class="well">
                                  <form class="form-horizontal" action="{{URL::to('update-profile')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" style="width: 100%;height:38px" value="<?php echo Auth::user()->id; ?>" >
                                  <label>Name</label><br>
                                  <input type="text" name="user_name" style="width: 100%;height:38px" value="<?php echo Auth::user()->user_name; ?>" ><br><br>

                                  <label>Email</label><br>
                                  <input type="email" name="email" value="<?php echo Auth::user()->email; ?>" style="width: 100%;height:38px"><br><br>

                                  <label>Country</label><br>
                                  <input type="text" name="user_country" value="<?php echo Auth::user()->user_country; ?>" style="width: 100%;height:38px"><br><br>

                                  <label>City</label><br>
                                  <input type="text" name="user_city" value="<?php echo Auth::user()->user_city; ?>" style="width: 100%;height:38px"><br><br>

                                  <label>Address</label><br>
                                  <input type="text" name="user_address" value="<?php echo Auth::user()->user_address; ?>" style="width: 100%;height:38px"><br><br>

                                  <label>Phone</label><br>
                                  <input type="number" name="user_phone" value="<?php echo Auth::user()->user_phone; ?>" style="width: 100%;height:38px"><br><br>

                                  <label>Postal Code</label><br>
                                  <input type="number" name="user_postal_code" value="<?php echo Auth::user()->user_postal_code; ?>" style="width: 100%;height:38px"><br><br>
                                   
                                  <input type="submit" name="update_profile" value="Update Profile" class="btn btn-primary text-white">

                                </form>
                                </div>

                            </div> 
                           
                            <!-- <p class="text-center hiplink"><a href="all_products.php">SHOW MORE</a></p>  -->        
                         </div>
                    </div></center>
                    <br><br>
@endsection