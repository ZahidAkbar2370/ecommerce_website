@extends('Frontend/layout')
@section('content')

<div class="wrapper " >
                <div class="content " style="background-color: white">
                    <div class="container a1 well">
                        <div class="row" style="padding: 10px;border: 1px solid; border-radius: 5px;  box-shadow: 5px 5px 5px 5px #888888">
                        <div class="col-md-6 contacts">
                            <h1>Contact</h1>
                            <div class="col-md-6 iae">
                                <h4>Name</h4>
                                <p>Zahid Akbar</p>
                                <br>
                                <h4>Adress</h4>
                                <p>Layyah</p>
                                <br>
                                <h4>Email</h4>
                                <p><a href="#">janujakhar2370@gmail.com</a></p>
                            </div>
                            <div class="col-md-6 fbh">
                                <h4>Phone</h4>
                                <p>+923081312527</p>
                            </div>
                          
                        </div>

                        
                        <div class="col-md-6 pannel" style="margin-top: 20px">
                           <h1>Message</h1>

                           @if(!empty($message))
                           		<p style="color: green"><b>{{$message}}</b></p>
                           @endif
                           
                           <form action="{{URL::to('save-contact')}}" method="POST">

                           	@csrf
                            <input type="text" name="name" placeholder="Name" style="width:100%;height:40px;border-radius: 5px;border: 1px solid;padding-left: 15px" required=""><br><br>
                            <input type="text" name="email" placeholder="Example@gmail.com" style="width:100%;height:40px;border-radius: 5px;border: 1px solid;padding-left: 15px" required=""><br><br>
                            <textarea style="height: 130px;border: 1px solid;background-color: white;padding-left: 15px;border-radius: 5px" name="message" required="" placeholder="Enter You Message Here..."></textarea>
                            <!-- <input type="text" style="width:100%;height: 140px" name="message"> -->
                                
                            <br><br>
                            <input type="submit" name="message_submit" class="btn btn-primary" style="width: 150px">
                            </form>

                        </div>
                    </div>
                </div>
                </div>
                </div>

@endsection