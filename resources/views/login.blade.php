@extends('master')
@section('content')
<div class="container custom-login" >
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 col-sm-offset-6">
            <form class="" action="/login" method="POST">
              @csrf
                <h1>Log in</h1>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                  <div id="passwordHelpBlock" class="form-text">
                    Your password must be at least 8 characters long and must contain alphabets, numbers and special characters.
                  </div>
                </div>
                {{-- <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>


        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
    
@endsection
    
