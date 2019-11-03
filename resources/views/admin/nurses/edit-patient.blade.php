@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Patient Details</a> <a href="#" class="current">Edit Patient</a> </div>
    <h1>Patient Details</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Edit Patient</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{url('/admin/edit_patient/'.$getPatientDetails->id)}}" name="edit_category" id="edit_category" novalidate="novalidate">
               {{ csrf_field()}}
              <div class="control-group">
                <label class="control-label">Patient Name</label>
                <div class="controls">
                  <input type="text" name="patient_name" id="patient_name" value="{{$getPatientDetails->patient_name}}">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                  <textarea type="text" name="email" id="email">{{$getPatientDetails->email}}</textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Age</label>
                <div class="controls">
                  <input type="text" name="age" id="age" value="{{$getPatientDetails->age}}" >
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Mobile Number</label>
                <div class="controls">
                  <input type="text" name="number" id="number" value="{{$getPatientDetails->number}}" >
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Blood Group</label>
                <div class="controls">
                  <input type="text" name="blood_group" id="blood_group" value="{{$getPatientDetails->blood_group}}" >
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Pressure</label>
                <div class="controls">
                  <input type="text" name="pressure" id="pressure" value="{{$getPatientDetails->pressure}}" >
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Weight</label>
                <div class="controls">
                  <input type="text" name="weight" id="weight" value="{{$getPatientDetails->weight}}" >
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Allergies</label>
                <div class="controls">
                  <input type="text" name="allergies" id="allergies" value="{{$getPatientDetails->allergies}}" >
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Illness</label>
                <div class="controls">
                  <input type="text" name="illness" id="illness" value="{{$getPatientDetails->illness}}" >
                </div>
              </div>


              <div class="form-actions">
                <input type="submit" value="Edit Patient Details" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection