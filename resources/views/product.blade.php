@extends('master')
@section('content')
<div class="custom-product">
    {{-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          
          <li  data-target="#myCarousel" data-slide-to="0" class="active" ></li>
          <li  data-target="#myCarousel" data-slide-to="1" ></li>
          <li  data-target="#myCarousel" data-slide-to="2" ></li>
         
        </ol>
        <div class="carousel-inner">
            @foreach ($products as $item)
                <div class="item {{$item['id']==1?'active':''}}" >
                    <img src="{{$item['gallery']}}" class="slider-img" >
                    <div class="carousel-caption  slider-text">
                    <h5>{{$item['name']}}</h5>
                    <p>{{$item['price']}}</p>
                    </div>
                </div>

                    
            @endforeach
          
          
          
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
      </div> --}}

      {{-- trending items --}}
      <div class="trending-wrapper">
        <h3>Trending Products</h3>
        @foreach ($products as $item)
        <div class="trending-item">
          <a href="detail/{{$item['id']}}">
          <img class="trending-image" src="{{$item['gallery']}}" >
          <div>
            <h3>{{$item['name']}}</h3>
          </a>
          </div>
        </div>
            
        @endforeach
      </div>
</div>
    
@endsection