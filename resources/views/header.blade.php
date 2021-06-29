<?php 
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
$total = 0;
if(Session::has('user')){
  $total = ProductController::cartItem();
}



?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Orders</a>
          </li>
      
          <li class="nav-item">
            <a class="nav-link" href="#">Links</a>
          </li>
        </ul>
        <form action="/search" class="d-flex">
          @csrf
          <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <li class="nav-item">
            <a class="nav-link" href="#">Cart({{$total}})</a>
          </li>
          {{-- @if (Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              {{Session::get('user')['name']}}
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          
              
          @else
          <li><a href="/login">Login</a></li>
              
              
          @endif --}}


          {{-- dropdown --}}
            @if (Session::has('user'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Session::get('user')['name']}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                {{-- <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
              </ul>
            </li>
                
            @else
            <li><a class="dropdown-item" href="/login">Login</a></li>
                
            @endif

      </div>
    </div>
  </nav>