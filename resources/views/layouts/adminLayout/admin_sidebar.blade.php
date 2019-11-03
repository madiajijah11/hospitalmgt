<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="{{url('/admin/dashboard')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Doctors</span> <span class="   label label-important"></span></a>
      <ul>
        <li><a href="{{url('/admin/patient/view-patients')}}">View Patient Info</a></li>
        <li><a href="{{url('/admin/doctors/view-labtests')}}">View Lab Tests Send</a></li>        
        <li><a href="{{url('/admin/doctors/view-labresults')}}">View Lab results</a></li>
      </ul>
    </li> 

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>LabTechs</span> <span class="   label label-important"></span></a>
      <ul>
        <li><a href="{{url('/admin/labtechs/view-labtests')}}">View Lab Tests</a></li>        
        <li><a href="{{url('/admin/labtechs/view-labresults')}}">View Lab results</a></li>
      </ul>
    </li> 

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Nurses</span> <span class="   label label-important"></span></a>
      <ul>
        <li><a href="{{url('/admin/patient/add_patient')}}">Add Patient Info</a></li>
        <li><a href="{{url('/admin/patient/view_patient')}}">View Patient Info</a></li>
      </ul>
    </li>    
  </ul>
</div>
<!--sidebar-menu-->
