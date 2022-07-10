<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>
        <a href="{{url('/shop')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Shop
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>
        <span class="stext-109 cl4">
            Details Product
        </span>
    </div>
</div>

<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-65 p-b-60">
    <div class="container">
        @if(session()->has('message'))
        <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

        </div>
        @elseif(session()->has('warning'))
        <div class="alert alert-warning">

            <button type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('warning')}}

        </div>
        @endif
        <div class="row">
            <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-slick3-dots"></div>
                        <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                        <div class="slick3 gallery-lb">
                            <div class="item-slick3" data-thumb="productimage/{{ $data->image1 }}">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="productimage/{{ $data->image1 }}" alt="IMG-PRODUCT">

                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="productimage/{{ $data->image1 }}">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="item-slick3" data-thumb="productimage/{{ $data->image2 }}">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="productimage/{{ $data->image2 }}" alt="IMG-PRODUCT">

                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="productimage/{{ $data->image2 }}">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="item-slick3" data-thumb="productimage/{{ $data->image3 }}">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="productimage/{{ $data->image3 }}" alt="IMG-PRODUCT">

                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="productimage/{{ $data->image3 }}">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-r-50 p-t-5 p-lr-0-lg">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                        {{ $data->title }}
                    </h4>

                    <span class="mtext-106 cl2" style="color: red;">
                        ${{ $data->price }}
                    </span>

                    <p class="stext-102 cl3 p-t-23">
                        {{ $data->description }}
                    </p>

                    <p class="stext-102 cl3 p-t-23">
                        Size: {{ $data->size }}
                    </p>

                    <!--  -->
                    <div class="p-t-33">
                        <form action="{{url('addcart', $data->id)}}" method="post">
                            @csrf
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>

                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="size">
                                            <option value="">Choose an option</option>
                                            <option value="S">Size S</option>
                                            <option value="M">Size M</option>
                                            <option value="L">Size L</option>
                                            <option value="XL">Size XL</option>
                                            <option value="XXL">Size XXL</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="quatity" value="1">

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>

                                    <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" style="background-color: purple;">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!--  -->
                    <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                        <div class="flex-m bor9 p-r-10 m-r-11">
                            <form action="{{url('addwishlist', $data->id)}}" method="post">
                                @csrf
                                <button type="submit" name="submit"><i class="zmdi zmdi-favorite-outline"></i></button>
                            </form>
                        </div>

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bor10 m-t-50 p-t-43 p-b-40">
            <!-- Tab01 -->
            <div class="tab01">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item p-b-10">
                        <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews ({{$countfeedback}})</a>
                    </li>
                </ul>
                @if ($countfeedback==0)
                <p class="stext-102 cl6 txt-center " style="margin-top: 0px;">
                    This product has no reviews yet, be the first to review it!
                </p>
                @endif

                <!-- Tab panes -->
                <div class="tab-content p-t-43">
                    <!-- - -->
                    <div class="tab-pane show active" id="reviews" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                <div class="p-b-30 m-lr-15-sm">
                                    <!-- Review -->
                                    @foreach ($review as $reviews)
                                    <div class="flex-w flex-t p-b-68">
                                        <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                            <img src="images/avatar-01.jpg" alt="AVATAR">
                                        </div>

                                        <div class="size-207">
                                            <div class="flex-w flex-sb-m p-b-17">
                                                <span class="mtext-107 cl2 p-r-20">
                                                    {{$reviews->user_name}}
                                                </span>

                                                <span class="fs-18 cl11">
                                                    <?php $rate = $reviews->rating ?>
                                                    @for ($i = 0; $i < 5; $i++) @if ($rate>0)
                                                        <i class="zmdi zmdi-star"></i>
                                                        @else
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        @endif
                                                        <?php $rate = $rate - 1 ?>
                                                        @endfor
                                                </span>
                                            </div>

                                            <p class="stext-102 cl6">
                                                {{$reviews->feedback}}
                                            </p>
                                            @if (Route::has('login'))
                                            @auth
                                            @if ($reviews->id_user==$user->id)
                                            <p class="stext-102 cl12">
                                                <a style="color: red;" href="{{url('deletefeedback', $reviews->id)}}">Delete</a>
                                            </p>
                                            @endif
                                            @endauth
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- Add review -->
                                    <form class="w-full" action="{{url('feedback', $data->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <h5 class="mtext-108 cl2 p-b-7">
                                            Add a review
                                        </h5>

                                        <p class="stext-102 cl16">
                                            Please leave a review below.
                                        </p>

                                        <div class="flex-w flex-m p-t-50 p-b-23">
                                            <span class="stext-102 cl3 m-r-16">
                                                Your Rating
                                            </span>

                                            <span class="wrap-rating fs-18 cl11 pointer">
                                                <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                <input class="dis-none" type="number" name="rating" require="">
                                            </span>
                                        </div>

                                        <div class="row p-b-25">
                                            <div class="col-12 p-b-5">
                                                <label class="stext-102 cl3" for="review">Your review</label>
                                                <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review" require=""></textarea>
                                            </div>
                                        </div>

                                        <div class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                                            <input type="submit" name="submit" value="Submit">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
        <span class="stext-107 cl6 p-lr-25">
            Feel the above item is not suitable for you? Don't worry, there are plenty of other options!
        </span>
    </div>
    
</section>