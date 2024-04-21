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
                        <h3 class="page-title">Menu</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Menu</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Menu</a>
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
                            <label class="focus-label">Parent</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">  
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">Child</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3"> 
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">Sub Child</label>
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
                                    <th>Nama Menu</th>
                                    <th>Kat. Menu</th>
                                    <th>Sub Kat. Menu</th>
                                    <th>Child Kat. Menu</th>
                                    <th>Link Menu</th>
                                    <!-- <th>Index No</th>  -->
                                    <th>Nama Class Icon</th>
                                    <th class="text-right no-sort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menus as $menu )
                                <tr>
                                    <td>
                                    {{ $menu->id}}
                                    </td>
    
                                    <td>{{ $menu->namamenu }}</td>
                                    <td>{{ $menu->categorymenu }}</td>
                                    <td>{{ $menu->sub_categorymenu }}</td>
                                    <td>{{ $menu->sub_childcategorymenu }}</td>
                                    <td>{{ $menu->link_menu }}</td>
                                    <!-- <td>{{ $menu->index_no }}</td> -->
                                    <td>{{ $menu->namaicons }}</td>
                                  
                       
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" data-toggle="modal" data-target="#edit_menus{{$menu->id}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="{{url('menus/delete/'.$menu->id)}}"  onclick="return confirm('Apakah anda ingin menghapus ini?')"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
      
        <!-- Add Menu Modal -->
        <div id="add_employee" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Menu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="m-4">
                        <Label>Kategori Menu :</Label>
                        <br>
                        <td >               1. Parent Menu</td>
                        <br>
                        <td >               2. Child Menu</td>
                        <br>
                        <td >               3. Sub Child Menu</td>

                    </div>
                    <div class="modal-body">
                        <form action="{{ route('menus/save') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Nama Menu</label>
                                        <input class="form-control" type="text" name="namamenu">
                                       
                                    </div>
                                </div>
                            
                                <div class="col-sm-6" >

                                <div class="form-group">
                                        <label class="col-form-label">Category ID</label>
                                        <input class="form-control" type="number" name="namacategory" >
                                       
                                </div>
                               
                                   
                                </div>
                                <div class="col-md-6" >

                                <div class="form-group">
                                        <label class="col-form-label">Sub Category Menu</label>
                                        <input class="form-control" type="number" name="subcategorymenu" >
                                       
                                </div>

                                <div class="form-group">
                                        <label class="col-form-label">Sub Child Category Menu</label>
                                        <input class="form-control" type="number" name="subchildcategorymenu" >
                                       
                                </div>

                                
                               
                                   
                                </div>
                                <div class="col-md-6">

                                <div class="form-group">
                                        <label class="col-form-label">Link Menu</label>
                                        <input class="form-control" type="text" name="linkmenu" >
                                       
                                </div>
                               
                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                        <label class="col-form-label">Index No</label>
                                        <input class="form-control" type="number" name="indexno" >
                                       
                                </div>
                                    
                                </div>
                                <div class="col-sm-6">  

                                <div class="form-group">
                                        <label class="col-form-label">Nama Class Icon</label>
                                        <input class="form-control" type="text" name="namaclassicon" >
                                       
                                </div>
                                    
                                </div>
                                <div class="col-sm-6">
                                  
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
        <!-- /Add Menu Modal -->


        @foreach ($menus as $menu )

          <!-- Add Edit Menu Modal -->
          <div id="edit_menus{{$menu->id}}" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Menu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="m-4">
                        <Label>Kategori Menu :</Label>
                        <br>
                        <td >               1. Parent Menu</td>
                        <br>
                        <td >               2. Child Menu</td>
                        <br>
                        <td >               3. Sub Child Menu</td>

                    </div>
                    <div class="modal-body">
                        <form action="{{ route('menus/update') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Nama Menu</label>

                                        <input class="form-control" type="hidden" name="id" value="{{$menu->id}}" >
                                       
                                        <input class="form-control" type="text" name="namamenu" value="{{$menu->namamenu}}">
                                       
                                    </div>
                                </div>
                            
                                <div class="col-sm-6" >

                                <div class="form-group">
                                        <label class="col-form-label">Category ID</label>
                                        <input class="form-control" type="number" name="namacategory" value="{{$menu->categorymenu}}"  >
                                       
                                </div>
                               
                                   
                                </div>
                                <div class="col-sm-6" >

                                <div class="form-group">
                                        <label class="col-form-label">Sub Category Menu</label>
                                        <input class="form-control" type="number" name="subcategorymenu" value="{{$menu->sub_categorymenu}}" >
                                    
                                </div>

                                <div class="form-group">
                                        <label class="col-form-label">Sub Child Category Menu</label>
                                        <input class="form-control" type="number" name="subchildcategorymenu" value="{{$menu->sub_childcategorymenu}}" >
                                       
                                </div>


                                
                                </div>
                                <div class="col-md-6">

                                <div class="form-group">
                                        <label class="col-form-label">Link Menu</label>
                                        <input class="form-control" type="text" name="linkmenu" value="{{$menu->link_menu}}" >
                                       
                                </div>
                               
                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                        <label class="col-form-label">Index No</label>
                                        <input class="form-control" type="number" name="indexno"  value="{{$menu->index_no}}">
                                       
                                </div>
                                    
                                </div>
                                <div class="col-sm-6">  

                                <div class="form-group">
                                        <label class="col-form-label">Nama Class Icon</label>
                                        <input class="form-control" type="text" name="namaclassicon" value="{{$menu->namaicons}}"  >
                                       
                                </div>
                                    
                                </div>
                                <div class="col-sm-6">
                                  
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
        <!-- /Add Edit Menu Modal -->




        <!-- Modal Delete  -->



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
