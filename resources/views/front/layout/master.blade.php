<!DOCTYPE html>
<html lang="en">

	<head>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		  <meta name="description" content="">
		  <meta name="author" content="">

		  <title>موقع إعلانات مبوبة</title>

		  <!-- Bootstrap core CSS -->
		  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

		  <!-- Custom styles for this template -->
		  <link href="{{asset('css/homepage.css')}}" rel="stylesheet">		  
	</head>

	<body >
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg fixed-top " style="background-color:#f9f9f9">
			<div class="container">
			  <a class="navbar-brand" href="/">موقع إعلانات مبوبة</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  {{-- <div class="collapse navbar-collapse" id="navbarResponsive">
				  <ul class="navbar-nav ml-auto">
				  </ul>
					<li class="nav-link"><a href="">دخول</a></li>
					<li class="nav-link"><a href="">حساب جديد</a></li>
			  </div> --}}
			</div>
		</nav>

	  <!-- Page Content -->
	   <div class="container" id="main_container">

		 <div class="row">
			  <div class="col-lg-3 text-right">			  
				  <h1 class="my-4"></h1>
				  <div class="list-group ">			
						@foreach($items as $item)		
							<a href="/category/{{$item->id}}" class="list-group-item">{{$item->name}}</a>
						@endforeach
				  </div>					  
			  </div>
			  <!-- /.col-lg-3 -->

			<div class="col-lg-9 text-right">
				@yield('content')
		    </div>
		    <!-- /.col-lg-9 -->

		</div>
		<!-- /.row -->

	  </div>
	  <!-- /.container -->

	  <!-- Footer -->
	  @include('front.layout.footer')
		<!-- End Footer -->
	 <!-- Bootstrap core JavaScript -->
	 <script src="{{asset('jquery/jquery.min.js')}}"></script>
	 <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

	</body>

</html>
