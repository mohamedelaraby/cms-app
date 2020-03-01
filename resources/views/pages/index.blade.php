@extends('layouts.master')

@section('title','Home')



@section('content')
<div class="jumbotron text-center mt-3 p-3">
<div class="row">
    <div class="col-md-12">
        <h1 class="display-4">Welcome to Share Platform</h1>
        <hr class="my-4">
        <p>Share posts is a social network build on laravel php framework {{ Auth::user(['email']) }}</p>

    </div>
</div>
<div class="row">
    <div class="col-md-6 mx-auto">
    <a href="{{}}" class="btn btn-primary"></a>
            <button type="submit" name="login" class="btn btn-success">Login</button>
            <button type="register" name="register" class="btn btn-outline-primary">Register</button>
    </div>
</div>
</div>




@endsection
