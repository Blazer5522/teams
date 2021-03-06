@extends("layout-noheader")
@section("content")

<head>
    <title>Credit Policy | Time and Electronic Attendance Monitoring System</title>
</head>
<h1>Show Credit Policy</h1>

<div class="col-md-6">
  	<div class="col-md-12" style="padding:5px">
    	<div class="col-md-4" >
          <img style = "height:48px; width:48px;" src="{{ URL::asset('img/PremiumPolicy.png') }}">
    	</div>
    	
    	 <p style="color:white; font-size:30px"> <strong>{{$credit_policy->name}}</strong></p>
       
     </div>
     <hr style="display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;">
    <div class="col-md-12">
     	<h4 style="color:white"> Description:</h4>
  	 </div>
  	 <div class="col-md-12">
  	 	<div class="col-md-9">
  	 		<h5 style="color:white"> {{$credit_policy->description}}</h5>
  	 	</div>
  	 </div>
  	 <div class="col-md-12">
     	<h4 style="color:white"> Credit Reset:</h4>
  	 </div>
  	 <div class="col-md-12">
  	 	<div class="col-md-9">
  	 		<h5 style="color:white"> {{$credit_policy->credit_reset}}</h5>
  	 	</div>
  	 </div>

  	  <div class="col-md-12">
     	<h4 style="color:white"> Preset Basis:</h4>
  	 </div>
  	 <div class="col-md-12">
  	 	<div class="col-md-9">
       		<h5 style="color:white"> {{$credit_policy->preset_basis}}</h5>
  	 	</div>
  	 </div>

  	  <div class="col-md-12">
     	<h4 style="color:white"> Frequency:</h4>
  	 </div>
  	 <div class="col-md-12">
  	 	<div class="col-md-9">
       		<h5 style="color:white"> {{$credit_policy->Frequency}}</h5>
  	 	</div>
  	 </div>

  	  <div class="col-md-12">
     	<h4 style="color:white"> Start Value:</h4>
  	 </div>
  	 <div class="col-md-12">
  	 	<div class="col-md-9">
       		<h5 style="color:white"> {{$credit_policy->start_value}}</h5>
  	 	</div>
  	 </div>

  	  <div class="col-md-12">
     	<h4 style="color:white"> Rate:</h4>
  	 </div>
  	 <div class="col-md-12">
  	 	<div class="col-md-9">
       		<h5 style="color:white"> {{$credit_policy->rate}}</h5>
  	 	</div>
  	 </div>

  	  <div class="col-md-12">
     	<h4 style="color:white"> Withdrawable:</h4>
  	 </div>
  	 <div class="col-md-12">
  	 	<div class="col-md-9">
       		<h5 style="color:white"> {{$credit_policy->withdrawable}}</h5>
  	 	</div>
  	 </div>

  	  <div class="col-md-12">
     	<h4 style="color:white"> Allowed Leaves:</h4>
  	 </div>
  	 <div class="col-md-12">
  	 	<div class="col-md-9">
       		<h5 style="color:white"> {{$credit_policy->allowed_leaves}}</h5>
  	 	</div>
  	 </div>

  	</div>
    <br>
    <a style="margin-left:30px" href="#" onclick="window.opener.location.reload(true); window.close();" class="btn btn-warning">Close</a>

@stop
