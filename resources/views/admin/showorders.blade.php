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
                                <h4 class="card-title">Order Status</h4>
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
                                                <th> Order No </th>
                                                <th> Product Cost </th>
                                                <th> Products name </th>
                                                <th> Payment Mode </th>
                                                <th> Start Date </th>
                                                <th> Payment Status </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $order)
                                            <tr>
                                                <td> {{ $order->firstname }} {{ $order->lastname }} </td>
                                                <td> {{ $order->id }} </td>
                                                <td> ${{ $order->price }} </td>
                                                <td> {{ $order->items}} </td>
                                                <td> {{ $order->method }} </td>
                                                <td> {{ $order->created_at }} </td>
                                                @if($order->status=='Approved')
                                                <td>
                                                    <div class="badge badge-outline-success">{{ $order->status }}</div>
                                                </td>
                                                @elseif($order->status=='Pending')
                                                <td>
                                                    <div class="badge badge-outline-warning">{{ $order->status }}</div>
                                                </td>
                                                @else
                                                <td>
                                                    <div class="badge badge-outline-danger">{{ $order->status }}</div>
                                                </td>
                                                @endif
                                                <td>
                                                    <a class="btn btn-success" href="{{url('updateorder', $order->id)}}">Update</a>
                                                    <a class="btn btn-danger" href="{{url('denyorder', $order->id)}}">Deny</a>
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