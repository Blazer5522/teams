@extends("layout-noheader")
@section("content")

<head>
    <title>Forms| Time and Electronic Attendance Monitoring System</title>
</head>

<div class="col-md-12" style="margin-bottom:30px">
    <h1>Show Form</h1>

</div>

<div class="col-md-6">

  	<div class="col-md-12" style="padding:5px">
    	<div class="col-md-4" >
          <img style = "height:100px; width:100px;" src="{{ URL::asset('img/Department.png') }}">

    	</div>
    	<div class="col-md-8" style="margin-left:0px">
    	 <p style="color:white; font-size:30px"> <strong>{{$download->file_name}}</strong></p>
        <a href="#" onclick="window.opener.location.reload(true); window.close();" class="btn btn-warning">Close</a>
       </div>
     </div>
     <hr style="display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;">
   
   
       <iframe src="../<?= $download->path ?>" title="downloads"  height= "500" width="380"  frameborder="0"  target="Message">
   
  	 </div>

  	 </div>
  	</div>

@stop
