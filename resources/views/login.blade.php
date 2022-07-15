@extends('master')
@section("content")
<h1 class="display-3 center mt-5 ms-5 mb-5">Login Page</h1>
<div class="container custom-login">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form action="login" method="POST">
                <div class="form-floating mb-2 mt-5">
                    @csrf
                    <input name="email" type="email" class="form-control" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <br>
                <div class="form-floating">
                    <input name="password" type="password" class="form-control" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <br>
                <br>
                <button class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

@endsection