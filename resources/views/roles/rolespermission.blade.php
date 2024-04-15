@extends('layouts.master')
@section('content')

    <!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
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
                        <!-- <li><a class="{{set_active(['form/holidays/new'])}}" href="{{ route('form/holidays/new') }}">Holidays</a></li>
                        <li><a class="{{set_active(['form/leaves/new'])}}" href="{{ route('form/leaves/new') }}">Leaves (Admin)  -->
                            <span class="badge badge-pill bg-primary float-right">1</span></a>
                        </li>
                        <!-- <li><a class="{{set_active(['form/leavesemployee/new'])}}" href="{{route('form/leavesemployee/new')}}">Leaves (Employee)</a></li>
                        <li><a class="{{set_active(['form/leavesettings/page'])}}" href="{{ route('form/leavesettings/page') }}">Leave Settings</a></li>
                        <li><a class="{{set_active(['attendance/page'])}}" href="{{ route('attendance/page') }}">Attendance (Admin)</a></li>
                        <li><a class="{{set_active(['attendance/employee/page'])}}" href="{{ route('attendance/employee/page') }}">Attendance (Employee)</a></li>
                        <li><a class="{{set_active(['form/departments/page'])}}" href="{{ route('form/departments/page') }}">Departments</a></li>
                        <li><a class="{{set_active(['form/designations/page'])}}" href="{{ route('form/designations/page') }}">Designations</a></li>
                        <li><a class="{{set_active(['form/timesheet/page'])}}" href="{{ route('form/timesheet/page') }}">Timesheet</a></li>
                        <li><a class="{{set_active(['form/shiftscheduling/page'])}}" href="{{ route('form/shiftscheduling/page') }}">Shift & Schedule</a></li>
                        <li><a class="{{set_active(['form/overtime/page'])}}" href="{{ route('form/overtime/page') }}">Overtime</a></li> -->
                    </ul>
                </li>
                <!-- <li class="menu-title"> <span>HR</span> </li>
                <li class="{{set_active(['create/estimate/page','form/estimates/page','payments','expenses/page'])}} submenu"> 
                     <a href="#" class="{{ set_active(['create/estimate/page','form/estimates/page','payments','expenses/page']) ? 'noti-dot' : '' }}">
                        <i class="la la-files-o"></i>
                        <span> Sales </span> 
                        <span class="menu-arrow"></span>
                    </a> 
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['create/estimate/page','form/estimates/page'])}}" href="{{ route('form/estimates/page') }}">Estimates</a></li>
                        <li><a class="{{set_active(['payments'])}}" href="{{ route('payments') }}">Payments</a></li>
                        <li><a class="{{set_active(['expenses/page'])}}" href="{{ route('expenses/page') }}">Expenses</a></li>
                    </ul>
                </li> -->
                <!-- <li class="{{set_active(['form/salary/page','form/payroll/items'])}} submenu">
                    <a href="#" class="{{ set_active(['form/salary/page','form/payroll/items']) ? 'noti-dot' : '' }}"><i class="la la-money"></i>
                    <span> Payroll </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['form/salary/page'])}}" href="{{ route('form/salary/page') }}"> Gaji Karyawan </a></li>
                        <li><a href="{{ route('form/salary/page') }}"> Payslip </a></li> 
                        <li><a class="{{set_active(['form/payroll/items'])}}" href="{{ route('form/payroll/items') }}"> Payroll Items </a></li>
                    </ul>
                </li> -->
                <li class="{{set_active(['form/expense/reports/page','form/invoice/reports/page','form/leave/reports/page','form/daily/reports/page'])}} submenu">
                    <a href="#" class="{{ set_active(['form/expense/reports/page','form/invoice/reports/page','form/leave/reports/page','form/daily/reports/page']) ? 'noti-dot' : '' }}"><i class="la la-cogs"></i>
                    <span> Kategori </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['form/expense/reports/page'])}}" href="{{ route('form/expense/reports/page') }}"> List Kategori </a></li>
                        <!-- <li><a class="{{set_active(['form/invoice/reports/page'])}}" href="{{ route('form/invoice/reports/page') }}"> Invoice Report </a></li>
                        <li><a class="{{set_active([''])}}" href="payments-reports.html"> Payments Report </a></li>
                        <li><a class="{{set_active([''])}}" href="employee-reports.html"> Employee Report </a></li>
                        <li><a class="{{set_active([''])}}" href="payslip-reports.html"> Payslip Report </a></li>
                        <li><a class="{{set_active([''])}}" href="attendance-reports.html"> Attendance Report </a></li>
                        <li><a class="{{set_active(['form/leave/reports/page'])}}" href="{{ route('form/leave/reports/page') }}"> Leave Report </a></li>
                        <li><a class="{{set_active(['form/daily/reports/page'])}}" href="{{ route('form/daily/reports/page') }}"> Daily Report </a></li> -->
                    </ul>
                </li>
                <li class="menu-title"> <span>Performa</span> </li>
                <li class="{{set_active(['form/performance/indicator/page','form/performance/page','form/performance/appraisal/page'])}} submenu">
                    <a href="#" class="{{ set_active(['form/performance/indicator/page','form/performance/page','form/performance/appraisal/page']) ? 'noti-dot' : '' }}"><i class="la la-graduation-cap"></i>
                    <span> Performa </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <!-- <li><a class="{{set_active(['form/performance/indicator/page'])}}" href="{{ route('form/performance/indicator/page') }}"> Performance Indicator </a></li>
                        <li><a class="{{set_active(['form/performance/page'])}}" href="{{ route('form/performance/page') }}"> Performance Review </a></li>
                        <li><a class="{{set_active(['form/performance/appraisal/page'])}}" href="{{ route('form/performance/appraisal/page') }}"> Performance Appraisal </a></li> -->
                    </ul>
                </li>
                <li class="{{set_active(['form/training/list/page','form/trainers/list/page'])}} submenu"> 
                    <a href="#" class="{{ set_active(['form/training/list/page','form/trainers/list/page']) ? 'noti-dot' : '' }}"><i class="la la-edit"></i>
                    <span> Pelatihan </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <!-- <li><a class="{{set_active(['form/training/list/page'])}}" href="{{ route('form/training/list/page') }}"> Training List </a></li>
                        <li><a class="{{set_active(['form/trainers/list/page'])}}" href="{{ route('form/trainers/list/page') }}"> Trainers</a></li>
                        <li><a class="{{set_active(['form/training/type/list/page'])}}" href="{{ route('form/training/type/list/page') }}"> Training Type </a></li> -->
                    </ul>
                </li>
                <!-- <li class="menu-title"> <span>Administrasi</span> </li>
                <li> <a href="assets.html"><i class="la la-object-ungroup">
                    </i> <span>Aset</span></a>
                </li> -->
                <!-- <li class="{{set_active(['user/dashboard/index','jobs/dashboard/index','user/dashboard/all','user/dashboard/applied/jobs','user/dashboard/interviewing','user/dashboard/offered/jobs','user/dashboard/visited/jobs','user/dashboard/archived/jobs','user/dashboard/save','jobs','job/applicants','job/details','page/manage/resumes','page/shortlist/candidates','page/interview/questions','page/offer/approvals','page/experience/level','page/candidates','page/schedule/timing','page/aptitude/result'])}} submenu"> -->
                    <!-- <a href="#" class="{{ set_active(['user/dashboard/index','jobs/dashboard/index','user/dashboard/all','user/dashboard/save','jobs','job/applicants','job/details']) ? 'noti-dot' : '' }}"><i class="la la-briefcase"></i>
                        <span> Pekerjaan </span> <span class="menu-arrow"></span>
                    </a> -->
                    <!-- <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }} {{ (request()->is('job/applicants/*')) ? 'display: block;' : 'display: none;' }}"> -->
                        <!-- <li><a class="{{set_active(['user/dashboard/index','user/dashboard/all','user/dashboard/applied/jobs','user/dashboard/interviewing','user/dashboard/offered/jobs','user/dashboard/visited/jobs','user/dashboard/archived/jobs','user/dashboard/save'])}}" href="{{ route('user/dashboard/index') }}"> User Dasboard </a></li>
                        <li><a class="{{set_active(['jobs/dashboard/index'])}}" href="{{ route('jobs/dashboard/index') }}"> Jobs Dasboard </a></li>
                        <li><a class="{{set_active(['jobs','job/applicants','job/details'])}} {{ (request()->is('job/applicants/*')) ? 'active' : '' }}" href="{{ route('jobs') }} "> Manage Jobs </a></li>
                        <li><a class="{{set_active(['page/manage/resumes'])}}" href="{{ route('page/manage/resumes') }}"> Manage Resumes </a></li>
                        <li><a class="{{set_active(['page/shortlist/candidates'])}}" href="{{ route('page/shortlist/candidates') }}"> Shortlist Candidates </a></li>
                        <li><a class="{{set_active(['page/interview/questions'])}}" href="{{ route('page/interview/questions') }}"> Interview Questions </a></li>
                        <li><a class="{{set_active(['page/offer/approvals'])}}" href="{{ route('page/offer/approvals') }}"> Offer Approvals </a></li>
                        <li><a class="{{set_active(['page/experience/level'])}}" href="{{ route('page/experience/level') }}"> Experience Level </a></li>
                        <li><a class="{{set_active(['page/candidates'])}}" href="{{ route('page/candidates') }}"> Candidates List </a></li>
                        <li><a class="{{set_active(['page/schedule/timing'])}}" href="{{ route('page/schedule/timing') }}"> Schedule timing </a></li>
                        <li><a class="{{set_active(['page/aptitude/result'])}}" href="{{ route('page/aptitude/result') }}"> Aptitude Results </a></li> -->
                    <!-- </ul> -->
                <!-- </li> -->
                <!-- <li class="menu-title"> <span>Pages</span> </li>
                <li class="{{set_active(['employee/profile/*'])}} submenu">
                    <a href="#"><i class="la la-user"></i>
                        <span> Profil </span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a class="{{set_active(['employee/profile/*'])}}" href="{{ route('all/employee/list') }}"> Profil Karyawan </a></li>
                    </ul>
                </li> -->

                <li class="menu-title">Settings</li>
                <li  ><a class="{{set_active(['menus/page'])}}" href="{{ route('menus/page') }}" href="{{ route('menus/page') }}"><i class="la la-building"></i><span>Menu</span></a></li>
                <li ><a class="{{set_active(['roles/permissions/page'])}}" href="{{ route('roles/permissions/page') }}"><i class="la la-key"></i><span>Roles & Permissions</span></a></li>
                <li   ><a class="{{set_active(['users/page'])}}" href="{{ route('users/page') }}"><i class="la la-user"></i><span>User</span></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
  
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Roles & Permission</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Roles</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_users"><i class="fa fa-plus"></i> Add Roles</a>
                        <div class="view-icons">
                            <a href="{{ route('all/employee/card') }}" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                            <a href="{{ route('all/employee/list') }}" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
			<!-- /Page Header -->

            <!-- Search Filter -->
            <form action="{{ route('all/employee/list/search') }}" method="POST">
                @csrf
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">  
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating" name="employee_id">
                            <label class="focus-label">Nama User</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">  
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">Email</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3"> 
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">Position</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">  
                        <button type="sumit" class="btn btn-success btn-block"> Search </button>  
                    </div>
                </div>
            </form>
            <!-- Search Filter -->
            {{-- message --}}
            {!! Toastr::message() !!}

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Roles</th>
                                    <th>Modul Akses</th>
                                    <th>Action</th>
                           
                           
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rolesPermissions as $roles )
                                <tr>
                                    <td>
                                    {{ $roles->id }}
                                    </td>
                                   
                                    <td>{{ $roles->role_type }}</td>
                                    <td>
                                      
                                    <a class="btn btn-success" style="color:black;" data-toggle="modal" data-target="#add_modulakses{{$roles->id}}"><i class="fa fa-plus"></i> Modul Akses</a>
                                    <a class="btn btn-warning" style="color:black;" data-toggle="modal" data-target="#edit_modulakses{{$roles->id}}"><i class="fa fa-pencil m-r-5"></i> Edit Modul Akses</a>

                                    </td>
                                  
                                   
                                   
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">

                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                          
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" data-toggle="modal" data-target="#edit_users{{$roles->id}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="{{url('all/employee/delete/'.$roles->id)}}"onclick="return confirm('Are you sure to want to delete it?')"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

         <!-- Add Roles Modal -->
         <div id="add_users" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Roles</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('users/save') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Nama Roles</label>
                                      
                                        <input class="form-control" type="text" id="name" placeholder="Isi Nama Roles"  name="nameroles">
                             
                                    </div>
                                </div>

                         </div>
                            
                              
                 
                               <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Simpan</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Roles Modal -->
      

        @foreach ($rolesPermissions as $roles )
        <!-- Edit Roles Modal -->
        <div id="edit_users{{$roles->id}}" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Roles</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('users/update') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Nama Roles</label>
                                       

                                        <input class="form-control" type="text" id="name" placeholder="Nama Roles"  name="name" value="{{ $roles->name}}">
                                        <input class="form-control" type="hidden" id="id"   name="id" value="{{ $roles->id}}">
                                    </div>
                                </div>
                            
                               
                            
                     </div>
                          
                               <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Simpan</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Roles Modal -->

        @endforeach


        
        @foreach ($rolesPermissions as $roles )
        <!-- Add Modul Akses Modal -->

        <div id="add_modulakses{{$roles->id}}" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Modul Akses</h5>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       
                        @csrf
                            <div class="row">
                                <div class="col-sm-12">

                                <div class="table-responsive">
                                
                        <br>
                        <h4>Roles : {{$roles->role_type}}</h4>
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Menu/Modul</th>
                                    <th>Category Menu</th>
                                    <th>Category Sub Menu</th>
                                    <th>View</th>
                                    <th>Create</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                   
                                  
                           
                           
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menus as $menu )
                                <tr>
                                    <td>
                                    {{ $menu->id }}
                                    <input type="hidden" name="idmenu" class="id_menu{{$roles->id}}" value="{{$menu->id}}"  />
                                    <input type="hidden" name="roleid" class="id_roles{{$roles->id}}" value="{{$roles->id}}" />
                                    </td>
                                   
                                    <td>{{ $menu->namamenu }}</td>
                                    <td>
                                    {{ $menu->categorymenu}}
                                    </td>
                                    <td>
                                    {{ $menu->sub_categorymenu}}
                                   </td>
                                 
                                   <td>

                                   <input type="checkbox" name="view[]"  value="1"  id="c_view{{$menu->id}}" onClick="Akses_View('{{$roles->id}}','{{$menu->id}}')"  />
                                   
                                   </td>
                                 
                                   <td>
                                   <input type="checkbox" name="create[]"  value="1" id="c_create{{$menu->id}}"  onClick="Akses_Create('{{$roles->id}}','{{$menu->id}}')" />
                                   
                                   </td>
                                 
                                   <td>

                                   <input type="checkbox" name="edit[]"  value="1" id="c_edit{{$menu->id}}"  onClick="Akses_Edit('{{$roles->id}}','{{$menu->id}}')" />
                                   
                                   </td>
                                 
                                   <td>

                                   <input type="checkbox" name="delete[]"  value="1" id="c_delete{{$menu->id}}" onClick="Akses_Delete('{{$roles->id}}','{{$menu->id}}')"/>
                                   
                                   </td>
                                 
                                  
                                   
                                   
                                   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                                  
                                        
                                        <input class="form-control" type="hidden" id="id"   name="id" value="{{ $roles->id}}">
                                    
                                </div>
                            
                               
                            
                     </div>
                          
                               <div class="submit-section">
                                <button class="btn btn-primary submit-btn" id="btnsubmit"  >Simpan</button>
                              </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Modul Modal -->

        @endforeach



        @foreach ($rolesPermissions as $roles )
        <!-- Edit Modul Akses Modal -->

        @php

        

        $modul_permission = DB::table('module_permissions')

        ->select('menus.id','menus.categorymenu','menus.sub_categorymenu','module_permissions.view','module_permissions.create','module_permissions.edit','module_permissions.delete')

        ->leftJoin('menus','menus.id','=','module_permissions.module_permission')
        
        ->where('role_id',$roles->id)->get();


        @endphp

        <div id="edit_modulakses{{$roles->id}}" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Modul Akses</h5>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('users/update') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">

                                <div class="table-responsive">
                                
                        <br>
                        <h4  >Roles : {{$roles->role_type}}</h4>
                        <table class="table table-striped custom-table datatable" >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Menu/Modul</th>
                                    <th>Category Menu</th>
                                    <th>Category Sub Menu</th>
                                    <th>View</th>
                                    <th>Create</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                   
                                    <th>Action</th>
                           
                           
                                   
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($menus as $modul )
                                <tr>
                                    <td>
                                    {{ $modul->id }}
                                    </td>
                                   
                                    <td>{{ $modul->namamenu }}</td>
                                    <td>
                                    {{ $modul->categorymenu}}
                                    </td>
                                    <td>
                                    {{ $modul->sub_categorymenu}}
                                   </td>
                                 
                                   <td>

                                   <input type="checkbox" name="[]view" />
                                   
                                   </td>
                                 
                                   <td>
                                   <input type="checkbox" name="[]create" />
                                   
                                   </td>
                                 
                                   <td>

                                   <input type="checkbox" name="[]edit" />
                                   
                                   </td>
                                 
                                   <td>

                                   <input type="checkbox" name="[]delete" />
                                   
                                   </td>
                                 
                                  
                                   
                                   
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">

                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                          
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" data-toggle="modal" data-target="#edit_users{{$roles->id}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="{{url('all/employee/delete/'.$roles->id)}}"onclick="return confirm('Are you sure to want to delete it?')"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                                  
                                        
                                        <input class="form-control" type="hidden" id="id"   name="id" value="{{ $roles->id}}">
                                    
                                </div>
                            
                               
                            
                     </div>
                          
                               <div class="submit-section">
                                <button class="btn btn-primary submit-btn"  >Simpan</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Modul Modal -->

        @endforeach
    </div>
    <!-- /Page Wrapper -->
    @section('script')
    <script>
        $("input:checkbox").on('click', function()
        {
            var $box = $(this);
            if ($box.is(":checked"))
            {
                var group = "input:checkbox[class='" + $box.attr("class") + "']";
                $(group).prop("checked", false);
                $box.prop("checked", true);
            }
            else
            {
                $box.prop("checked", false);
            }
        });
    </script>
    <script>
        // select auto id and email
        $('#name').on('change',function()
        {
            $('#employee_id').val($(this).find(':selected').data('employee_id'));
            $('#email').val($(this).find(':selected').data('email'));
        });
    </script>


    

    <script>

        function Tambahakses_modul(role_id) {

        // var form=$(this)
        // e.preventDefault(); // avoid to execute the actual submit of the form.

        
            // var $box = $(this);
            // if ($box.is(":checked"))
            // {
            //     var group = "input:checkbox[class='" + $box.attr("class") + "']";
            //     $(group).prop("checked", false);
            //     $box.prop("checked", true);
            // }
            // else
            // {
            //     $box.prop("checked", false);
            // }

            
            // const input_modulaccess = new FormData();
           
            // var urlname = form.attr('action');

            var id_menu = document.getElementsByClassName( 'id_menu'+role_id ),
            in_idmenu  = [].map.call(id_menu, function( input ) {
                return input.value;

                
            });

            var role_id = document.getElementsByClassName( 'id_roles'+role_id ),
            in_rolesid  = [].map.call(role_id, function( input ) {
                return input.value;

                
            });

            var c_view = document.getElementsByClassName( 'c_view'+role_id ),
            in_c_view  = [].map.call(c_view, function( input ) {
                return input.value;

                
            });

            console.log("lihat data input idmenu: ",in_idmenu)
            console.log("lihat data input role: ",in_rolesid)
            console.log("lihat data input view: ",in_c_view)
            

           

            // for (i = 0; i < x.length ;i++) {
              

            //     console.log("lihat data input: ",i)
            // }
                        

                                

       

          //console.log("lihat data input: ",input_modulaccess);

            // var tot_data_count=input_modulaccess.length;

    


            // $.ajax({

            //     type: 'POST',
            //     data:image_upload,
            //     url: urlname,

            //     headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     },
            //     dataType: 'json',
            //     contentType: false,
            //     cache: false,
            //     processData: false,
            //     success: function (response) {

            //         var data = response.report;

            //         new Attention.Alert({

            //     title: 'Notifikasi Berhasil!',
            //     content:"Dokumen anda sudah berhasil disimpan.Terima kasih!",
            //     useInnerHTML: true,
            //     afterClose: () => {

            //     window.location.reload();
            //     }
            //     });
            // }
            // });

         



        };


        function Akses_View(roleid,idmenu){

        var chk_view=document.getElementById("c_view"+idmenu).value;


        var input_modulaccess=[{

                    'role_id'                : roleid,
                    'module_permission'      : idmenu,
                     'view'                  : chk_view,
                     'create'                : 0,
                     'edit'                  : 0,
                     'delete'                : 0


        }];



        //kirim data add modul access

            $.ajax({

                type: 'POST' ,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `modulaccess/save`,
                data: 
                {
                    _token: "{{ csrf_token() }}",
                    role_id                : roleid,
                    module_permission      : idmenu,
                    view                  : chk_view,
                     create                : 0,
                     edit                  : 0,
                     delete                : 0
                },
               
                dataType: "text",
                success: function (response) {

                    console.log("after saving:",response);

                    if(response!=''){

                          toastr.success('Create new add modules successfully :)');
                          $('#add_modulakses'+roleid).modal('hide');
                    }

                  

                //         var data = response.report;

                //         $('#namakaryawan'+ no_urut).empty();


                // for (var i = 0; i < data.length; i++) {


                // let select_option = '';

                // select_option += "<option value='" + data[i].ID + "'>" + data[i].name +"-"+data[i].Name_work+ "</option>";


                // $('#namakaryawan'+ no_urut).append(select_option).trigger('change');


                // $("#namakaryawan"+no_urut).select2({

                // placeholder: "--Silahkan Pilih Nama Yang Dishare--"

                // });






                // }


                }

                });


        console.log("id menu:", idmenu);

        console.log("value:", chk_view);


        }

        function Akses_Create(roleid,idmenu){

        var chk_create=document.getElementById("c_create"+idmenu).value;


        console.log("id create:", idmenu);

        console.log("value:", chk_create);


        }


        function Akses_Edit(roleid,idmenu){

        //console.log("id edit:", edit);

        var chk_edit=document.getElementById("c_edit"+idmenu).value;

        console.log("id edit:", idmenu);

        console.log("value:", chk_edit);


        }

        function Akses_Delete(roleid,idmenu){

       // console.log("id delete:", deleted);

       var chk_delete=document.getElementById("c_delete"+idmenu).value;

        console.log("id delete:", idmenu);

        console.log("value:", chk_delete);



        }

    </script>


    @endsection
@endsection
