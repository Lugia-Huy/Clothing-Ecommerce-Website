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
                <div class="container" align="center">
                    <h1 class="title">Detail Product</h1>
                    <form action="{{url('updateproduct', $data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div style="padding:15px;">
                            <label for="title">Product title</label>
                            <input style="color:black;" type="text" name="title" value="{{ $data->title }}" require="">
                        </div>

                        <div style="padding:15px;">
                            <label for="price">Price</label>
                            <input style="color:black;" type="number" name="price" value="{{ $data->price }}" require="">
                        </div>

                        <div style="padding:15px;">
                            <label for="description">Description</label>
                            <input style="color:black;" type="text" name="description" value="{{ $data->description }}" require="">
                        </div>

                        <div style="padding:15px;">
                            <label for="quatity">Quatily</label>
                            <input style="color:black;" type="text" name="quatity" value="{{ $data->quatity }}" require="">
                        </div>

                        <div style="padding:15px;">
                            <label>Old image</label>
                            <img src="productimage/{{ $data->image }}" height="200px" width="200px">
                        </div>

                        <div style="padding:15px;">
                            <label for="file">Change the image</label>
                            <input type="file" name="file">
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