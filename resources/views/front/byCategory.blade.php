@extends('front.layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 text-right"> 
            <h4> الإعلانات</h4><hr/>
        </div>
        @include('front.layout.productCard')
    </div>
@endsection