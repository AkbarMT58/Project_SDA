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
              <!-- <div class="account-logo">
                  <a href="index.html"><img src="{{ URL::to('assets/images/551906403.png') }}" alt="SoengSouy"></a>
              </div> -->
              <!-- /Account Logo -->
              <div class="account-box">
                  <div class="account-wrapper">
                      <h3 class="account-title">Register</h3>
                      <p class="account-subtitle">Untuk Akses Ke Dashboard Anda </p>
                      
                      <!-- Account Form -->
                      <form method="POST" action="{{ route('register') }}">
                          @csrf
                          <div class="form-group">
                              <label>Username</label>
                              <input type="text" class="form-control @error('name') is-invalid @enderror" name="username" value="{{ old('name') }}" placeholder="Username">
                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label>Password</label>
                              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label>Repeat Password</label>
                              <input type="password" class="form-control" name="password_confirmation" placeholder="Choose Repeat Password">
                          </div>
                          <div class="form-group">
                              <label>Nama</label>
                              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap">
                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label>Email</label>
                              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label>No Telepon</label>
                              <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ old('no_telepon') }}" placeholder="No Telepon">
                              @error('no_telepon')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                          {{-- insert defaults --}}
                          <input type="hidden" class="image" name="image" value="photo_defaults.jpg">
                          <div class="form-group" hidden>
                              <label class="col-form-label">Role Name</label>
                              <select class="select @error('role_name') is-invalid @enderror" name="role_name" id="role_name">
                                  <option selected disabled>-- Select Role Name --</option>
                                  @foreach ($role as $name)
                                      <option value="{{ $name->role_type }}">{{ $name->role_type }}</option>
                                  @endforeach
                              </select>
                              @error('role_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>

                         
                          <div class="form-group text-center">
                              <button class="btn btn-primary account-btn" type="submit">Register</button>
                          </div>
                          <div class="account-footer">
                              <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
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
