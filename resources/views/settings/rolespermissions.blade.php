@extends('layouts.settings')
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
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Roles & Permissions</h3>
                    </div>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-3">
                    <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#add_role"><i class="fa fa-plus"></i> Add Roles</a>
                    <div class="roles-menu">
                        <ul>
                            @foreach ($rolesPermissions as $rolesName )
                            <li class="{{ $loop->first ? 'active' : '' }}">
                                <span hidden class="id">{{ $rolesName->id }}</span>
                                <a class="active" href="javascript:void(0);"><span class="roleNmae">{{ $rolesName->permissions_name }}</span>
                                    <span class="role-action">
                                        <span class="action-circle large rolesUpdate" data-toggle="modal" data-id="'.$rolesName->id.'" data-target="#edit_role">
                                            <i class="material-icons">edit</i>
                                        </span>
                                        <span class="action-circle large delete-btn rolesDelete" data-toggle="modal"  data-id="'.$rolesName->id.'" data-target="#delete_role">
                                            <i class="material-icons">delete</i>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-9">
                <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#add_role"><i class="fa fa-plus"></i> Add Modules</a>
                    <h6 class="card-title m-b-20">Module Access</h6>
                    <div class="m-b-30">
                        <ul class="list-group notification-list">
                            <li class="list-group-item">
                                Employee
                                <div class="status-toggle">
                                    <input type="checkbox" id="staff_module" class="check">
                                    <label for="staff_module" class="checktoggle">checkbox</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                Holidays
                                <div class="status-toggle">
                                    <input type="checkbox" id="holidays_module" class="check" checked>
                                    <label for="holidays_module" class="checktoggle">checkbox</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                Leaves
                                <div class="status-toggle">
                                    <input type="checkbox" id="leave_module" class="check" checked>
                                    <label for="leave_module" class="checktoggle">checkbox</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                Events
                                <div class="status-toggle">
                                    <input type="checkbox" id="events_module" class="check" checked>
                                    <label for="events_module" class="checktoggle">checkbox</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                Chat
                                <div class="status-toggle">
                                    <input type="checkbox" id="chat_module" class="check" checked>
                                    <label for="chat_module" class="checktoggle">checkbox</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                Jobs
                                <div class="status-toggle">
                                    <input type="checkbox" id="job_module" class="check">
                                    <label for="job_module" class="checktoggle">checkbox</label>
                                </div>
                            </li>
                        </ul>
                    </div>      	
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th>Module Permission</th>
                                    <th class="text-center">Read</th>
                                    <th class="text-center">Write</th>
                                    <th class="text-center">Create</th>
                                    <th class="text-center">Delete</th>
                                    <th class="text-center">Import</th>
                                    <th class="text-center">Export</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Employee</td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Holidays</td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Leaves</td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Events</td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked="">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
        
        <!-- Add Role Modal -->
        <div id="add_role" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('roles/permissions/save') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Role Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('roleName') is-invalid @enderror" id="roleName" name="roleName" value="{{ old('roleName') }}" placeholder="Enter role name">
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Role Modal -->
        
        <!-- Edit Role Modal -->
        <div id="edit_role" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-md">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('roles/permissions/update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" id="e_id" value="">
                                <label>Role Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="e_roleNmae" name="roleName" value="">
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Role Modal -->

        <!-- Delete Role Modal -->
        <div class="modal custom-modal fade" id="delete_role" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Role</h3>
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <form action="{{ route('roles/permissions/delete') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" class="e_id" value="">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary continue-btn submit-btn">Delete</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Role Modal -->
    </div>	
    <!-- /Page Wrapper -->
    @section('script')
    {{-- update js --}}
    <script>
        $(document).on('click','.rolesUpdate',function()
        {
            var _this = $(this).closest("li");;
            $('#e_id').val(_this.find('.id').text());
            $('#e_roleNmae').val(_this.find('.roleNmae').text());
        });
    </script>
    {{-- delete js --}}
    <script>
        $(document).on('click','.rolesDelete',function()
        {
            var _this = $(this).closest("li");
            $('.e_id').val(_this.find('.id').text());
        });
    </script>
    @endsection
@endsection