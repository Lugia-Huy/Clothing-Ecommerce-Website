<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <a href="{{url('/showcart')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Shopping Cart
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Payment
        </span>
    </div>
</div>
@if(session()->has('message'))

<div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert">x</button>

    {{session()->get('message')}}

</div>
@endif

<div class="bg0 p-t-75 p-b-85">
    <div class="container">
        <h4 class="mtext-109 cl2 p-b-30">
            Checkout Information
        </h4>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted"><b>Your cart</b></span>
                    <span class="badge badge-secondary badge-pill">{{$count}}</span>
                </h4>

                <ul class="list-group mb-3">
                    <?php $totalprice = 0;$coupon = 0;?>
                    <?php $items = '' ?>
                    @foreach($cart as $carts)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{$carts->product_title}} X {{$carts->quatity}}</h6>
                            <small class="text-muted">{{$carts->size}}</small>
                        </div>
                        <span class="text-muted">$ {{$carts->price*$carts->quatity}}</span>
                    </li>
                    <?php
                        $totalprice = $totalprice + ($carts->price * $carts->quatity);
                        if($carts->coupon=="ABC"){
                            $coupon = 15;
                        }
                        $discount=$totalprice*$coupon/100;
                        $final=$totalprice-$discount;
                    ?>
                    @if($cart[0]->product_title==$carts->product_title)
                    <?php $items = $items . $carts->product_title . ' X ' . $carts->quatity ?>
                    @else
                    <?php $items = $items . '; ' . $carts->product_title . ' X ' . $carts->quatity ?>
                    @endif
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Discount</h6>
                        </div>
                        <span class="text-muted">$ {{$discount}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$ {{$final}}</strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3"><b>Billing address</b></h4>
                <form class="needs-validation" action="{{url('/confirmpaymentcod')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstname">First name</label>
                            <input type="text" class="form-control" name="firstname" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastname">Last name</label>
                            <input type="text" class="form-control" name="lastname" required="">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" name="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="(+84)  " required="">
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" required="">
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" name="country" placeholder="Vietnam" required="">
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <input type="text" class="form-control" name="state" placeholder="Ho Chi Minh" required="">
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" name="zip" required="">
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="items">Items</label>
                        <input type="text" class="form-control" name="items" value="{{$items}}" hidden>
                        <h3>{{$items}}</h3>
                    </div>
                    <div class="mb-3">
                        <label for="items">Total price</label>
                        <input type="text" class="form-control" name="price" value="{{$final}}" hidden>
                        <h3>{{$final}}</h3>
                    </div>
                    <hr class="mb-4">
                    <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        <input type="submit" name="submit" value="Confirm checkout">
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>