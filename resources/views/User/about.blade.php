<!DOCTYPE html>
<html lang="en">

<head>
    @include('User.layout.header')
    <style>
        p {
            text-align: justify;
        }
    </style>
</head>

<body class="animsition">

    @include('User.layout.navbar_shop')

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            About
        </h2>
    </section>

    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                About
            </span>
        </div>
    </div>

    <!-- Content page -->
    <section class="bg0 p-t-45 p-b-45">
        <div class="container">
            <div class="row p-b-45">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Who we are?
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            'Sebastian Store' is a new online shopping application founded by a group of young people who are passionate about fashion and want to connect with other people with the same passion.
                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            We are dynamic young people who always bring you quality and affordable clothes, in line with the trends of today's youth.
                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            Any questions? Let us know in store at 13 Nguyen Huu Tho, District 7, HCM city, Vietnam or call us on (+84) 123 456 789.
                        </p>
                    </div>
                </div>

                <div class="col-10 col-md-4 col-lg-3 m-lr-auto">
                    <div class="how-bor1">
                        <div class="hov-img0">
                            <img src="images/about-01.jpg" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                    <div class="p-l-85 p-l-15-lg p-l-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Our Mission
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            Our mission is to give you a youthful, dynamic feeling, or make you confident with your own style with the clothes and fashion accessories we provide.
                        </p>

                        <div class="bor16 p-l-29 p-b-9 m-t-22">
                            <p class="stext-114 cl6 p-r-40 p-b-11">
                                "Fashion you can buy, but style you possess. The key to style is learning who you are, which takes years. There's no how-to road map to style. It's about self expression and, above all, attitude."
                            </p>

                            <span class="stext-111 cl8">
                                - <b>Iris Apfel</b> -
                            </span>
                        </div>
                    </div>
                </div>

                <div class="order-md-1 col-10 col-md-4 col-lg-3 m-lr-auto p-b-50">
                    <div class="how-bor2">
                        <div class="hov-img0">
                            <img src="images/about-02.jpg" alt="IMG">
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