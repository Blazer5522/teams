@extends("layout-noheader")
@section("content")

<head>
    <title>Edit Credit Policy | Time and Electronic Attendance Monitoring System</title>
</head>

<div class="col-md-12"  style="margin-bottom:15px; margin-left:-15px">

        <h1>Edit Credits Policy</h1>

        @if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif
        
  </div>



                @if($leave_type = 0)
                     {{ Form::hidden('able', 'enable') }}
                @else
                     {{ Form::hidden('able', 'disable') }}
                @endif

{{ Form::open(array('route' => 'credit_policies.store')) }}
        <div class="col-md-12">
           
                <div class="label_white">
                {{ Form::label('name', 'Credit Policy Name:')}}</div>
                {{ Form::text('name', Input::get('name'), array('placeholder' => 'credit policy name','autocomplete' => 'off', 'size' => '40')) }}<br>
                <div class="label_white">
                {{ Form::label('description', 'Description:')}}</div>
                {{ Form::text('description', Input::get('description'), array('placeholder' => 'description','autocomplete' => 'off', 'size' => '40')) }}<br>
                 <div class="label_white">
                {{ Form::label('leave_type', 'Leave Type:')}}</div>
                <div class="label_white">
                                 <button class="btn btn-info" onclick="granted(); return false;" name="leave_type" value="0">Granted</button>
                                  <button class="btn btn-info" onclick="accrued(); return false;" name="leave_type" value="1">Accrued</button>
                                  <button class="btn btn-info" onclick="special(); return false;" name="leave_type" value="2">Special Case</button>
                            </div>

                            <fieldset class="field" id="Granted">
                            <legend>Granted</legend>
                            <div class="label_white">
                                
                                    {{ Form::label('credit_reset', 'Credit reset based on:')}}</div>
                                
                                <div class="label_white">
                                <input type="radio" name="credit_reset" class="second" value="Employee Hire Date" id="EmpGranted">
                                <span class="wrap">Employee Hire Date</span>

                                <input type="radio" name="credit_reset" class="second" value="Standard Annual Reset Date" id="SemisGranted" onclick="semigrant();">
                                <span class="wrap">Standard Annual Reset Date</span>
                                
                                </div>
                        
                                <div >
                                {{ Form::text('Standard Annual Reset Date', Input::get('preset_basis'), array('placeholder' => 'yyyy/mm/dd','autocomplete' => 'off', 'size' => '60','id' => 'SemiGranted','class' => 'second')) }}</div>
                        

                                <div class="label_white">
                                    {{ Form::label('withdrawable', 'Withdrawable:')}}</div>
                                <div class="label_white">
                                <input type="radio" name="withdrawable" class="second" value="yes" id="Granted">
                                <span class="wrap">Yes</span>
                                 
                                 <input type="radio" name="withdrawable" class="second" value="no" id="Granted">
                                <span class="wrap">No</span>
                                </div>
                            </fieldset>
                            <fieldset class="field" id="Accrued">
                            <div class="label_white">
                            
                            {{ Form::label('frequency', 'Frequency:')}}</div>
                            <legend>Accrued</legend>
                            <div class="label_white">
                                 <input type="radio" name="frequency" class="third" value="Pay Period" id="Accrued">
                                <span class="wrap">Pay Period</span>
                                 <input type="radio" name="frequency" class="third" value="Monthly" id="Accrued">
                                <span class="wrap">Monthly</span>
                                 <input type="radio" name="frequency" class="third" value="Annually" id="Accrued">
                                <span class="wrap">Annually</span>
                                 <input type="radio" name="frequency" class="third" value="Weekly" id="Accrued">
                                <span class="wrap">Weekly</span>
                                 
                             
                            </div>
                            
                             
                        
                            
                            
                            <div class="label_white">{{ Form::label('start_value', 'Start value :') }}</div>
                             {{ Form::number('start_value',Input::get('start_value'), array('placeholder' => '00','autocomplete' => 'off', 'size' => '20','id' => 'Accrued','class' => 'third')) }}<br>
                             <div class="label_white">{{ Form::label('rate', 'Rate :') }}</div>
                             {{ Form::number('rate',Input::get('rate'), array('placeholder' => '00','autocomplete' => 'off', 'size' => '20','id' => 'Accrued','class' => 'third')) }}<br>
                            </fieldset>
                          
                            <div>  
                            <fieldset class="field" id="Special">
                                <legend>Special Case</legend>
                             <div class="label_white">{{ Form::label('allowed_leaves', 'Allowed Leaves :') }}</div>
                             {{ Form::number('allowed_leaves',Input::get('allowed_leaves'), array('placeholder' => '00','autocomplete' => 'off', 'size' => '20','id' => 'Special','class' => 'fourth')) }}<br><br>   
                            </fieldset><br><br>
                
                
         
       <br><br>
        </div>
       
       {{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
       <a href="#" onclick="window.opener.location.reload(true); window.close();" class="btn">Cancel</a>
        </div>

    
        
 
    </ul>
{{ Form::close() }}



<script>
    document.getElementById("Granted").disabled = true;
    document.getElementById("Accrued").disabled = true;
    document.getElementById("Special").disabled = true;
    document.getElementById("SemiGranted").disabled = true;


function special() {
    document.getElementById("Granted").disabled = true;
    document.getElementById("Accrued").disabled = true;
    document.getElementById("Special").disabled = false;
}
function accrued() {
    document.getElementById("Granted").disabled = true;
    document.getElementById("Accrued").disabled = false;
    document.getElementById("Special").disabled = true;
}

function granted() {
    document.getElementById("Granted").disabled = false;
    document.getElementById("Accrued").disabled = true;
    document.getElementById("Special").disabled = true;
}

function semigrant(){
    document.getElementById("SemiGranted").disabled = false;
}
</script>


@stop