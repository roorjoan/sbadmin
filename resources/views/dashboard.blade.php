@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Dashboard</h3>
    </div>

    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Earnings
                                    (monthly)</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span>$40,000</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-success py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Earnings (annual)</span>
                            </div>
                            <div class="text-dark fw-bold h5 mb-0"><span>$215,000</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-info py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Tasks</span></div>
                            <div class="row g-0 align-items-center">
                                <div class="col-auto">
                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span>50%</span></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">50%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-warning py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>Pending Requests</span>
                            </div>
                            <div class="text-dark fw-bold h5 mb-0"><span>18</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!--Grafica de barras-->
        <div class="col-md-7 mb-4">
            <div class="card">
                <div class="card-body">
                    {!! $chart->renderHtml() !!}
                </div>
            </div>
        </div>

        <!--Grafica de pastel-->
        <div class="col-md-5 mb-4">
            <div class="card">
                <div class="card-body">
                    {!! $chart1->renderHtml() !!}
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="text-primary fw-bold m-0">Data storaged</h6>
                </div>
                <div class="card-body">
                    <h4 class="small fw-bold">Users<span class="float-end">60%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                            style="width: 60%;"><span class="visually-hidden">60%</span></div>
                    </div>
                    <h4 class="small fw-bold">Employees<span class="float-end">80%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                            style="width: 80%;"><span class="visually-hidden">80%</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!--boxes-->
        <div class="col">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card textwhite bg-success text-white shadow">
                        <div class="card-body">
                            <p class="">Server INFO!</p>
                            <p class="small"><strong>Welcome to SB Admin.</strong></p>
                        </div>
                    </div>
                </div>
                <!--
                                                                        <div class="col-lg-6 mb-4">
                                                                            <div class="card textwhite bg-primary text-white shadow">
                                                                                <div class="card-body">
                                                                                    <p class="m-0">Primary</p>
                                                                                    <p class="text-white-50 small m-0">#4e73df</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 mb-4">
                                                                            <div class="card textwhite bg-success text-white shadow">
                                                                                <div class="card-body">
                                                                                    <p class="m-0">Success</p>
                                                                                    <p class="text-white-50 small m-0">#1cc88a</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6 mb-4">
                                                                            <div class="card textwhite bg-info text-white shadow">
                                                                                <div class="card-body">
                                                                                    <p class="m-0">Info</p>
                                                                                    <p class="text-white-50 small m-0">#36b9cc</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 mb-4">
                                                                            <div class="card textwhite bg-warning text-white shadow">
                                                                                <div class="card-body">
                                                                                    <p class="m-0">Warning</p>
                                                                                    <p class="text-white-50 small m-0">#f6c23e</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6 mb-4">
                                                                            <div class="card textwhite bg-secondary text-white shadow">
                                                                                <div class="card-body">
                                                                                    <p class="m-0">Secondary</p>
                                                                                    <p class="text-white-50 small m-0">#858796</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>-->
            </div>
        </div>
    </div>
@endsection
<script></script>

@section('scripts')
    {!! $chart->renderJs() !!}
    {!! $chart1->renderJs() !!}
@endsection
