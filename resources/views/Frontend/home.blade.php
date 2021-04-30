@extends('Frontend/layout')
@section('content')


 <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                           <div class="item active">
                                 
                                <div class="col-sm-12">
                                    <img src="{{asset('frontend/images/home/girl1.jpg')}}" class="girl img-responsive"  alt="" style="width: 100%;height:400px"  />
                                </div>
                            </div>

                            <div class="item">
                                 
                                <div class="col-sm-12">
                                    <img src="{{asset('frontend/images/home/girl2.jpg')}}" class="girl img-responsive"  alt="" style="width: 100%;height:400px"  />
                                </div>
                            </div>

                            <div class="item">
                                 
                                <div class="col-sm-12">
                                    <img src="{{asset('frontend/images/home/girl3.jpg')}}" class="girl img-responsive"  alt="" style="width: 100%;height:400px"  />
                                </div>
                            </div>
                        </div>
                    </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>

                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
    </section>




    <section>
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="product-image-wrapper">
                        <h2 style="padding-left: 10px;color: #FE980F">Categories</h2>
                            <p><a href="#" > <span style=" padding-left: 20px; font-size:15px; cursor:pointer;"> All Category </span> <a><p>
                        @if(!empty($all_categories))
                        @foreach($all_categories as $key=> $category)
                            <p><a href="#" > <span style=" padding-left: 20px; font-size:15px; cursor:pointer;"> {{$category->category_name}} </span> <a><p>
                        @endforeach
                        @endif   
                    </div>
                         
                </div>

                <div class="col-md-9 padding-right">
                    <div class="features_items">
                       <div class="recommended_items">
                        <h2 class="title text-center">recommended items</h2>
                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @if(!empty($all_products))
                                        @foreach($all_products as $key=> $product)
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{$product->image}}" width="250px" height="150px" alt="" />
                                                            <h4 style="color: #FE980F">${{$product->price}}</h4>
                                                            <p style="height:43px;overflow: hidden">{{$product->product_name}}</p>
                                                            <a href="product-detail/{{$product->id}}"><button class="btn btn-primary" style="margin-bottom: 10px">Add Card</button></a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection