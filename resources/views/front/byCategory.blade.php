@extends('front.layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 text-right"> 
            <h4> الإعلانات</h4><hr/>
        </div>
        @foreach ($products as $product )

            @php
                $image =$product->images->first();
                $img_title = $image['title'];  
                if ($img_title == null)
                    $img_title = 'images/no_product.jpg';
            @endphp

        <div class="col-lg-4 col-md-6 mb-4 text-right">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" height="150px" src="{{asset('storage/'.$img_title)}}"  alt="image" ></a>
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="">{{$product->title}}</a>
                    </h5>
                    <h6>{{$product->price}}</h6>
                </div>
            </div>            
        </div>            
        @endforeach
    </div>
@endsection