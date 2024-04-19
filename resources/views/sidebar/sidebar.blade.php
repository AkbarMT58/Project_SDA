
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">

        @foreach ($modul_permission as $modulmenu)
            <ul>
                <!-- <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="{{set_active(['home','em/dashboard'])}} submenu">
                    <a href="#" class="{{ set_active(['home','em/dashboard']) ? 'noti-dot' : '' }}">
                        <i class="la la-dashboard"></i>
                        <span> Dashboard</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['home'])}}" href="{{ route('home') }}">Dashboard Admin</a></li>
                        <li><a class="{{set_active(['em/dashboard'])}}" href="{{ route('em/dashboard') }}"> Dashboard Karyawan</a></li>
                    </ul>
                </li>
                @if (Auth::user()->role_name=='Admin')
                    <li class="menu-title"> <span>Authentication</span> </li>
                    <li class="{{set_active(['search/user/list','userManagement','activity/log','activity/login/logout'])}} submenu">
                        <a href="#" class="{{ set_active(['search/user/list','userManagement','activity/log','activity/login/logout']) ? 'noti-dot' : '' }}">
                            <i class="la la-user-secret"></i> <span> User Controller</span> <span class="menu-arrow"></span>
                        </a>
                        <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                            <li><a class="{{set_active(['search/user/list','userManagement'])}}" href="{{ route('userManagement') }}">All User</a></li>
                            <li><a class="{{set_active(['activity/log'])}}" href="{{ route('activity/log') }}">Activity Log</a></li>
                            <li><a class="{{set_active(['activity/login/logout'])}}" href="{{ route('activity/login/logout') }}">Activity User</a></li>
                        </ul>
                    </li>
                @endif
                <li class="menu-title"> <span>Master Data</span> </li>
                <li class="{{set_active(['all/employee/list','all/employee/list','all/employee/card','form/holidays/new','form/leaves/new',
                    'form/leavesemployee/new','form/leavesettings/page','attendance/page',
                    'attendance/employee/page','form/departments/page','form/designations/page',
                    'form/timesheet/page','form/shiftscheduling/page','form/overtime/page'])}} submenu">
                    <a href="#" class="{{ set_active(['all/employee/list','all/employee/card','form/holidays/new','form/leaves/new',
                    'form/leavesemployee/new','form/leavesettings/page','attendance/page',
                    'attendance/employee/page','form/departments/page','form/designations/page',
                    'form/timesheet/page','form/shiftscheduling/page','form/overtime/page']) ? 'noti-dot' : '' }}">
                        <i class="la la-user"></i> <span> Karyawan</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['all/employee/list','all/employee/card'])}}" href="{{ route('all/employee/card') }}">List Karyawan</a></li>
                       
                            <span class="badge badge-pill bg-primary float-right">1</span></a>
                        </li>
                       
                    </ul>
                </li>
          
                <li class="{{set_active(['form/expense/reports/page','form/invoice/reports/page','form/leave/reports/page','form/daily/reports/page'])}} submenu">
                    <a href="#" class="{{ set_active(['form/expense/reports/page','form/invoice/reports/page','form/leave/reports/page','form/daily/reports/page']) ? 'noti-dot' : '' }}"><i class="la la-cogs"></i>
                    <span> Kategori </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['form/expense/reports/page'])}}" href="{{ route('form/expense/reports/page') }}"> List Kategori </a></li>
                    
                    </ul>
                </li>
                <li class="menu-title"> <span>Performa</span> </li>
                <li class="{{set_active(['form/performance/indicator/page','form/performance/page','form/performance/appraisal/page'])}} submenu">
                    <a href="#" class="{{ set_active(['form/performance/indicator/page','form/performance/page','form/performance/appraisal/page']) ? 'noti-dot' : '' }}"><i class="la la-graduation-cap"></i>
                    <span> Performa </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                      
                    </ul>
                </li>
                <li class="{{set_active(['form/training/list/page','form/trainers/list/page'])}} submenu"> 
                    <a href="#" class="{{ set_active(['form/training/list/page','form/trainers/list/page']) ? 'noti-dot' : '' }}"><i class="la la-edit"></i>
                    <span> Pelatihan </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                      
                    </ul>
                </li> -->

                <!-- <li class="menu-title"> <span>Master Data</span> </li>
                <li class="{{set_active(['all/employee/list','all/employee/list','all/employee/card','form/holidays/new','form/leaves/new',
                    'form/leavesemployee/new','form/leavesettings/page','attendance/page',
                    'attendance/employee/page','form/departments/page','form/designations/page',
                    'form/timesheet/page','form/shiftscheduling/page','form/overtime/page'])}} submenu">
                    <a href="#" class="{{ set_active(['all/employee/list','all/employee/card','form/holidays/new','form/leaves/new',
                    'form/leavesemployee/new','form/leavesettings/page','attendance/page',
                    'attendance/employee/page','form/departments/page','form/designations/page',
                    'form/timesheet/page','form/shiftscheduling/page','form/overtime/page']) ? 'noti-dot' : '' }}">
                        <i class="la la-user"></i> <span> Karyawan</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['all/employee/list','all/employee/card'])}}" href="{{ route('all/employee/card') }}">List Karyawan</a></li>
                       
                            <span class="badge badge-pill bg-primary float-right">1</span></a>
                        </li>
                       
                    </ul>
                </li> -->
             

                <li class="menu-title">@if($modulmenu->categorymenu==1){{$modulmenu->namamenu}} @endif</li>
           

               
    
                @if($modulmenu->categorymenu==2  )

                  <li class="{{set_active([$modulmenu->link_menu])}} submenu">

                    <a href="#" class="{{ set_active([$modulmenu->link_menu]) ? 'noti-dot' : '' }}">
                        <i class="{{$modulmenu->namaicons}}"></i> <span>  {{$modulmenu->namamenu}} </span> <span class="menu-arrow"></span>
                    </a>

                   

                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">

                    @foreach( $modulpermissionsubchildmenu as $subchildmenu)

                 

                        <li><a class="{{set_active(['all/employee/list','all/employee/card'])}}" href="{{ url('/') }}{{$subchildmenu->link_menu}}">   {{$subchildmenu->namamenu}}   </a></li>

                       
                            <!-- <span class="badge badge-pill bg-primary float-right">1</span></a> -->
                        </li>

                    @endforeach
                       
                    </ul>
                   
                    
                </li> 

                @endif
                
               

            </ul>

            @endforeach
        </div>
    </div>
</div>
<!-- /Sidebar -->