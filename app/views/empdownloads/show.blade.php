@extends("layout-noheader")
@section("content")

<head>
    <title>Forms| Time and Electronic Attendance Monitoring System</title>
</head>

<div class="col-md-12" style="margin-bottom:30px">
    <h1>View File</h1>

</div>
<div class="col-md-6">

    <div class="col-md-12" style="padding:5px">
      <div class="col-md-4" >
      @foreach ($employee as $emp)
      		 <h2>{{$emp->lname}} , {{$emp->fname}}</h2>
     @endforeach

      </div>
     <br>
      <div class="col-md-8" style="margin-left:0px">
       <p style="color:white; font-size:20px"> <strong>{{$empdownload->file_name}}</strong></p><br>
       <a href="#" onclick="window.opener.location.reload(true); window.close();" class="btn btn-warning">Close</a>
       </div>
     </div>
      </div>
      <div class="col-md-6"></div>

<br><br>
  <div class="col-md-12">
     <hr style="display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;">
   
       <iframe src="../<?= $empdownload->path ?>" title="downloads"  height= "400" width="100%"  frameborder="0" margin-left= "100px" target="Message"></iframe>
     </div>
    

@stop

