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
                <a href="{{url('showproduct')}}" class="btn btn-default text-left">Back</a>
                <div class="container" align="center">
                    <h1 class="title">Update product</h1>
                    @if(session()->has('message'))

                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert">x</button>

                        {{session()->get('message')}}

                    </div>
                    @endif
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
                            <label for="quatity">Category</label>
                            <input style="color:black;" type="text" name="category" value="{{ $data->category }}" require="">
                        </div>

                        <div style="padding:15px;">
                            <label for="quatity">Gender</label>
                            <input style="color:black;" type="text" name="gender" value="{{ $data->gender }}" require="">
                        </div>

                        <div style="padding:15px;">
                            <label for="quatity">Size</label>
                            <input style="color:black;" type="text" name="size" value="{{ $data->size }}" require="">
                        </div>

                        <div style="padding:15px;">
                            <label>Old image 1</label>
                            <img src="productimage/{{ $data->image1 }}" height="200px" width="200px">
                        </div>

                        <div style="padding:15px;">
                            <label for="image1">Change the image 1</label>
                            <input type="file" name="image1">
                        </div>

                        <div style="padding:15px;">
                            <label>Old image 2</label>
                            <img src="productimage/{{ $data->image2 }}" height="200px" width="200px">
                        </div>

                        <div style="padding:15px;">
                            <label for="image2">Change the image 2</label>
                            <input type="file" name="image2">
                        </div>

                        <div style="padding:15px;">
                            <label>Old image 3</label>
                            <img src="productimage/{{ $data->image3 }}" height="200px" width="200px">
                        </div>

                        <div style="padding:15px;">
                            <label for="image3">Change the image 3</label>
                            <input type="file" name="image3">
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