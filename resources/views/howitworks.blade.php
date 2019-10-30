@extends('layouts.app')

@section('content')
	<header class="masthead">
	  <div class="container h-100">
	    <div class="row h-100 align-items-center">
	      <div class="col-12 text-center">
	        <h1 class="font-weight-light">How to Make an Order With us</h1>
	        <p class="lead">These are the simple steps one can follow to me an order</p>
	      </div>
	    </div>
	  </div>
	</header>

	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 p-5">
					<h2 class="featurette text-center"> <span>1.</span> Create an account</h2>
					<p class="lead text-center">To register an account with us. Provide us your email, name, and create a password. Verify the email address with a customized code we send you.</p>
				</div>
				<div class="col-md-6 p-5 center">
					<img class="img-fluid" src="./img/place.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-6 p-5 center">
				<img class="img-fluid" src="./img/place.jpg" alt="">
			</div>
			<div class="col-md-6 p-5">
				<h2 class="featurette text-center"> <span>2.</span> Submit your Order</h2>
				<p class="lead text-center">Fill out a form which contains the requirements for the assignment. And within a few minutes, you will receive bids..</p>
			</div>
		</div>
	</section>
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-6 p-5">
				<h2 class="featurette text-center"> <span>3.</span> Select a writer</h2>
				<p class="lead text-center">Select the most appropriate author for the paper. This goes by price, rating, success rate, and more importantly, specialty.</p>
			</div>
			<div class="col-md-6 p-5 center">
				<img class="img-fluid" src="./img/place.jpg" alt="">
			</div>
		</div>
	</section>
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-6 p-5 center">
				<img class="img-fluid" src="./img/place.jpg" alt="">
			</div>
			<div class="col-md-6 p-5">
				<h2 class="featurette text-center"> <span>4.</span> Download your paper</h2>
				<p class="lead text-center">Once your order is complete you will be notified via email. You can then download and verify that it is done as per your requirements. Leave a comment for your writer.</p>
			</div>
		</div>
	</section>
	@include('includes.footer')
@endsection