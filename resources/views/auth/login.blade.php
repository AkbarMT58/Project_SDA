@extends('layouts.app')
@section('content')

    <div class="main-wrapper">

    <div class="row">

    <!-- <div class="col-md-3">

    
    <div class="mt-4"  >
            <a href="#"><img src="{{ URL::to('assets/images/logo_dsda.png') }}" width="200px"  ></a> 
        </div>


    </div> -->

    <div class="col-md-12">

    <div class="mt-4 float-left"  >
            <a href="#"><img src="{{ URL::to('assets/images/logo_dsda.png') }}" width="200px"  ></a> 
    </div>

    <div class="mt-4 float-right"  >
            <a href="#"><img src="{{ URL::to('assets/images/eng.png') }}"  ></a> 
            <a href="#"><img src="{{ URL::to('assets/images/ina.png') }}"  ></a> 
        </div>

    
    <div class="account-content">
           
           <div class="container" style="margin-top:150px;" >
               <!-- Account Logo -->
              
               {{-- message --}}
               {!! Toastr::message() !!}
               <!-- /Account Logo -->
               <div class="account-box">
                   <div class="account-wrapper">
                   <p class="account-subtitle">Selamat Datang Di</p>
                   <center>
                   <h2> Website e-Monik &  Monitoring Satgas</h2>

                   <div class="mb-4">
                            <a href="index.html"><img src="{{ URL::to('assets/images/logologin.png') }}"   ></a> 
                   </div>

                  </center>

                  
                      
                     
                       <!-- Account Form -->
                       <form   method="POST" name='myform' action="{{ route('login') }}">
                           @csrf


                           <div class="input-group input-group-unstyled mb-4">
                           <input type="text" style="position:relative;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
                               <span class="input-group-addon" style="position:absolute; right:8px;top:8px;">
                                   <i class="fa fa-user" id="usericons" ></i>
                               </span>
                               @error('email')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>

                           <div class="input-group input-group-unstyled mb-4">
                           <input type="password" style="position:relative;" class="form-control @error('password') is-invalid @enderror" autocomplete="current-password" id="id_password" name="password" placeholder="Password">
                             
                               <span class="input-group-addon" style="position:absolute; right:8px;top:8px;">
                                   <i id="togglePassword" class="fa fa-eye"></i>
                               </span>
                               @error('password')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>

                         

                          
                           <div class="form-group">
                               <div class="row">
                                   <div class="col">
                                       <label></label>
                                   </div>
                                   <div class="col-auto">
                                       <a class="text-muted" href="{{ route('forget-password') }}">
                                           Lupa password?
                                       </a>
                                   </div>
                               </div>
                           </div>

                   <!-- <div class="wrapper">
           
                        <div class="captcha-area">
                            <div class="captcha-img">
                            
                                <span class="captcha"></span>
                            </div>
                            <button class="reload-btn"><i class="fa fa-refresh"></i></button>
                        </div>
                                
                                <input type="text" id="input_code" placeholder="Enter captcha" class="form-control" maxlength="6" spellcheck="false" required>
                            
                                <div class="status-text"></div>
                   </div> -->

                   <div class="row">

                    <div class="col-md-4">
                    <input type="text" id="input_code" placeholder="Enter captcha"  class="form-control" maxlength="6" spellcheck="false" required>
                            
                   </div>
                   <div class="col-md-8">

                   <div class="wrapper">
           
                   <div class="captcha-area">
                            <div class="captcha-img">
                            
                                <span class="captcha"></span>
                            </div>
                            <button class="reload-btn"><i class="fa fa-refresh"></i></button>
                        </div>
                                
                             
                                
                   </div>


                   </div>
                 

            </div>

            <center>
                   
                   <div class="status-text mb-4"></div>

                   </center>
               

                        
                           <div class="form-group text-center"><button class="btn btn-primary account-btn check-btn" type="submit"  >Login</button>
                           </div>
                           <!-- </form> -->
                           <div class="account-footer">
                               <p>Belum Punya Akun ? <a href="{{ route('register') }}">Register</a></p>
                           </div>
                       </form>
                       <!-- /Account Form -->
                   </div>
               </div>
           </div>
       </div>

    </div>

    <!-- <div class="col-md-3">

    <div class="mt-4 float-right"  >
            <a href="#"><img src="{{ URL::to('assets/images/eng.png') }}"  ></a> 
            <a href="#"><img src="{{ URL::to('assets/images/ina.png') }}"  ></a> 
        </div>


   </div> -->






</div>
    </div>
@endsection


