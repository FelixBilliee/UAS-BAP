@extends('layouts.app')
@section('content')

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th><th>Id Produk</th><th>Nama Produk</th><th>Id Po</th><th>Tanggal Pembelian</th><th>Actions</th>
            </tr>
        </thead>
        <tbody> 
        @foreach($po as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->id_produk }}</td><td>{{ $item->nama_produk}}</td><td>{{ $item->id_po }}</td><td>{{ $item->tanggal_pembelian }}</td>
                <td>
                    <a href="{{ url(' ') }}" title="print"><button class="btn btn-warning btn-sm"><i class="fa fa-print" aria-hidden="true"></i> Print</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
