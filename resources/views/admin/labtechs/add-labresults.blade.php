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
            <form class="form-horizontal" method="post" action="{{url('/admin/add_results/'.$patientInfo->id)}}" name="add_patient" id="add_patient" novalidate="novalidate" enctype="multipart/form-data">
              {{ csrf_field()}}
              <div class="control-group">
                <label class="control-label">Patient's Name</label>
                <div class="controls">
                  <label class="control-label"><strong >{{$patientInfo->patient->patient_name}}</strong></label>
                </div>
              </div>
              <input type="hidden" name="patient_id" value="{{$patientInfo->patient->id}}">
              <input type="hidden" name="labtest_id" value="{{$patientInfo->id}}">
              <div class="control-group">
                <label class="control-label">Lab Tests</label>
                <div class="controls">
                  <textarea name="description" id="description" rows="5"></textarea>
                </div>
              </div> 
              <div class="control-group">
                <label class="control-label">Write Lab Results</label>
                <div class="controls">
                  <textarea name="lab_results" id="lab_results" rows="5"></textarea>
                </div>
              </div>  
              <div class="control-group">
                  <label class="control-label">Upload Image(Optional)</label>
                  <div class="controls">
                    <input type="file" name="image" id="image">
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