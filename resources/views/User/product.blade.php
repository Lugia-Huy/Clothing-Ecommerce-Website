<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>
        <span class="stext-109 cl4">
            Shop items
        </span>
    </div>
</div>

<!-- Product -->
<div class="bg0 m-t-23 p-b-140">
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
        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                    All Products
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
                    Women
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
                    Men
                </button>
            </div>

            <div class="flex-w flex-c-m m-tb-10">

                <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                    <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                    <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Search
                </div>
            </div>

            <!-- Search product -->
            <div class="dis-none panel-search w-full p-t-10 p-b-15">
                <div class="bor8 dis-flex p-l-15">
                    <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <form action="{{url('search')}}">
                        @csrf
                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" id="myInput" name="search" placeholder="Search">
                    </form>
                </div>
            </div>

            @include('User.filter')
            <div class="row isotope-grid">
                @foreach($data as $product)
                @if($product->gender=='women')
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                    @else
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                        @endif
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
                @if(method_exists($data, 'links') and $count_wishlist!=0)
                <div class="d-flex justify-content-center">
                    {!! $data->links() !!}
                </div>
                @endif
            </div>
        </div>
    </div>