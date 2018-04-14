@extends('front.layout.master')

@section('content')
    <div class="container" style="margin-top:25px">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox" style="height:300px">
                <div class="carousel-icarousel-innertem active">
                    <img class="d-block img-fluid" width="100%"  src="css/images.jpg" alt="First slide">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-right"> 
            <h4>آخر الإعلانات</h4><hr/>
        </div>
        @foreach ($products as $product )

            @php
                $image =$product->images->first();
                $img_title = $image['title'];  
                if ($img_title == null)
                    $img_title = '/images/no_product.jpg';
                            
            @endphp
            

        {{-- bb-> {{$image}}
        cc-> {{$img_title}} --}}
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
        {{$products->links()}}
    </div>
@endsection