@extends('layout.master')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-header h3 text-center text-uppercase">Login</div>
                <div class="card-body">
                    <form action="" method="POST">
                        @include('error.errors')
                        @csrf
                        @if (session('registerOk'))
                            <p class="alert alert-danger">{{ session('registerOk') }}</p>
                        @endif
                        @if (session('loginError'))
                            <p class="alert alert-danger">{{ session('loginError') }}</p>
                        @endif
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Enter Password" name="password">
                        </div>
                        <button class="btn btn-primary px-3" name="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection