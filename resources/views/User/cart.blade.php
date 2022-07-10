<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Shoping Cart
        </span>
    </div>
</div>

<!-- Shoping Cart -->
<form class="bg0 p-t-75 p-b-85">
    <div class="container">
        @if(session()->has('message'))

        <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

        </div>
        @endif
        <div class="row">

            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <form action="{{url('order')}}" method="post">
                        @csrf
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Image</th>
                                    <th class="column-2">Product</th>
                                    <th class="column-3">Price</th>
                                    <th class="column-4">Quantity</th>
                                    <th class="column-5">Total</th>
                                    <th class="column-6">Action</th>
                                </tr>
                                <?php
                                $totalprice = 0;
                                $coupon = 0;
                                $discount = 0;
                                $final = 0;
                                ?>

                                @foreach($cart as $carts)
                                <form action="{{url('/updatecart', $carts->id)}}" method='post' enctype="multipart/form-data">
                                    @csrf
                                    <tr class="table_row">
                                        <td class="column-1">
                                            <div class="how-itemcart1">
                                                <img src="productimage/{{$carts->image}}" alt="IMG">
                                            </div>
                                        </td>
                                        <td class="column-2">
                                            {{$carts->product_title}}
                                        </td>
                                        <td class="column-3">
                                            $ {{$carts->price}}
                                        </td>
                                        <td class="column-4">
                                            {{$carts->quatity}}
                                        </td>
                                        <td class="column-5">
                                            $ {{$carts->price*$carts->quatity}}
                                        </td>
                                        <td class="column-6">
                                            <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('delete', $carts->id)}}">Delete</a>
                                        </td>
                                    </tr>
                                </form>
                                <?php
                                $totalprice = $totalprice + ($carts->price * $carts->quatity);
                                if ($carts->coupon == "ABC") {
                                    $coupon = 15;
                                }
                                $discount = $totalprice * $coupon / 100;
                                $final = $totalprice - $discount;
                                ?>
                                @endforeach

                            </table>
                        </div>

                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            @if($count!=0)
                            <form action="{{url('/updatecoupon', $carts->id)}}" method='post' enctype="multipart/form-data">
                                @csrf
                                <div class="flex-w flex-m m-r-20 m-tb-5">

                                    <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">

                                    <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                        <input type="submit" name="submit" value="Apply coupon">
                                    </div>
                                </div>
                            </form>
                            @else
                            <div class="flex-w flex-m m-r-20 m-tb-5">
                                <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">

                                <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                    <input type="submit" name="submit" value="Apply coupon">
                                </div>
                            </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30">
                        Cart Totals
                    </h4>

                    <div class="flex-w flex-t bor12 p-b-13">
                        <div class="size-208">
                            <span class="stext-110 cl2">
                                Subtotal:
                            </span>
                        </div>

                        <div class="size-209">
                            <span class="mtext-110 cl2">
                                $ {{$totalprice}}
                            </span>
                        </div>
                    </div>

                    <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                        <div class="size-208 w-full-ssm">
                            <span class="stext-110 cl2">
                                Discount:
                            </span>
                        </div>

                        <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                            <p class="stext-111 cl6 p-t-2">
                                $ {{$discount}}
                            </p>

                        </div>
                    </div>

                    <div class="flex-w flex-t p-t-27 p-b-33">
                        <div class="size-208">
                            <span class="mtext-101 cl2">
                                Total:
                            </span>
                        </div>

                        <div class="size-209 p-t-1">
                            <span class="mtext-110 cl2">
                                $ {{$final}}
                            </span>
                        </div>
                    </div>

                    <a href="{{url('/showpaymentcod')}}" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04">
                        Checkout Cash on Delivery
                    </a>
                    <br>
                    <a href="{{url('/showpayment')}}" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04">
                        Checkout Card Credit
                    </a>
                </div>
            </div>

        </div>
    </div>
</form>