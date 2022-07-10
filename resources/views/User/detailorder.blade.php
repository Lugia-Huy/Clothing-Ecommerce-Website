<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    @include('User.layout.header')
</head>

<body class="animsition">

    @include('User.layout.navbar_shop')

    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="{{url('/trackorder')}}" class="stext-109 cl8 hov-cl1 trans-04">
                Order Management
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                Detail Order
            </span>
        </div>
        <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
            <a href="{{ url()->previous() }}" class="btn btn-default text-left">Back to orders</a>
        </div>
    </div>

    <div class="bg0 p-t-15 p-b-45">
        <div class="container">
            <h4 class="mtext-109 cl2 p-b-30">
                Order Information
            </h4>
            <div class="row">
                <div class="col-md-12 order-md-1">
                    <h4 class="mb-3"><b>Billing address</b></h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstname">First name</label>
                            <input type="text" class="form-control" name="firstname" value="{{$order->firstname}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastname">Last name</label>
                            <input type="text" class="form-control" name="lastname" value="{{$order->lastname}}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$order->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{$order->phone}}">
                    </div>
                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" value="{{$order->address}}">
                    </div>
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" name="country" value="{{$order->country}}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <input type="text" class="form-control" name="state" value="{{$order->state}}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" name="zip" value="{{$order->zip}}">
                        </div>
                    </div>
                    @if ($order->method!='Cash on Delivery')
                    <h4 class="mb-3"><b>Payment</b></h4>
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <input type="text" class="form-control" name="method" value="{{$order->method}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" name="cc_name" value="{{$order->cc_name}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" name="cc_number" value="{{$order->cc_number}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input type="text" class="form-control" name="cc_expiration" value="{{$order->cc_expiration}}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" name="cc_cvv" value="{{$order->cc_cvv}}">
                        </div>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="items">Items</label>
                        <input type="text" class="form-control" name="items" value="{{$order->items}}" >
                    </div>
                    <div class="mb-3">
                        <label for="items">Total price</label>
                        <input type="text" class="form-control" name="price" value="{{$order->price}}" >
                    </div>
                    
                    <hr class="mb-4">
                </div>
            </div>
        </div>
    </div>

    @include('User.layout.footer')

    @include('User.layout.script')

</body>

</html>