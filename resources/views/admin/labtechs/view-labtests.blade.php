@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Doctors</a> <a href="#" class="current">View Doctors</a> </div>
    <h1>Doctors</h1>
     @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_error') !!}</strong>
            </div>        
        @endif
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_success') !!}</strong>
            </div>        
        @endif
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>View Doctors</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Patient Name</th>
                  <th>Age</th>
                  <th>Allergies</th>                  
                  <th>Long Term Illness</th>                  
                  <th>Symptoms</th>                  
                  <th>Description</th>                  
                  <th>Clinical Notes</th>                  
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($getLabTests as $labtest)
                <tr class="gradeX">
                  <td>{{$labtest->id}}</td>
                  <td>{{$labtest->patient->patient_name}}</td>
                  <td>{{$labtest->patient->age}}</td>
                  <td>{{$labtest->patient->allergies}}</td>
                  <td>{{$labtest->patient->illness}}</td>
                  <td>{{$labtest->symptoms}}</td>
                  <td>{{$labtest->description}}</td>
                  <td>{{$labtest->clinical_notes}}</td>
                  <td class="gradeX">
                    <a href="{{url('/admin/add_results/'.$labtest->id)}}" class="btn btn-primary btn-mini" title="Add Lab Results">Add </a>   
                  </td> 
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection