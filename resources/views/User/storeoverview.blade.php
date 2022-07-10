<!-- Product -->
<section class="sec-product bg0 p-t-100 p-b-50">
    <div class="container">
        <div class="p-b-32">
            <h3 class="ltext-105 cl5 txt-center respon1">
                Store Overview
            </h3>
        </div>

        <!-- Tab01 -->
        <div class="tab01">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item p-b-10">
                    <a class="nav-link" data-toggle="tab" href="#best-seller" role="tab">Latest Clothes</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content p-t-50">
                <!-- - -->
                <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                    <!-- Slide2 -->
                    <div class="wrap-slick2">
                        <div class="slick2">

                            @foreach($data as $product)
                            <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-pic hov-img0">
                                        <img src="productimage/{{$product->image1}}" alt="IMG-PRODUCT">

                                        <a href="{{url('productdetail', $product->id)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                            View
                                        </a>
                                    </div>

                                    <div class="block2-txt flex-w flex-t p-t-14">
                                        <div class="block2-txt-child1 flex-col-l ">
                                            <a href="{{url('productdetail', $product->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                {{$product->title}}
                                            </a>

                                            <span class="stext-105 cl3">
                                                ${{$product->price}}
                                            </span>
                                        </div>

                                        <div class="block2-txt-child2 flex-r p-t-3">
                                            <form action="{{url('addwishlist', $product->id)}}" method="post">
                                                @csrf
                                                <button type="submit" name="submit"><i class="zmdi zmdi-favorite-outline"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>