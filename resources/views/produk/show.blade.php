@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <p>Data Detail Produk</p>
                </div>

                <div class="panel-body form-horizontal">

                    <div class="form-group">
                        <label class="col-sm-2">Nama Produk</label>
                        <div class="col-sm-10">
                            <p class="form-control-static">{{ $produk->nama }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">Kategori Produk</label>
                        <div class="col-sm-10">
                            <p class="form-control-static">
                                {{ $produk->kategori->nama ?? '-' }}
                            </p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">Qty Awal</label>
                        <div class="col-sm-10">
                            <p class="form-control-static">{{ $produk->qty }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">Harga Jual</label>
                        <div class="col-sm-10">
                            <p class="form-control-static">{{ $produk->harga_jual }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">Harga Beli</label>
                        <div class="col-sm-10">
                            <p class="form-control-static">{{ $produk->harga_beli }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{ route('produk.index') }}" class="btn btn-warning">
                                Kembali ke Data Produk
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection