@extends('master')
@section('content')
<div class="container">
    <div class="row">

<div class="col-sm-4">
    <a href="">Filter</a>
</div>
<div class="col-sm-4">
    <div class="custom-product">
        <div class="trending-wrapper">
            <h4>Result for product</h4>
            @foreach ($products as $item)
            <div class="searched-item">
                <a href="detail/{{$item['id']}}">
                    <img class="trending-image" src="{{$item['gallery']}}" alt="">
                    <div>
                        <h2>{{$item['name']}}</h2>
                        <h3>{{$item['price']}}</h3>
                        <h5>{{$item['category']}}</h5>
                        <h5>{{$item['description']}}</h5>
                    </div>
                
                </a>
            </div>
                
            @endforeach
        </div>
    </div>

</div>
</div>
</div>
    
@endsection