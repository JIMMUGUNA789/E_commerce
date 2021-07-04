@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Cart</h4>
           
            @foreach ($orders as $item)
            <div class="row searched-item cart-list-divider">
                <div class="col-sm-3">
                    <a href="/detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}" alt=""></a>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <h2>Name: {{$item->name}}</h2>
                        <h5>Delivery Status: {{$item->status}}</h5>
                        <h5>Payment Status: {{$item->payment_status}}</h5>
                        <h5>payment_method: {{$item->payment_method}}</h5>
                        <h5>Address: {{$item->address}}</h5>
                        
                    </div><br>
                </div>
                {{-- <div class="col-sm-4"> --}}
                    {{-- <form action="/remove{{$item->cart_id}}">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" value="{{$item->cart_id}}" name="itemtodelete">
                        <button class="btn btn-warning">Remove from Cart</button>
                    </form> --}}
                    {{-- <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart </a> 
                </div> --}}
            </div>
                
            @endforeach
           
        </div>
    </div>
    
</div>
    
@endsection