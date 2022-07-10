<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Orders Management
        </span>
    </div>
</div>
@if(session()->has('message'))

<div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert">x</button>

    {{session()->get('message')}}

</div>
@endif

<div class="bg0 p-t-75 p-b-85">
    <div class="container-xl px-4 mt-4">
        <!-- Billing history card-->
        <div class="card mb-4">
            <div class="card-header"><b>Billing History</b></div>
            <div class="card-body p-0">
                <!-- Billing history table-->
                <div class="table-responsive table-billing-history">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th class="border-gray-200" scope="col">Transaction ID</th>
                                <th class="border-gray-200" scope="col">Date</th>
                                <th class="border-gray-200" scope="col">Amount</th>
                                <th class="border-gray-200" scope="col">Status</th>
                                <th class="border-gray-200" scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $or)
                            <tr>

                                <td># {{$or->id}}</td>
                                <td>{{$or->created_at}}</td>
                                <td>${{$or->price}}</td>
                                @if($or->status=='Approved')
                                <td style="color: #3BD04C;">
                                    <b>{{ $or->status }}</b>
                                </td>
                                @elseif($or->status=='Pending')
                                <td style="color: #EDAB0E;">
                                    <b>{{ $or->status }}</b>
                                </td>
                                @else
                                <td style="color: #A21800;">
                                    <b>{{ $or->status }}</b>
                                </td>
                                @endif

                                <td><a href="{{url('detailorder', $or->id)}}" class="fas fa-eye"></a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>