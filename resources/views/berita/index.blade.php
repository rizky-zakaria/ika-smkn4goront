@extends('master/template')

@section('konten')
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col">
            <div class="row">

                <!-- Sales Card -->
                <div class="col-xxl-2 col-md-4">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Komentar <span>| Tahun Ini</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-chat-left-text"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>145</h6>
                                    <span class="text-success small pt-1 fw-bold">300</span> <span
                                        class="text-muted small pt-2 ps-1">Total</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-2 col-md-4">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Agenda <span>| Tahun Ini</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-calendar"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>5</h6>
                                    <span class="text-success small pt-1 fw-bold">8</span> <span
                                        class="text-muted small pt-2 ps-1">Total</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-4">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Alumni <span>| Tahun Ini</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>1244</h6>
                                    <span class="text-success small pt-1 fw-bold">12</span> <span
                                        class="text-muted small pt-2 ps-1">Total</span>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
