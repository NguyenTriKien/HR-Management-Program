@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Search Result</h2>
                       @foreach($search_product as $key => $product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                             <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                                            <h2>{{number_format($product->product_price).' '.'VNĐ'}}</h2>
                                            <p>{{$product->product_name}}</p>
                                            <input type="button" value="Add To Cart" class="btn btn-default add-to-cart" data-id_product="{{$product->product_id}}" name="add-to-cart">
                                        </div>
                                      
                                </div>
                            </a>
                                
                            </div>
                        </div>
                        @endforeach
                    </div><!--features_items--> 
        <!--/recommended_items-->
@endsection
