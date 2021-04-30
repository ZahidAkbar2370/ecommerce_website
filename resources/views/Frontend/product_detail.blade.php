@extends('Frontend/layout')
@section('content')


<div class="container a1">

    <h3>{{$product->product_name}}</h3>

    <div class="col-md-5 image">
        <a href="#"><img class="img-responsive" src="{{$product->image}}" alt="image" style="width: 100%;height: 500px"></a>
    </div>

    <div class="col-md-7 details">
        <h3>Description</h3>
        <p class="desp">{{$product->description}}</p><hr>

            <div class="col-md-6">
                <table>
                                    
                    <tr>
                        <th>Category: </th>
                        <td>{{$product->category}}</td>
                    </tr>
                                   
                </table>
<hr>
            </div>

    <div class="col-md-6">
        <table>
            <tr>
                <th>Price: </th>
                <td>{{$product->price}}</td>
            </tr>
                                   
        </table>
<hr>
    </div>

        <table class="ptable">
            <tr>
                <th>Quantity</th>
            </tr>

        <tr>
                                        
            <td>
                <form id='myform' action="{{URL::to('add-to-cart')}}" method="POST">
                    @csrf
                    <input type="hidden" name='pro_title' value='{{$product->product_name}}'>
                    <!-- <input type="hidden" name='pro_image' value='{{$product->image}}'> -->
                    <input type='button' value='-' class='qtyminus' field='quantity' />
                    <input type='text' name='product_quantity' value='0' class="qty" />
                    <input type='button' value='+' class='qtyplus' field='quantity' />
                    <input type='hidden' name='prodcut_id' value='{{$product->id}}' />
                    <!-- <input type='hidden' name='pro_price' value='{{$product->price}}' /> -->
                                                <hr>
                    <input id="submit_checkout" type='submit' name="submit_checkout" class="btn btn-primary" value="Add to Cart">
                </form>
            </td>
        </tr>
                                  
        </table>
    </div>
</div>


<script type="text/javascript">
                    $(document).ready(function(){
                    // This button will increment the value
                    $('.qtyplus').click(function(e){
                        // Stop acting like a button
                        e.preventDefault();
                        // Get the field name
                        fieldName = $(this).attr('field');
                        // Get its current value
                        var currentVal = parseInt($('input[name='+fieldName+']').val());
                        // If is not undefined
                        if (!isNaN(currentVal)) {
                            // Increment
                            $('input[name='+fieldName+']').val(currentVal + 1);
                        } else {
                            // Otherwise put a 0 there
                            $('input[name='+fieldName+']').val(0);
                        }
                    });
                    // This button will decrement the value till 0
                    $(".qtyminus").click(function(e) {
                        // Stop acting like a button
                        e.preventDefault();
                        // Get the field name
                        fieldName = $(this).attr('field');
                        // Get its current value
                        var currentVal = parseInt($('input[name='+fieldName+']').val());
                        // If it isn't undefined or its greater than 0
                        if (!isNaN(currentVal) && currentVal > 0) {
                            // Decrement one
                            $('input[name='+fieldName+']').val(currentVal - 1);
                        } else {
                            // Otherwise put a 0 there
                            $('input[name='+fieldName+']').val(0);
                        }
                    });

                });

                </script>
@endsection