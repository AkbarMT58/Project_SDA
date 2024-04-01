@extends('layouts.app')
@section('content')
    <div class="main-wrapper">

    <div class="row">

   

<div class="col-md-12">

<div class="mt-4 float-left mb-4"  >
            <a href="#"><img src="{{ URL::to('assets/images/logo_dsda.png') }}" width="200px"  ></a> 
    </div>

    <div class="mt-4 float-right mb-4"  >
            <a href="#"><img src="{{ URL::to('assets/images/eng.png') }}"  ></a> 
            <a href="#"><img src="{{ URL::to('assets/images/ina.png') }}"  ></a> 
        </div>

        <div class="account-content">
          
          <div class="container">
              <!-- Account Logo -->
            
              {{-- message --}}
              {!! Toastr::message() !!}
              <!-- /Account Logo -->
              <div class="account-box">

             
                  <div class="account-wrapper">
                <!-- 
                  <center>
              <div class="mb-4">
                  <a href="index.html"><img src="{{ URL::to('assets/images/logo_dsda.png') }}"></a>
              </div>
             </center> -->


                      <h3 class="account-title">Lupa Password</h3>
                      <p class="account-subtitle">Masukan email anda dan kirim link verifikasi.</p>
                      <!-- Account Form -->
                      <form method="POST" action="/forget-password">
                          @csrf
                          <div class="form-group">
                              <label>Alamat Email</label>
                              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email">
                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                          <div class="form-group text-center">
                              <button class="btn btn-primary account-btn" type="submit">KIRIM</button>
                          </div>
                          <div class="account-footer">
                              <p>Sudah memiliki akun ? <a href="{{ route('login') }}">Login</a></p>
                          </div>
                      </form>
                      <!-- /Account Form -->
                  </div>
              </div>
          </div>
      </div>


</div>

</div>
 
    </div>
@endsection
