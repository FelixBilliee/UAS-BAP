@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">preorder {{ $preorder->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/preorder') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/preorder/' . $preorder->id . '/edit') }}" title="Edit preorder"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/preorder' . '/' . $preorder->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete preorder" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $preorder->id }}</td>
                                    </tr>
                                    <tr><th> Id Produk </th><td> {{ $preorder->id_produk }} </td></tr><tr><th> Id Po </th><td> {{ $preorder->id_po }} </td></tr><tr><th> Tanggal Pembelian </th><td> {{ $preorder->tanggal_pembelian }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
