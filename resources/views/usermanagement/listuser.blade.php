@extends('layouts.master')
@section('content')

 
  
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">User</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_users"><i class="fa fa-plus"></i> Add User</a>
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
                                    <th>Nama User</th>
                                    <th>Email</th>
                                    <th>Foto</th>
                                    <th>Role</th>
                                    <th>Position</th>
                                    <th>Departemen</th>
                                   
                                    <th class="text-right no-sort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $items )
                                <tr>
                                    <td>
                                    {{ $items->name }}
                                    </td>
                                   
                                    <td>{{ $items->email }}</td>
                                    <td>{{ $items->avatar }}</td>
                                    <td>{{ $items->role_name }}</td>
                                    <td>{{ $items->position }}</td>
                                    <td>{{ $items->department }}</td>
                                   
                                   
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" data-toggle="modal" data-target="#edit_users{{$items->id}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="{{url('all/employee/delete/'.$items->user_id)}}"onclick="return confirm('Are you sure to want to delete it?')"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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

         <!-- Add Users Modal -->
         <div id="add_users" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('users/save') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Nama Lengkap</label>
                                      
                                        <input class="form-control" type="text" id="name" placeholder="Isi Nama Lengkap"  name="name">
                             
                                    </div>
                                </div>
                            
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" id="email" name="email" placeholder="Isi Email" >
                                    </div>
                                </div>
                                <div class="col-md-6" >
                                <div class="form-group">
                              <label>Password</label>
                              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                             
                          </div>
                                </div>
                                <div class="col-md-6" >
                                <div class="form-group">
                              <label>Username</label>
                              <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="username" >
                             
                          </div>
                                </div>
                                <div class="col-md-6">

                                <div class="form-group">
                              <label>Repeat Password</label>
                              <input type="password" class="form-control" name="password_confirmation" placeholder="Choose Repeat Password" >
                          </div>
                                  
                                </div>
                                <div class="col-sm-6">  

                                <label class="col-form-label">Role</label>

                                 <select class="form-control" id="rolename" name="rolename" >
                                        
                                @foreach ($rolelist as $key=>$roles )
                                                <option value="{{ $roles->id }}" >{{ $roles->role_type }}</option>
                                @endforeach

                                        </select> 
                                   
                                </div>
                            
                            </div>

                            <div class="col-md-6">

                            <div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" class="form-control" name="no_telepon" placeholder="Isi No Telepon" >
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
        <!-- /Add User Modal -->
      

        @foreach ($users as $items )

        <!-- Edit Users Modal -->
        <div id="edit_users{{$items->id}}" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('users/update') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Nama Lengkap</label>
                                       

                                        <input class="form-control" type="text" id="name" placeholder="Isi Nama Lengkap"  name="name" value="{{ $items->name}}">
                                        <input class="form-control" type="text" id="id" placeholder="Isi Nama Lengkap"  name="id" value="{{ $items->id}}">
                                    </div>
                                </div>
                            
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" id="email" name="email" placeholder="Isi Email"  value="{{ $items->email}}">
                                    </div>
                                </div>
                                <div class="col-md-6" >
                                <div class="form-group">
                              <label>Password</label>
                              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                             
                          </div>
                                </div>
                                <div class="col-md-6" >
                                <div class="form-group">
                              <label>Username</label>
                              <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="username" value="{{ $items->username}}">
                             
                          </div>
                                </div>
                                <div class="col-md-6">

                                <div class="form-group">
                              <label>Repeat Password</label>
                              <input type="password" class="form-control" name="password_confirmation" placeholder="Choose Repeat Password" >
                          </div>
                                  
                                </div>
                                <div class="col-sm-6">  

                                <label class="col-form-label">Role</label>

                                 <select class="form-control" id="rolename" name="rolename" >
                                            
                                            <option value="{{ $items->role_name}}">{{ $items->role_name}}</option>
                                           
                                </select> 
                                   
                                </div>
                            
                            </div>

                            <div class="col-md-6">

                            <div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" class="form-control" name="no_telepon" placeholder="Isi No Telepon" value="{{ $items->phone_number}}">
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
        <!-- /Add Employee Modal -->

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
    @endsection
@endsection
