@extends('layouts.loginlayout')
@section('content')
<div class="container-fluid">
        <div class="row g-0 justify-content-center">
          <div class="col-xl-4 col-lg-5 col-md-7 col-sm-8" style="background: #fff;">
            <!-- Form -->
            <form class="row g-1 rounded-3 p-lg-5 p-4" method="POST"action="{{ url('login') }}">
            
                @csrf
              <div class="col-12">
                <div class="form-floating">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" name="email" value="{{ old('email') }}">
                  <label>Email address</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" name="password" id="password">
                  <label>Password</label>
                </div>
              </div>
              <div class="col-12 text-center mt-4 d-grid">
                <button type="submit" class="btn btn-lg bg-primary-gradient lift text-uppercase" title="">SIGN IN</button>
             </div>
            </form>
            <!-- End Form -->
          </div>
        </div> <!-- End Row -->
      </div>
@endsection
