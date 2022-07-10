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
                                <h4 class="card-title">Reviews</h4>
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
                                                <th> Client Name </th>
                                                <th> Rating </th>
                                                <th> Products name </th>
                                                <th> Feedback </th>
                                                <th> Start Date </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $review)
                                            @foreach ($products as $p)
                                            @if ($p->id==$review->id_product)
                                            <tr>
                                                <td> {{ $review->user_name }} </td>
                                                <td style="color: yellow;"> {{ $review->rating}} / 5</td>
                                                <td> {{ $p->title }} </td>
                                                <td> {{ $review->feedback }} </td>
                                                <td> {{ $review->created_at }} </td>
                                                <td>
                                                    <a class="btn btn-danger" href="{{url('denyreview', $review->id)}}">Deny</a>
                                                </td>
                                            </tr>
                                            @endif
                                            @endforeach
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