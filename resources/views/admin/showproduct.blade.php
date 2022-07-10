<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.header')
    <style>
        table {
            text-align: center;
            margin-top: 20px;
        }

        td {
            color: white;

        }

        .title {
            color: white;
            padding-top: 25px;
            font-size: 25px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.navbar')

            <div class="main-panel">
                <div class="row ">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Products</h4>
                                @if(session()->has('message'))

                                <div class="alert alert-success">

                                    <button type="button" class="close" data-dismiss="alert">x</button>

                                    {{session()->get('message')}}

                                </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr style="background-color: white; color: black;">
                                                <th>No</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Gender</th>
                                                <th>Price</th>
                                                <th width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>
                                                    <img src="productimage/{{ $product->image1 }}">
                                                </td>
                                                <td>{{ $product->title }}</td>
                                                <td>{{ $product->category }}</td>
                                                <td>{{ $product->gender }}</td>
                                                <td>${{ $product->price }}</td>
                                                <td>
                                                    <form action="" method="POST">
                                                        <a class="btn btn-primary" href="{{url('updateview', $product->id)}}" style="padding: 10px;">Detail & Edit</a>

                                                        @csrf
                                                        @method('DELETE')
                                                        <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('deleteproduct', $product->id)}}" style="padding: 10px;">Delete</a>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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