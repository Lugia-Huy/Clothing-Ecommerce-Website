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
                                <h4 class="card-title">User Information</h4>
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
                                                <th> User No </th>
                                                <th> User Name </th>
                                                <th> Email </th>
                                                <th> Phone </th>
                                                <th> Address </th>
                                                <th> Start Date </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $u)
                                            @if($u->name!='admin') 
                                            <tr>
                                                <td> {{ $u->id }} </td>
                                                <td> {{ $u->name }}</td>
                                                <td> {{ $u->email }} </td>
                                                <td> {{ $u->phone}} </td>
                                                <td> {{ $u->address }} </td>
                                                <td> {{ $u->created_at }} </td>
                                                <td>
                                                    <a class="btn btn-success" href="{{url('userinfo', $u->id)}}">Update</a>
                                                    <a class="btn btn-danger" href="{{url('deleteuser', $u->id)}}">Delete</a>
                                                </td>
                                            </tr>
                                            @endif
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