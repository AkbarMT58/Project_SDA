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
                                      
                                    <a class="btn btn-success" style="color:black;" data-toggle="modal" data-target="#add_modulakses{{$roles->id}}" onClick="GetDataAccess_Modul('{{count($menus)}}','{{$roles->id}}')" ><i class="fa fa-plus"></i> Add Modul Akses</a>
                                    <a class="btn btn-warning" style="color:black;" data-toggle="modal" data-target="#edit_modulakses{{$roles->id}}" onClick="GetDataEditAccess_Modul('{{count($menus)}}','{{$roles->id}}')"><i class="fa fa-pencil m-r-5"></i> Edit Modul Akses</a>

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
        <!-- Add Roles Modal -->

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
        <!-- Edit Roles Modal -->

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

                                   <input type="checkbox"    class="c_view{{$menu->id}}" onClick="Akses_View('{{$roles->id}}','{{$menu->id}}',this)"  value="1"  />
                                   
                                   </td>
                                 
                                   <td>
                                   <input type="checkbox"   class="c_create{{$menu->id}}"  onClick="Akses_Create('{{$roles->id}}','{{$menu->id}}',this)" value="1"  />
                                   
                                   </td>
                                 
                                   <td>

                                   <input type="checkbox"   class="c_edit{{$menu->id}}"  onClick="Akses_Edit('{{$roles->id}}','{{$menu->id}}',this)" value="1" />
                                   
                                   </td>
                                 
                                   <td>

                                   <input type="checkbox"   class="c_delete{{$menu->id}}" onClick="Akses_Delete('{{$roles->id}}','{{$menu->id}}', this)" value="1"  />
                                   
                                   </td>

                                  
                                 
                                 
                                   
                                   
                                   
                                </tr>

                               
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                                  
                                        
                                        <input class="form-control" type="hidden" id="id"   name="id" value="{{ $roles->id}}">
                                    
                                </div>
                            
                               
                            
                     </div>
                          
                             
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Modul Modal -->

        @endforeach

       


        @foreach ($rolesPermissions as $roles )

        @php

        $datamenus = DB::table('menus as a')

        ->select('a.id','b.id as id_modul','a.namamenu','a.namaicons','a.categorymenu','a.sub_categorymenu','a.index_no','a.link_menu','b.role_id','b.view','b.create','b.edit','b.delete')

        ->leftJoin("module_permissions as b","b.module_permission","=","a.id")

        ->where("b.role_id", $roles->id)

        ->orderBy("a.sub_categorymenu",'ASC')

        ->get();

        @endphp
        <!-- Edit Modul Akses Modal -->

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
                                @foreach ($datamenus as $menu )

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

                                   <input type="checkbox"    class="c_view{{$menu->id}}" onClick="Update_View('{{$roles->id}}','{{$menu->id}}',this,'{{$menu->id_modul}}')"  value="1"  />
                                   
                                   </td>
                                 
                                   <td>
                                   <input type="checkbox"   class="c_create{{$menu->id}}"  onClick="Update_Create('{{$roles->id}}','{{$menu->id}}',this,'{{$menu->id_modul}}')" value="1"  />
                                   
                                   </td>
                                 
                                   <td>

                                   <input type="checkbox"   class="c_edit{{$menu->id}}"  onClick="Update_Edit('{{$roles->id}}','{{$menu->id}}',this,'{{$menu->id_modul}}')" value="1" />
                                   
                                   </td>
                                 
                                   <td>

                                   <input type="checkbox"   class="c_delete{{$menu->id}}" onClick="Update_Delete('{{$roles->id}}','{{$menu->id}}',this,'{{$menu->id_modul}}')" value="1"  />
                                   
                                   </td>

                                  
                                 
                                 
                                   
                                   
                                   
                                </tr>

                               
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                                  
                                        
                                        <input class="form-control" type="hidden" id="id"   name="id" value="{{ $roles->id}}">
                                    
                                </div>
                            
                               
                            
                     </div>
                          
                             
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Modul Modal -->

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

        //add modul akses----------------------------------------------------------------------------------------------------------


        function Akses_View(roleid,idmenu,cb){

      
        cb.value = cb.checked ? 1 : 0;


        console.log("cek view click:", cb.value );

        if( cb.value=='1'){

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
                view                  :  cb.value,
                create                : 0,
                edit                  : 0,
                delete                : 0
            },

            dataType: "json",
            success: function (response) {

                console.log("after saving:",response);
                console.log("after saving:",response.status);

                if(response.status==200){

                    toastr.success('Create new add modules successfully :)');
                    $('#add_modulakses'+roleid).modal('hide');
                    location.reload();
                }

                if(response.status==403){

                toastr.error('Failed Saving Data!Your Data Already Exist! :)');
                    $('#add_modulakses'+roleid).modal('hide');

                    }
                    location.reload();

            



            }

            });


         


        }else{

            toastr.error('Failed Saving Data!You can not click unclicked! :)');
                    $('#add_modulakses'+roleid).modal('hide');


        }


       


        }

        function Akses_Create(roleid,idmenu,cb){

        cb.value = cb.checked ? 1 : 0;

        if  (cb.value== '1'){

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
                create                : cb.value,
            
            },

            dataType: "json",
            success: function (response) {

        console.log("after saving:",response);

        if(response.status==200){

        toastr.success('Create new add modules successfully :)');
        $('#add_modulakses'+roleid).modal('hide');

        }

        if(response.status==403){

        toastr.error('Failed Saving Data!Your Data Already Exist! :)');
        $('#add_modulakses'+roleid).modal('hide');

        }


        }

        });


        }else{

            toastr.error('Failed Saving Data!You can not click unclicked! :)');
            $('#add_modulakses'+roleid).modal('hide');


        }

         
        }


        function Akses_Edit(roleid,idmenu,cb){

    
        cb.value = cb.checked ? 1 : 0;

                if  (cb.value== '1'){

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
                        edit                   : cb.value,
                       
                    },

                    dataType: "json",
                    success: function (response) {

                        console.log("after saving:",response);

                        if(response.status==200){

                            toastr.success('Create new edit modules successfully :)');
                            $('#add_modulakses'+roleid).modal('hide');
                            }

                            if(response.status==403){

                            toastr.error('Failed Saving Data!Your Data Already Exist! :)');
                            $('#add_modulakses'+roleid).modal('hide');

                            }


                    }

                    });

                }else{

                toastr.error('Failed Saving Data!You can not click unclicked! :)');
                $('#add_modulakses'+roleid).modal('hide');


                }


     


        }

        function Akses_Delete(roleid,idmenu){

            cb.value = cb.checked ? 1 : 0;

    if  (cb.value== '1'){

    
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
            delete                 : cb.value,
        
        },

        dataType: "json",
        success: function (response) {

            console.log("after saving:",response);

            if(response.status==200){

            toastr.success('Create new delete modules successfully :)');
            $('#add_modulakses'+roleid).modal('hide');
            }

            if(response.status==403){

            toastr.error('Failed Saving Data!Your Data Already Exist! :)');
            $('#add_modulakses'+roleid).modal('hide');

            }



        }

        });

         }else{

            
            toastr.error('Failed Saving Data!You can not click unclicked! :)');
            $('#add_modulakses'+roleid).modal('hide');


         }




        }

        //batas add modul akses -------------------------------------------------------------------------------------------

        //update view modul akses

        function Update_View(roleid,idmenu,cb,id_modul){

            cb.value = cb.checked ? 1 : 0;

            if(cb.value==1){

                $.ajax({

                    type: 'POST' ,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: `modulaccess/update`,
                    data: 
                    {
                        _token: "{{ csrf_token() }}",
                        idmodul                : id_modul,
                        role_id                : roleid,
                        module_permission      : idmenu,
                        view                   : cb.value,
                     
                        
                      
                    },

                    dataType: "json",
                    success: function (response) {

                        console.log("after saving:",response);

                    if(response.status==200){

                    toastr.success('Update View modules successfully :)');
                    $('#add_modulakses'+roleid).modal('hide');
                    }

                    if(response.status==403){

                    toastr.error('Failed Saving Data!Your Data Already Exist! :)');
                    $('#add_modulakses'+roleid).modal('hide');

                    }
                                        




                    }

                    });


                // console.log("lihat view:","berisi");



            }else{


                $.ajax({

                type: 'POST' ,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `modulaccess/update`,
                data: 
                {
                    _token: "{{ csrf_token() }}",
                    idmodul                : id_modul,
                    role_id                : roleid,
                    module_permission      : idmenu,
                    view                   : cb.value
                  
                 

            
                
                },

                dataType: "json",
                success: function (response) {

                    console.log("after saving:",response);

                    if(response.status==200){

                toastr.success('Update Create modules successfully :)');
                $('#add_modulakses'+roleid).modal('hide');
                }

                if(response.status==403){

                toastr.error('Failed Saving Data!Your Data Already Exist! :)');
                $('#add_modulakses'+roleid).modal('hide');

                }






                }

                });



               // console.log("lihat view:","kosong");

            }
          
           
           



        }




        //update modul akses




          //update create modul akses

          function Update_Create(roleid,idmenu,cb,id_modul){

                cb.value = cb.checked ? 1 : 0;

                if(cb.value==1){

                    $.ajax({

                        type: 'POST' ,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: `modulaccess/update`,
                        data: 
                        {
                            _token: "{{ csrf_token() }}",
                            idmodul                : id_modul,
                            role_id                : roleid,
                            module_permission      : idmenu,
                            create                 : cb.value,
                        
                            
                        
                        },

                        dataType: "json",
                        success: function (response) {

                            console.log("after saving:",response);

                            if(response.status==200){

                            toastr.success('Update Create modules successfully :)');
                            $('#add_modulakses'+roleid).modal('hide');
                            }

                            if(response.status==403){

                            toastr.error('Failed Saving Data!Your Data Already Exist! :)');
                            $('#add_modulakses'+roleid).modal('hide');

                            }
                        




                        }

                        });


                    // console.log("lihat view:","berisi");



                }else{


                    $.ajax({

                    type: 'POST' ,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: `modulaccess/update`,
                    data: 
                    {
                        _token: "{{ csrf_token() }}",
                        idmodul                : id_modul,
                        role_id                : roleid,
                        module_permission      : idmenu,
                        view                   : cb.value
                    
                    


                    
                    },

                    dataType: "json",
                    success: function (response) {

                        console.log("after saving:",response);

                        if(response.status==200){

                            toastr.success('Update Create modules successfully :)');
                            $('#add_modulakses'+roleid).modal('hide');
                            }

                            if(response.status==403){

                            toastr.error('Failed Saving Data!Your Data Already Exist! :)');
                            $('#add_modulakses'+roleid).modal('hide');

                            }







                    }

                    });



                // console.log("lihat view:","kosong");

                }






                }




                //update create modul akses



                //update edit modul akses

          function Update_Edit(roleid,idmenu,cb,id_modul){

            cb.value = cb.checked ? 1 : 0;

            if(cb.value==1){

                $.ajax({

                    type: 'POST' ,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: `modulaccess/update`,
                    data: 
                    {
                        _token: "{{ csrf_token() }}",
                        idmodul                : id_modul,
                        role_id                : roleid,
                        module_permission      : idmenu,
                        edit                   : cb.value,
                    
                        
                    
                    },

                    dataType: "json",
                    success: function (response) {

                        console.log("after saving:",response);
                        if(response.status==200){

                            toastr.success('Update Edit modules successfully :)');
                            $('#add_modulakses'+roleid).modal('hide');
                            }

                            if(response.status==403){

                            toastr.error('Failed Saving Data!Your Data Already Exist! :)');
                            $('#add_modulakses'+roleid).modal('hide');

                            }


                    




                    }

                    });


    // console.log("lihat view:","berisi");



            }else{


                $.ajax({

                type: 'POST' ,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `modulaccess/update`,
                data: 
                {
                    _token: "{{ csrf_token() }}",
                    idmodul                : id_modul,
                    role_id                : roleid,
                    module_permission      : idmenu,
                    edit                   : cb.value
                
                


                
                },

                dataType: "text",
                success: function (response) {

                    console.log("after saving:",response);

                    if(response.status==200){

                        toastr.success('Update Edit modules successfully :)');
                        $('#add_modulakses'+roleid).modal('hide');
                        }

                        if(response.status==403){

                        toastr.error('Failed Saving Data!Your Data Already Exist! :)');
                        $('#add_modulakses'+roleid).modal('hide');

                        }







                }

                });



                    // console.log("lihat view:","kosong");

                    }






                    }


            //update edit modul akses





                   //update delete modul akses

          function Update_Delete(roleid,idmenu,cb,id_modul){

                cb.value = cb.checked ? 1 : 0;

                if(cb.value==1){

                    $.ajax({

                        type: 'POST' ,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: `modulaccess/update`,
                        data: 
                        {
                            _token: "{{ csrf_token() }}",
                            idmodul                : id_modul,
                            role_id                : roleid,
                            module_permission      : idmenu,
                            delete                 : cb.value,
                    
                        },

                        dataType: "json",
                        success: function (response) {

                            console.log("after saving:",response);

                            if(response.status==200){

                                toastr.success('Update Delete modules successfully :)');
                                $('#add_modulakses'+roleid).modal('hide');
                                }

                                if(response.status==403){

                                toastr.error('Failed Saving Data!Your Data Already Exist! :)');
                                $('#add_modulakses'+roleid).modal('hide');

                                }


                        




                        }

                        });


                // console.log("lihat view:","berisi");



                }else{


                    $.ajax({

                    type: 'POST' ,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: `modulaccess/update`,
                    data: 
                    {
                        _token: "{{ csrf_token() }}",
                        idmodul                : id_modul,
                        role_id                : roleid,
                        module_permission      : idmenu,
                        delete                 : cb.value
                    
                    },

                    dataType: "text",
                    success: function (response) {

                        console.log("after saving:",response);

                        if(response.status==200){

                        toastr.success('Update Delete modules successfully :)');
                        $('#add_modulakses'+roleid).modal('hide');
                        }

                        if(response.status==403){

                        toastr.error('Failed Saving Data!Your Data Already Exist! :)');
                        $('#add_modulakses'+roleid).modal('hide');

                        }







                    }

                    });



                        // console.log("lihat view:","kosong");

                        }






                        }


        //update delete modul akses




        function GetDataAccess_Modul(total_id,roleid){

                url_source =`listaksesbyrole`;

                $.ajax({

                type: 'GET' ,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url_source,
                data:{

                    "role_id":roleid


                },
               

                dataType: "json",
                success: function (response) {

                    //console.log("after clicked:",response.data);

                  

                    for(var i=0;i <= response.data.length; i++){

                         var id_menu_array=response.data[i].id;
                         var view_array=response.data[i].view;
                         var create_array=response.data[i].create;
                         var edit_array=response.data[i].edit;
                         var delete_array=response.data[i].delete;
                        

        
                        $('.c_view'+id_menu_array+':input:checkbox').each(function() { this.checked = view_array; });
                        $('.c_create'+id_menu_array+':input:checkbox').each(function() { this.checked = create_array; });
                        $('.c_edit'+id_menu_array+':input:checkbox').each(function() { this.checked = edit_array; });
                        $('.c_delete'+id_menu_array+':input:checkbox').each(function() { this.checked = delete_array; });
        

                        console.log("c_view"+id_menu_array);
                        console.log("c_create"+id_menu_array);
                        console.log("c_edit"+id_menu_array);
                        console.log("c_delete"+id_menu_array);

                       

                     }

                }

                  






                

                });

            

        }



        function GetDataEditAccess_Modul(total_id,roleid){

                url_source =`listaksesbyrole`;

                $.ajax({

                type: 'GET' ,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url_source,
                data:{

                    "role_id":roleid


                },


                dataType: "json",
                success: function (response) {

                    //console.log("after clicked:",response.data);



                    for(var i=0;i <= response.data.length; i++){

                        var id_menu_array=response.data[i].id;
                        var view_array=response.data[i].view;
                        var create_array=response.data[i].create;
                        var edit_array=response.data[i].edit;
                        var delete_array=response.data[i].delete;
                        


                        $('.c_view'+id_menu_array+':input:checkbox').each(function() { this.checked = view_array; });
                        $('.c_create'+id_menu_array+':input:checkbox').each(function() { this.checked = create_array; });
                        $('.c_edit'+id_menu_array+':input:checkbox').each(function() { this.checked = edit_array; });
                        $('.c_delete'+id_menu_array+':input:checkbox').each(function() { this.checked = delete_array; });


                        console.log("c_view"+id_menu_array);
                        console.log("c_create"+id_menu_array);
                        console.log("c_edit"+id_menu_array);
                        console.log("c_delete"+id_menu_array);

                    

                    }

                }



                });


}



     







        //batas modul akses

    </script>


    @endsection
@endsection
