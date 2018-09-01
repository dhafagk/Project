@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    @if(Auth::user()->level == '0')
                    Tampilan level 0 atau SUPER ADMIN
                     @endif
                    @if(Auth::user()->level == '1')
                    Tampilan level 1 atau ADMIN
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
