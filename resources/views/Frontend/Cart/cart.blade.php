@extends('Frontend/layout')
@section('content')

    <div class="container">
        <h1>Cart</h1>
        <!-- <?php  $totelPrice = 0; ?> -->
         @foreach($data as $key =>  $values)



        <div class="row" style="padding: 10px;border: 1px solid; border-radius: 5px; background-color: #eee; box-shadow: 5px 10px #888888">

        <p class="p1">{{$key+1}} ITEM</p>
            <div class="col-md-4 img">
                <img class="img-responsive" style="height:150px;" src="{{$values->image}}">
            </div>

            <div class="col-md-2 hd walls">
                <h5>category</h5>
                <h4>{{$values->category}}</h4>
            </div>

            <div class="col-md-2 hd walls">
                <h5>Quantity</h5>
                <h4>{{$values->product_quantity}}</h4>
            </div>
            <div class="col-md-2 hd walls">
                <h5>Price</h5>
                <h4>{{$values->price}}</h4>
            </div>

           <!--  <div class="col-md-2 hd walls">
                <h5>Total Price</h5>
                <h4>{{$values->price*$values->product_quantity}}</h4>
            </div> -->

            <div class="col-md-2 hd walls">
                <h5>Action</h5>
                <a href="delete-cart-order/{{$values->cartID}}"><button>Cancle</button></a>
            </div>

        </div> 
        <!-- <?php 

        $totelPrice += $values->price * $values->product_quantity; ?> -->
        <br><br>
        @endforeach     

        <!-- <?php echo "<h1>Total Price :$totelPrice</h1>";?> -->
        <div style="margin-bottom: 50px;" > <a href="{{url('checkout')}}" class="btn btn-primary">Continue to Checkout </a>
            <br><br> <span><b> Note : </b> You must have to register or login to process the order </span>
        </div>

                     
    </div>

@endsection