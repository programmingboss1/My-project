@extends('layout.employee')
@section('body')
	<div class="page">
		
		<div class="left">
			<h1><i class="fa fa-bars" aria-hidden="true"></i>Dasboard</h1>
			<ul>
				<li><a href="/employerInfo">> Personal Information</a></li>
				<li><a href="/employerCompany">> Company Information</a></li>
				<li><a href="/new_job_post">> New Job Post</a></li>
				<li><a href="/all_job">> All Job Post</a></li>
				<li><a href="/">> Log Out</a></li>
			</ul>
		</div>
		<div class="right">
			<img src="employer.JPG" style="width:200px;height:250px;"><br>
			<h1><b>Name:Abc</b></h1>
		</div>
	</div>
@endsection