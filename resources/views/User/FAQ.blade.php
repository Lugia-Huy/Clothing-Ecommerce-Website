<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

    @include('User.layout.header')
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.0.js"></script>
    <style>
        div {
            text-align: justify;
        }

        section {
            padding: 60px;
        }

        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .faq {
            padding: 30px 0 50px;
            background: #f7fbff;
            min-height: 100vh;
        }

        .faq .section-title {
            margin-bottom: 54px;
        }

        .faq .section-title h2 {
            margin-bottom: 22px;
        }

        .faq .accordion .card {
            border: none;
            margin-bottom: 30px;
        }

        .faq .accordion .card:not(:first-of-type) .card-header:first-child {
            border-radius: 10px;
        }

        .faq .accordion .card .card-header {
            border: none;
            border-radius: 10px;
            padding: 0;
        }

        .faq .accordion .card .card-header h5 {
            padding: 0;
        }

        .faq .accordion .card .card-header h5 button {
            color: #1e3056;
            font-size: 18px;
            font-weight: 500;
            text-decoration: none;
            padding: 0 30px 0 70px;
            height: 80px;
            display: block;
            width: 100%;
            color: rgba(30, 48, 86, 0.8);
            text-align: left;
            background: #fff;
            border-radius: 10px 10px 0 0;
            position: relative;
        }

        .faq .accordion .card .card-header h5 button:after {
            position: absolute;
            left: 30px;
            top: 50%;
            margin-top: -10px;
            width: 20px;
            height: 20px;
            background-color: transparent;
            color: #ff5f74;
            text-align: center;
            border: 1px solid #ff5f74;
            border-radius: 50%;
            line-height: 100%;
            content: '\f067';
            font-size: 10px;
            line-height: 18px;
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
        }

        .faq .accordion .card .card-header h5 button.collapsed {
            background: #fff;
            border-radius: 10px;
            box-shadow: none;
            border: 1px solid rgba(97, 125, 255, 0.2);
        }

        .faq .accordion .card .card-header h5 button[aria-expanded="true"]:after {
            content: '\f068';
            color: #fff;
            background-image: #ff5f74;
        }

        .faq .accordion .card .card-body {
            -webkit-box-shadow: 0px 15px 140px 0px rgba(69, 81, 100, 0.1);
            box-shadow: 0px 15px 140px 0px rgba(69, 81, 100, 0.1);
            border-radius: 0 0 10px 10px;
            padding-top: 0;
            margin-top: -6px;
            padding-left: 72px;
            padding-right: 70px;
            padding-bottom: 23px;
            color: rgba(30, 48, 86, 0.8);
            line-height: 30px;
        }
    </style>
</head>

<body>
    @include('User.layout.navbar_shop')
    <section class="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 text-center">
                    <div class="section-title txt-center ">
                        <p style="font-size: 35px;"><b>Help & FAQ</b></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                What is Sebastian Store?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            'Sebastian Store' is a new online shopping application founded by a group of young people who are passionate about fashion and want to connect with other people with the same passion.
                                            We are dynamic young people who always bring you quality and affordable clothes, in line with the trends of today's youth.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Delivery Information
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            We offer free shipping for all orders over $75.
                                            For orders below $75 we charge a $7.95 shipping fee for Standard Post.<br>
                                            There are also major delivery delays occurring in some areas, and some parcels are taking up to an extra 7 business days from the estimated delivery date to arrive.
                                            If you have received your tracking number, we can assure you that your order has been shipped by us and is currently on the way to you with the courier.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                How do Sebastian Store sizes work?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            All products sold by Sebastian Store are sized in accordance with international standard sizes. You will find size selection located on each product page in the right hand column.
                                            We recommend that you check our product measurements before submitting an online order with Sebastian Store.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                                About Wish List
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse4" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            You can store your favourite products in [Wish List] to purchase later in our online store.
                                            It is very easy and all you need to do is click the [HEART Shape] icon on the product picture to be included in your wish list.
                                            You can remove the product from your wish list whenever you want by clicking the same icon again.<br>
                                            To complete your purchase in the wish list, simply click the product and put inside your cart to checkout as usual.
                                            Please be informed that the product inside the wish list does not guarantee the reservation.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseOne">
                                                Refund the product?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapse5" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            If your item has gone into sale post purchase, unfortunately we are unable to price adjust or price match the difference between the original and sale price of your item. We're sorry for any disappointment this may cause.
                                            If your item is unworn, with tags still attached and you have the original receipt - you may return your item for a refund.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapseTwo">
                                                Can I request a tax invoice?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse6" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Unfortunately, we are unable to re-print another copy of your tax invoice. However, a copy of your Tax Invoice will always be included inside your parcel and to please ensure you keep this copy.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapseThree">
                                                Coupon & Promotions
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse7" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                        To apply the coupon, click on your cart and select [Coupon] in the Order Summary. Select your coupon and enter the discount code in the blank box. Click [APPLY] once confirmed.
                                        After successful application, you can continue [CHECKOUT] or continue shopping.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapseThree">
                                                Subscribe to the Sebastian Store newsletter?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse8" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            You can subscribe to our newsletter by clicking here, or on “SUBCRIBE” under E-Newsletter at the bottom of the Sebastian Store website. 
                                            Our newsletter will keep you up-to-date with the latest launches, arrivals, exclusive promotions, and limited offers.
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    @include('User.layout.footer')

    @include('User.layout.script')

</body>

</html>