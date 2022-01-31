@extends('layout.master')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-header h3 text-center text-uppercase">register</div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Username (*)" name="username">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="E-mail (*)" name="email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Enter Password" name="password">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Repeat Password" name="password_confirmation">
                        </div>
                        <button class="btn btn-primary px-3" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection