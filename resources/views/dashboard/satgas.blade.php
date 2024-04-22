@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <center>
                        <h3 class="page-title">Satgas Terbaik Bulan Ini</h3>
                       </center>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
          
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title"></h3>
                                    <!-- <div id="bar-charts"></div> -->
                                    <img src="{{ URL::to('/assets/images/employee_satgas.png') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title mb-4">Last Team /Tim Terakhir</h3>
                                    <br>
                                    <br>

                                    <div class="row" >

                                                <div class="col-md-6">

                                                <h6>ID JPLP</h6>
                                                <br>
                                                <br>

                                                <h5>0123456789</h5>


                                                </div>

                                                <div class="col-md-6">


                                                <div class="btn btn-warning" >

                                                <h6 style="color:white;" >JUMLAH PEKERJAAN</h6>

                                                <h1 style="color:white;">567</h1>




                                                </div>


                                    </div>

                                    <br>
                                    <br>
                                    <br>
                                    <br>

                                    <div >

                                    <div class="mb-2 ">1.Pekerjaan Mengerjakan Pengerukan</div>
                                    <div class="mb-2">2.Pekerjaan Mengerjakan Pengerukan</div>
                                    <div class="mb-2">3.Pekerjaan Mengerjakan Pengerukan</div>
                                    <div class="mb-2">4.Pekerjaan Mengerjakan Pengerukan</div>
                                    <div class="mb-2">5.Pekerjaan Mengerjakan Pengerukan</div>

                                    </div>


                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            {{-- message --}}
            {!! Toastr::message() !!}
            <!-- Statistics Widget -->
          
            <!-- /Statistics Widget -->
          
           
        </div>
        <!-- /Page Content -->
    </div>
@endsection