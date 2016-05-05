@extends('layout.default')
@section('content')
    <div class="row">
        <div class="col-md-12" style="text-align: right">
            <div class="page-header text-center" style="margin-top: -20px">
                <h3>Sales List</h3>
            </div>
            <a class="btn btn-success" href="{{url('user/create')}}" style="margin-bottom: 10px; margin-top: -10px;">Create Sale</a>
            <table class="table table-bordered" style="text-align: left">
                <thead style="text-align: center; background: #1b6d85; color: whitesmoke;">
                <th>User Name</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th style="text-align: center">Action</th>
                </thead>
                <tbody>
                @foreach($sales as $sale)
                    <tr>
                        <td style="font-size: 12px;"><b>{{ $sale->username }}</b></td>
                        <td style="font-size: 12px; font-style: italic;">{{ $sale->proname }}</td>
                        <td style="font-size: 12px;">{{ $sale->quantity }}</td>
                        <td style="text-align: center">
                            <a class="btn btn-primary btn-xs">Show</a>
                            <a class="btn btn-warning btn-xs">Edit</a>
                            <a class="btn btn-danger btn-xs">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection