@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->
                       
                       <div class="fb-like" data-href="{{$url_canonical}}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="false"></div>
                        @foreach($category_name as $key => $name)
                       
                        <h2 class="title text-center">{{$name->category_name}}</h2>

                        @endforeach
                        @foreach($category_by_id as $key => $product)
                        <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                        <div class="col-sm-4">
                             <div class="product-image-wrapper">
                           
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <form>
                                                @csrf
                                            <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                                            <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">

                                            <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                                                <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                                                <h2>{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</h2>
                                                <p>{{$product->product_name}}</p>

                                             
                                             </a>
                                            <input type="button" value="Add To Cart" class="btn btn-default add-to-cart" data-id_product="{{$product->product_id}}" name="add-to-cart">
                                            </form>

                                        </div>
                                      
                                </div>
                           
                                
                            </div>
                        </div>
                        </a>
                        @endforeach
                    </div><!--features_items-->
                   <ul class="pagination pagination-sm m-t-none m-b-none">
                       {!!$category_by_id->links()!!}
                    </ul>

        <!--/recommended_items-->
@endsection
