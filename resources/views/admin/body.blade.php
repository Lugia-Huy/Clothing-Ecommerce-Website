<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Products</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <h6 class="text-muted font-weight-normal"> Currently items</h6>
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">{{$countproduct}} items</h2>
                            </div>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <a href="{{url('showproduct')}}"><i class="icon-lg mdi mdi-folder-image text-primary ml-auto"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Orders</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <h6 class="text-muted font-weight-normal"> Total orders</h6>
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">{{$countorder}} orders</h2>
                            </div>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <a href="{{url('showorder')}}"><i class="icon-lg mdi mdi-clipboard-text text-danger ml-auto"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Profit</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <h6 class="text-muted font-weight-normal"> Total proceeds</h6>
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">{{$profit}} $</h2>
                            </div>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <a href=""><i class="icon-lg mdi mdi-arrow-top-right text-success ml-auto"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Users</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <h6 class="text-muted font-weight-normal"> Available users</h6>
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">{{$countuser}} users</h2>
                            </div>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <a href="{{url('showuser')}}"><i class="icon-lg mdi mdi-account-box-outline text-warning ml-auto"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Messages</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <h6 class="text-muted font-weight-normal"> Total mesages</h6>
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">{{$countmess}} messages</h2>
                            </div>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <a href="{{url('showmessage')}}"><i class="icon-lg mdi mdi-comment-text text-success ml-auto"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Feedbacks</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <h6 class="text-muted font-weight-normal"> Total reviews</h6>
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">{{$countmess}} reviews</h2>
                            </div>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <a href="{{url('showreview')}}"><i class="icon-lg mdi mdi-comment-check text-success ml-auto"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>