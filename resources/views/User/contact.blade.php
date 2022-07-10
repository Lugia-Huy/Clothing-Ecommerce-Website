<!DOCTYPE html>
<html lang="en">

<head>
    @include('User.layout.header')
</head>

<body class="animsition">

    @include('User.layout.navbar_shop')

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Contact
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
                Contact
            </span>
        </div>
    </div>

    <!-- Content page -->
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            @if(session()->has('message'))

            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert">x</button>

                {{session()->get('message')}}

            </div>
            @endif
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <form action="{{url('sendmessage')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Send Us A Message
                        </h4>
                        @if (Route::has('login'))

                        @auth
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address" value="{{$user->email}}">
                        </div>
                        @else
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
                        </div>
                        @endauth
                        @endif

                        <div class="bor8 m-b-30">
                            <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="message" placeholder="How Can We Help?"></textarea>
                        </div>

                        <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            <input type="submit" name="submit" value="Send">
                        </button>
                    </form>
                </div>

                <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                    <h4 class="mtext-105 cl2 txt-center p-b-30" style="color: red;">
                        Information Contact
                    </h4>

                    <div class="flex-w w-full p-b-42">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-map-marker"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Address
                            </span>

                            <p class="stext-115 cl1 p-t-18">
                                District 7, Ho Chi Minh city, Vietnam
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full p-b-42">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-phone-handset"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Call us
                            </span>

                            <p class="stext-115 cl1 p-t-18">
                                +84 123-456-789
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-envelope"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Email Support
                            </span>

                            <p class="stext-115 cl1 p-t-18">
                                sebastian_store@gmail.com
                            </p>
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