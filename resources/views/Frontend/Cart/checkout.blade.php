@extends('Frontend/layout')
@section('content')

  <div class="wrapper">
                    <div class="container"><h1>CHECKOUT</h1></div>
                    <div class="container pannel">
                        
                      
                        <div class="col-md-12 tod">
                            <h3>Your order</h3>
                            <table class="table table-bordered">
                                <tr>
                                <th>Product</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>T.Price</th>

                               
                              </tr>

                            <?php 
                            $totalPrice = 0;
                            $totalItem = 0;
                            ?>
                            @if(!empty($data))
                            @foreach($data as $value)

                            

                              <tr>
                                <td>{{$value->product_name}}</b></td>
                                <td>{{$value->product_quantity}}</td>
                                <td>{{$value->price}}</td>
                                <td>{{$value->price*$value->product_quantity}}</td>
                              </tr>
                            <?php $totalPrice += $value->price*$value->product_quantity ;
                            	$totalItem++;
                            ?>
                           
                             @endforeach
                             @endif
                              <tr>
                             <td colspan="2"> <b>Total Price</b></td>
                             <td><b><?php echo $totalPrice; ?></b></td>
                             </tr>

                             <tr>
                             <td colspan="2"> <b>Total Items</b></td>
                             <td><b><?php echo $totalItem; ?></b></td>
                             </tr>
                          </table>

                          <div>

                            <h5>Payement On Delivery</h5>
                            
                            <form action="{{URL::to('save-checkout')}}" method="POST">
                              @csrf
                              <input type="hidden" name="total_items" value="<?php echo $totalItem; ?>">
                              <input type="hidden" name="total_price" value="<?php echo $totalPrice; ?>">
                            <input type="submit" name="" class="btn btn-primary" value="Confirm Order">
                             <a href="{{url('view-cart')}}" class="btn btn-primary">Back to Edit</a>
                            </form>
                            <br><br>
                          
                          
                          </div>
                        </div>
                    </div>
                </div>


@endsection