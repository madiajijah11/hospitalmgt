@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Lab Tests</a> <a href="#" class="current">Add Lab Tests</a> </div>
    <h1>Lab Tests</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Lab Tests</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{url('/admin/add_lab/'.$patientInfo->id)}}" name="add_patient" id="add_patient" novalidate="novalidate" enctype="multipart/form-data">
              {{ csrf_field()}}
              <div class="control-group">
                <label class="control-label">Patient's Name</label>
                <div class="controls">
                  <label class="control-label"><strong >{{$patientInfo->patient_name}}</strong></label>
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Blood Group</label>
                <div class="controls">
                  <label class="control-label"><strong >{{$patientInfo->blood_group}}</strong></label>
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Allergies</label>
                <div class="controls">
                  <label class="control-label"><strong >{{$patientInfo->allergies}}</strong></label>
                </div>
              </div>  
              <input type="hidden" value="{{$patientInfo->id}}" name="patient_id">
              <div class="control-group">
                <label class="control-label">Any Long Term Illness</label>
                <div class="controls">
                  <label class="control-label"><strong >{{$patientInfo->illness}}</strong></label>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Symptoms</label>
                <div class="controls">
                  <textarea name="symptoms" id="symptoms" rows="5"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Lab Tests</label>
                <div class="controls">
                  <textarea name="description" id="description" rows="5"></textarea>
                </div>
              </div> 
              <div class="control-group">
                <label class="control-label">Any Other Clinical Notes(Optional)</label>
                <div class="controls">
                  <textarea name="clinical_notes" id="clinical_notes" rows="5"></textarea>
                </div>
              </div>                            
              <div class="form-actions">
                <input type="submit" value="Send Lab Tests" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection