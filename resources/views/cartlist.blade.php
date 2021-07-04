@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Cart</h4>
            <a href="/ordernow" class="btn btn-success">Order Now</a>
            @foreach ($products as $item)
            <div class="row searched-item cart-list-divider">
                <div class="col-sm-3">
                    <a href="/detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}" alt=""></a>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <h3>{{$item->name}}</h3>
                        <h4>{{$item->price}}</h4>
                        <h5>{{$item->description}}</h5>
                    </div><br>
                </div>
                <div class="col-sm-4">
                    {{-- <form action="/remove{{$item->cart_id}}">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" value="{{$item->cart_id}}" name="itemtodelete">
                        <button class="btn btn-warning">Remove from Cart</button>
                    </form> --}}
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart </a> 
                </div>
            </div>
                
            @endforeach
            <a href="/ordernow" class="btn btn-success">Order Now</a>
        </div>
    </div>
    
</div>
    
@endsection