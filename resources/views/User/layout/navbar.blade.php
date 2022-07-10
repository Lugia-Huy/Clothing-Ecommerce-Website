<!-- Header -->
<header class="header-v2">
    <!-- Header desktop -->
    <div class="container-menu-desktop trans-03">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop p-l-45">

                <!-- Logo desktop -->
                <a href="{{url('/')}}" class="logo">
                    <img src="images/icons/logo-01.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="active-menu">
                            <a href="{{url('/')}}">Home</a>
                        </li>

                        <li class="label1" data-label1="hot">
                            <a href="{{url('/shop')}}">Shop</a>
                        </li>

                        <li>
                            <a href="{{url('/about')}}">About</a>
                        </li>

                        <li>
                            <a href="{{url('/trackorder')}}">Order</a>
                        </li>

                        <li>
                            <a href="{{url('/contact')}}">Contact</a>
                        </li>

                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m h-full">
                    <div class="flex-c-m h-full p-r-24">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>
                    </div>
                    <div class="flex-c-m h-full p-l-18 p-r-25 bor5">
                        @if (Route::has('login'))

                        @auth
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="{{$count}}">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                        @else
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="0">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                        @endauth
                        @endif
                    </div>
                    <div class="flex-c-m h-full p-l-10 p-r-15 bor5">
                        @if (Route::has('login'))

                        @auth
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="{{$count_wishlist}}">
                            <a href="{{url('wishlist')}}"><i class="zmdi zmdi-favorite-outline"></i></a>
                        </div>
                        @else
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                            <a href="{{url('wishlist')}}"><i class="zmdi zmdi-favorite-outline"></i></a>
                        </div>
                        @endauth
                        @endif
                    </div>
                    <div class="flex-c-m h-full p-lr-19">
                        @if (Route::has('login'))

                        @auth
                        <x-app-layout>

                        </x-app-layout>
                        @else
                        <ul class="main-menu">
                            <li><a href="{{ route('login') }}">Log in</a></li>

                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>

                            @endif
                            @endauth
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="{{url('/')}}"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
            <div class="flex-c-m h-full p-r-10">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>
            </div>

            <div class="flex-c-m h-full p-lr-10 bor5">
                @if (Route::has('login'))

                @auth
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="{{$count_wishlist}}">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>
                @else
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="0">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>
                @endauth
                @endif
            </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li>
                <a href="{{url('/')}}">Home</a>
                <span class="arrow-main-menu-m">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>
            </li>

            <li>
                <a href="{{url('/shop')}}" class="label1 rs1" data-label1="hot">Shop</a>
            </li>

            <li>
                <a href="{{url('/about')}}">About</a>
            </li>

            <li>
                <a href="{{url('/contact')}}">Contact</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15" action="{{url('search')}}">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                @csrf
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>

<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
            <span class="mtext-103 cl2">
                Your Cart
            </span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="header-cart-content flex-w js-pscroll">
            @if (Route::has('login'))

            @auth
            @if ($count>0)
            <ul class="header-cart-wrapitem w-full">
                <?php $totalprice = 0 ?>
                @foreach($cart as $carts)
                <li class="header-cart-item flex-w flex-t m-b-12">
                    <div class="header-cart-item-img">
                        <img src="productimage/{{$carts->image}}" alt="IMG">
                    </div>

                    <div class="header-cart-item-txt p-t-8">
                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                            {{$carts->product_title}}
                        </a>

                        <span class="header-cart-item-info">
                            {{$carts->quatity}} x ${{$carts->price}}
                        </span>
                    </div>
                </li>
                <?php $totalprice = $totalprice + ($carts->price * $carts->quatity) ?>
                @endforeach
            </ul>

            <div class="w-full">
                <div class="header-cart-total w-full p-tb-40">
                    Total: ${{$totalprice}}
                </div>

                <div class="header-cart-buttons flex-w w-full">
                    <a href="{{url('showcart')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        View Cart
                    </a>

                    <a href="{{url('showpayment')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Check Out
                    </a>
                </div>
            </div>
            @else
            <ul class="header-cart-wrapitem w-full">
                <div class="header-cart-total w-full p-tb-40">
                    There are nothing here!
                </div>
            </ul>
            <div class="w-full">
                <a href="{{url('shop')}}" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04">
                    >>> Go Shopping >>>
                </a>
            </div>
            @endif
            @else
            <ul class="header-cart-wrapitem w-full">
                <div class="header-cart-total w-full p-tb-40">
                    Login to check your cart!
                </div>
            </ul>
            <div class="w-full">

            </div>
            @endauth
            @endif
        </div>
    </div>
</div>