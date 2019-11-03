@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Patients</a> <a href="#" class="current">Add Patient</a> </div>
    <h1>Patients</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Patient</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{url('/admin/patient/add_patient')}}" name="add_patient" id="add_patient" novalidate="novalidate" enctype="multipart/form-data">
              {{ csrf_field()}}
              <div class="control-group">
                <label class="control-label">Patient's Name</label>
                <div class="controls">
                  <input type="text" name="patient_name" id="patient_name" >
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                  <input type="text" name="email" id="email">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Age</label>
                <div class="controls">
                  <input type="text" name="age" id="age">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Phone Number</label>
                <div class="controls">
                  <input type="text" name="number" id="number">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Blood Group</label>
                <div class="controls">
                  <input type="text" name="blood_group" id="blood_group">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Pressure</label>
                <div class="controls">
                  <input type="text" name="pressure" id="pressure">
                </div>
              </div>   
              <div class="control-group">
                <label class="control-label">Weight</label>
                <div class="controls">
                  <input type="text" name="weight" id="weight">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Allergies</label>
                <div class="controls">
                  <input type="text" name="allergies" id="allergies">
                </div>
              </div>  
              <div class="control-group">
                <label class="control-label">Any Long Term Illness</label>
                <div class="controls">
                  <input type="text" name="illness" id="illness">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add Patient" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection