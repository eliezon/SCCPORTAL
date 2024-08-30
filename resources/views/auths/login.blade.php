@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

<div class="container">
    <section class="section">
        <div class="row justify-content-center align-items-center"> <!-- align-items-center to center vertically -->



            <div class="row">
                <div class="left">
                    <h2><b>St. Cecilia's College Portal</b></h2>
                    <p>Your Gateway to Success</p>
                    <img src="{{ asset('img/schoolbg2.png') }}" class="bldg">
                </div>

             <!-- Right Side Column -->
                <div class="right">
                     
                        <div class="col-lg-5 col-md-7 d-flex flex-column justify-content-center"> 
                        
                            <div class="card mb-3 mx-0 mt-2">
                                <div class="card-header bg-danger text-white text-center">
                                <a href="../" class="logo d-flex align-items-center w-auto" tabindex="-1">
                                    <img src="{{ asset('img/SCC.png') }}" alt="St. Cecilia's College - Cebu, Inc. Logo" style="max-height: 50px; margin-right: 10px;">
                                    <span class="fw-bold text-uppercase">User Login</span>
                                </a>
                                    
                                </div>
                                @livewire('auth.login-form')
                            </div>
                        </div>

                    <p>©2024 •<span> Cecilian College Portal </span>• Alrights Reserved</p>
                </div>
             <!-- End of Right Side Column -->
              
            </div>



           

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
