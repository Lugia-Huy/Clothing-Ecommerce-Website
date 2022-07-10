<!-- Related Products -->
<section class="sec-relate-product bg0 p-t-15 p-b-85">
    <div class="container">
        <div class="p-b-45">
            <h3 class="ltext-106 cl5 txt-center">
                Related Products
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                <?php $temp = $data->category ?>
                <?php $match = 0 ?>
                @foreach($product as $products)
                @if ($products->category==$temp and $products->id!=$data->id)
                <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="productimage/{{$products->image1}}" alt="IMG-PRODUCT">

                            <a href="{{url('productdetail', $products->id)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{url('productdetail', $products->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    {{$products->title}}
                                </a>

                                <span class="stext-105 cl3">
                                    $ {{$products->title}}
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <form action="{{url('addwishlist', $products->id)}}" method="post">
                                    @csrf
                                    <button type="submit" name="submit"><i class="zmdi zmdi-favorite-outline"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $match = $match + 1 ?>
                @endif
                @endforeach
            </div>
            @if($match==0)
            <h5 class="txt-center">
                Doesn't have any items related with your current item!
            </h5>
            @endif
        </div>
    </div>
</section>