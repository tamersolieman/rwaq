@extends('front.layout.master')

@section('content')
 @php
    $image =$product->images->first();
    $img_title = $image['title'];  
    if ($img_title == null)
        $img_title = 'images/no_product.jpg';
@endphp
<div class="container text-right" style="margin-bottom:20px">
    <h3 class="card-title">{{$product->title}}</h3><hr>
    <div class="card mt-4">
        <img class="card-img-top img-fluid" src="{{asset('storage/'.$img_title)}}" alt="">
        <div class="card-body">
            <h4>المعلومات الرئيسية</h4>
            <p class="card-text">اسم المعلن : {{$product->user->name}}</p>
            <p class="card-text">البلد : {{$product->country->name}}</p>
            <p class="card-text">السعر :{{$product->price}}</p>
            <h4>وصف الإعلان</h4>
            <p class="card-text">{{$product->text}}</p>
        </div>
    </div>
</div>

@endsection