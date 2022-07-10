<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.header')
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <style>
        .title {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        label {
            display: inline-block;
            width: 200px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.navbar')

            <div class="main-panel">
                <div class="content-wrapper">
                    @if(session()->has('message'))

                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert">x</button>

                        {{session()->get('message')}}

                    </div>
                    @endif
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add Product</h4>
                                    <p class="card-description"> Attributes </p>
                                    <form class="forms-sample" action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="title">Product title</label>
                                            <input type="text" style="color:black;" class="form-control" name="title" placeholder="Give a product title">
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="number" style="color:black;" class="form-control" name="price" placeholder="Give a product price">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" name="description" placeholder="Give a product description" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <input type="text" style="color:black;" class="form-control" name="category" placeholder="Give a product type">
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <input type="text" style="color:black;" class="form-control" name="gender" placeholder="women/men">
                                        </div>
                                        <div class="form-group">
                                            <label for="size">Size</label>
                                            <input type="text" style="color:black;" class="form-control" name="size" placeholder="Give a size of product">
                                        </div>

                                        <div class="form-group">
                                            <label>File upload 1</label>
                                            <input type="file" name="image1">
                                        </div>
                                        <div class="form-group">
                                            <label>File upload 2</label>
                                            <input type="file" name="image2">
                                        </div>
                                        <div class="form-group">
                                            <label>File upload 3</label>
                                            <input type="file" name="image3">
                                        </div>

                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button class="btn btn-dark">Cancel</button>
                                    </form>
                                </div>
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