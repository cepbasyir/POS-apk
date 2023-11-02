@extends('layouts.admin')
@section('header', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"> <h1>Hallo!</h1><h4>{{ auth()->user()->name }}</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ url('transaksi') }}" class="btn btn-outline-primary">Tambah Transaksi!</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
