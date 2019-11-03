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
                  <th>Patient ID</th>
                  <th>Patient Name</th>
                  <th>Email</th>
                  <th>Age</th>
                  <th>Mobile Number</th>
                  <th>Blood Group</th>
                  <th>Pressure</th>
                  <th>Weight</th>
                  <th>Allergies</th>                  
                  <th>Long Term Illness</th>                  
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($patients as $patient)
                <tr class="gradeX">
                  <td>{{$patient->id}}</td>
                  <td>{{$patient->patient_name}}</td>
                  <td>{{$patient->email}}</td>
                  <td>{{$patient->age}}</td>
                  <td>{{$patient->number}}</td>
                  <td>{{$patient->blood_group}}</td>
                  <td>{{$patient->pressure}}</td>
                  <td>{{$patient->weight}}</td>
                  <td>{{$patient->allergies}}</td>
                  <td>{{$patient->illness}}</td>
                  <td class="center">
                    <a href="{{url('/admin/edit_patient/'.$patient->id)}}" class="btn btn-primary btn-mini">Edit</a> 
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