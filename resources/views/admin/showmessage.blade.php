<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.header')
    <style>

    </style>
</head>

<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.navbar')

            <div class="main-panel">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row justify-content-between">
                                    <h4 class="card-title">Messages</h4>
                                </div>
                                <div class="preview-list">
                                    @foreach ($data as $message)
                                    @foreach ($users as $u)
                                    @if ($u->id==$message->id_user)
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <img src="admin/assets/images/faces/face2.jpg" alt="image" class="rounded-circle" />
                                        </div>
                                        <div class="preview-item-content d-flex flex-grow">
                                            <div class="flex-grow">
                                                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                    <h6 class="preview-subject">{{$u->name}} ({{$u->email}})</h6>
                                                    <p class="text-muted text-small">{{$message->created_at}}</p>
                                                </div>
                                                <p class="text-muted">{{$message->message}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.script')
</body>

</html>