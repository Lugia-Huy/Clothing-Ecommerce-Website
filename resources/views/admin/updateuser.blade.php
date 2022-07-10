<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

    @include('admin.header')
    <style>
        .title {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        label {
            display: inline-block;
            width: 200px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.navbar')

            <div class="main-panel">
                <a href="{{url('showuser')}}" class="btn btn-default text-left">Back</a>
                <div class="container" align="center">
                    <h1 class="title">Update product</h1>
                    @if(session()->has('message'))

                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert">x</button>

                        {{session()->get('message')}}

                    </div>
                    @endif
                    <form action="{{url('updateuser', $data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div style="padding:15px;">
                            <label for="name">User name</label>
                            <input style="color:black;" type="text" name="name" value="{{ $data->name }}" require="">
                        </div>

                        <div style="padding:15px;">
                            <label for="email">Email</label>
                            <input style="color:black;" type="email" name="email" value="{{ $data->email }}" require="">
                        </div>

                        <div style="padding:15px;">
                            <label for="phone">Phone</label>
                            <input style="color:black;" type="text" name="phone" value="{{ $data->phone }}" require="">
                        </div>

                        <div style="padding:15px;">
                            <label for="address">Address</label>
                            <input style="color:black;" type="text" name="address" value="{{ $data->address }}" require="">
                        </div>

                        <div style="padding:15px;">
                            <label for="usertype">Role</label>
                            <input style="color:black;" type="text" name="usertype" value="{{ $data->usertype }}" require="">
                        </div>

                        <div style="padding:15px;">
                            <input class="btn btn-success" type="submit" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('admin.script')
</body>

</html>