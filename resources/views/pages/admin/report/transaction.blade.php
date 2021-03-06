<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ public_path('backend/css/sb-admin-2.min.css') }}" >

    <title>Report Transaction</title>
</head>
<body>
    <div class="text-center mb-5">Data Report Transaction </div>
    <div class="table-responsive" style="font-size: 13px">
        <table class="table table-hover table-bordered table-md">
            <tr class=" table-active">
                <th>No</th>
                <th>Code Transaction</th>
                <th>Date Transaction</th>
                <th>Members</th>
                <th>Total Transaction</th>
                <th>Type Package</th>
            </tr>
            @forelse ($datas as $index => $item)
                 <tr>
                    <td>{{ $index +1 }}</td>
                    <td>{{ $item->kd_transaction }}</td>
                    <td> {{ $item->created_at->format('F d, Y - H:i') }} </td>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ moneyFormat($item->transaction_total) }}</td>
                    <td>{{ $item->travel_package->package_type  }}</td>
                </tr>
            @empty
        </table>
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                Data not available
            </div>
        </div>
        @endforelse
        <div class="footer mt-5 text-right">
            <div class="text-header">Yours sincerely</div>
                <img src="{{ public_path('/storage/ttd1.png') }}" width="90" alt="">
            <div class="text-header ">Admin</div>
        </div>
        <div class="">
            <span style=" font-size: 12px;">
            printed date
            {{ Carbon\Carbon::now()->toDateTimeString() }}
        </span>
        </div>
    </div>
</body>
</html>