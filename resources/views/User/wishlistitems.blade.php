<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>
        <span class="stext-109 cl4">
            Wishlist
        </span>
    </div>
</div>

<!-- Product -->
<div class="bg0 m-t-23 p-b-140">
    <div class="container">
        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
            </div>
            <div class="flex-w flex-c-m m-tb-10">
            </div>

            @include('User.filter') 
            <div class="row isotope-grid">
                @foreach($wishlist as $wishlists)
                <?php $idw = $wishlists->id_product ?>
                @foreach($data as $products)
                <?php $idp = $products->id ?>
                @if($idw==$idp)
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img height="350" width="150" src="productimage/{{$products->image1}}" alt="IMG-PRODUCT">
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
                                    ${{$products->price}}
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('deletewishlist', $wishlists->id)}}">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @endforeach
                @if($count_wishlist==0)
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
                    <h2 class="text-center">There is nothing here!</h2>
                </div>
                @endif
            </div>

            @if(method_exists($data, 'links') and $count_wishlist!=0)
            <div class="d-flex justify-content-center">
                {{!! $data->links() !!}}
            </div>
            @endif
        </div>
    </div>