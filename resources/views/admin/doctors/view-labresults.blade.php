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
                  <th>Lab Tests</th>                  
                  <th>Lab Results</th>                  
                  <th>Image</th>                  
                  <th>Action</th>                  
                </tr>
              </thead>
              <tbody>
                @foreach($getLabResults as $labResults)
                <tr class="gradeX">
                  <td>{{$labResults->id}}</td>
                  <td>{{$labResults->patient->patient_name}}</td>
                  <td>{{$labResults->labtest->description}}</td>
                  <td>{{$labResults->description}}</td>
                  <td class="center">
                  @if(!empty($labResults->image))
                  <img src="{{ asset('storage/'.$labResults->image) }}" style="width:50px;">
                  @endif
                  </td>   

                  <td class="gradeX">
                    <a href="{{url('/admin/add_prescription/'.$labResults->id)}}" class="btn btn-primary btn-mini" title="Add Prescription">Add </a>   
                    
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