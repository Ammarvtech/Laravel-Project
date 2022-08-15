@extends('layouts.app')
@section('content')
    <section class="w3l-main-slider position-relative" id="home">
        <div class="companies20-content">
            
        </div>
    </section>
    <!-- //banner-slider-->
    <!-- main-slider -->
    <!--grids-sec1-->
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-3">
                <div class="headerhny-title">
                    <div class="w3l-title-grids">
                        <div class="headerhny-left">
                            <h3 class="hny-title">Companies</h3>
                        </div>
                       
                    </div>
                </div>
                <div class="w3l-populohny-grids">
                    @foreach($companies as $company)
                    <div class="item vhny-grid">
                        <div class="box16">
                            <a href="{{ $company->website }}">
                                <figure>
                                    <img class="img-fluid" src="{{ asset('images/companies/' . $company->logo) }}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">{{ $company->name }}</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> {{ $company->email }}

                                        </span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                              
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--//grids-sec1-->

    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-3">
                <div class="headerhny-title">
                    <div class="w3l-title-grids">
                        <div class="headerhny-left">
                            <h3 class="hny-title">Employees</h3>
                        </div>
                       
                    </div>
                </div>
                <div class="w3l-populohny-grids">
                    @foreach($employees as $employee)
                    <div class="item vhny-grid">
                        <div class="box16">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{ asset('assets/images/employee.jpg') }}" alt="">
                                </figure>
                                <div class="box-content" style="color: black;">
                                    <h3 class="title">{{ $employee->first_name }} {{ $employee->last_name }}</h3>
                                    <h3 class="title">{{ $employee->company->name }}</h3>
                                    <h3 class="title">{{ $employee->email }}</h3>
                                    <h3 class="title">{{ $employee->phone }}</h3>

                                 
                                </div>

                              
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


@endsection