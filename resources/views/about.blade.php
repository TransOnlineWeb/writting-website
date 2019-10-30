@extends('layouts.app')

@section('content')
<header class="about">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light">About Us</h1>
        <!-- <p class="lead">This is about our website</p> -->
      </div>
    </div>
  </div>
</header>

<div class="container-fluid justify-content-center pb-5">
	<h2 class="text-center pt-3 featurette">About AssignmentExperts</h2>
	<div class="row pt-3">
		<div class="col-md-6 lead">
			AssignmentExperts is a writing platform that helps students with their educational assignments. Our goal is to help students formulate and fix academic assignments. By ordering writing or editing services from us, you are guaranteeing yourself the elite-level guidance that will boost your grades! We are geared to helping students achieve the best academic standing possible.
		</div>
		<div class="col-md-6 lead">
			Being a student today is tough, we understand that. Many try to somehow maneuver between classes, homework assignments, and jobs but no matter how talented you are as a student, it is often impossible to meet all coursework requirements. Considering the fact that failing is not an option today, writing home assignments is something AssignmentExperts can easily take care of on your behalf. 
		</div>
	</div>
	<div class="row">
		<div class="image pt-4">
			<img src="./img/imgabout.jpg" class="img-fluid px-5" alt="">
		</div>
	</div>
	<div class="row pt-5 mx-4">
		<div class="col-md-4 lead">
			<h3 class="featurette">Reliability</h3>
			A writing service isn’t worth much without offering confidentiality and security guarantees. That’s why each order is entirely confidential, and our strict no-plagiarism policy guarantees you 100% original writing from each pro. 
		</div>
		<div class="col-md-4 lead">
			<h3 class="featurette">Customer Satisfaction</h3>
			Happy customers are loyal customers. We strive to help every one of our clients, regardless of how difficult their requests are. Our versatility in this field is what keeps us a leader in the industry.
		</div>
		<div class="col-md-4 lead">
			<h3 class="featurette">Constant Improvement</h3>
			We have established ourselves as a leader in product quality. Our service holds the best price-for-quality ratio in the writing industry. Now you get to save money and earn the best grade at the same time!
		</div>
	</div>
</div>
@include('includes.footer')
@endsection