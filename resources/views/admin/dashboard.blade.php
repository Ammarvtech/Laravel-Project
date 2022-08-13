@extends('layouts.admin.app')
@section('content')
    <div class="content-wrapper">
        <div class="d-xl-flex justify-content-between align-items-start">
            <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="tab-content tab-transparent-content">
                    <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h1 class="mb-2 text-dark font-weight-normal">Companies</h1>
                                        <h2 class="mb-4 text-dark font-weight-bold">{{ $data['totalCompanies'] }}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h1 class="mb-2 text-dark font-weight-normal">Employees</h1>
                                        <h2 class="mb-4 text-dark font-weight-bold">{{ $data['totalEmployees'] }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
