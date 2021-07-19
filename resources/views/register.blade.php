@extends('master')
@section('content')
<div class="container custom-login" >
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 col-sm-offset-6">
            <form class="" action="/register" method="POST">
              @csrf
                <h1>Register</h1>
                <div class="mb-3">
                    <label for="text" class="form-label">Username</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" required>
                  </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                  <div id="passwordHelpBlock" class="form-text">
                    Your password must be at least 8 characters long and must contain alphabets, numbers and special characters.
                  </div>
                  <div class="mb-3">
                    <label for="confirmpassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required>
                    <div id="passwordHelpBlock" class="form-text">
                      Your password must be at least 8 characters long and must contain alphabets, numbers and special characters.
                    </div>
               
                
                <button type="submit" class="btn btn-primary">Register</button>
              </form>


        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
    
@endsection
    
