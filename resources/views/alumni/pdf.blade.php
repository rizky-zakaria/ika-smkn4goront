<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicons -->
    <link href="{{ asset('vendor/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('vendor/assets/img/apple-touch-icon.png" rel="apple-touch-icon') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('vendor/assets/css/style.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body background="{{ asset('img/smk4.png') }}" style="background-repeat: no-repeat; opacity: 0.1; background-position: center">
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Profil {{ $alumni->nama }}</h5>

                    <div class="row">
                        <div class="col-sm-2">
                            <img src="{{ asset('img/' . $alumni->foto) }}" width="150" class="img-thumbnail">
                        </div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-2">
                                    Nama :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->nama }}</b><br>
                                </div>
                                <div class="col-sm-2">
                                    Tanggal Lahir :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->tgl_lahir }}</b>
                                </div>
                                <div class="col-sm-2">
                                    Tempat Lahir :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->tempat_lahir }}</b>
                                </div>
                                <div class="col-sm-2">
                                    Alamat :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->alamat }}</b>
                                </div>
                                <div class="col-sm-2">
                                    Agama :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->agama }}</b>
                                </div>
                                <div class="col-sm-2">
                                    Jenis Kelamin :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->jk }}</b>
                                </div>
                                <div class="col-sm-2">
                                    Pekerjaan :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->pekerjaan }}</b>
                                </div>
                                <div class="col-sm-2">
                                    Ponsel :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->nomor_hp }}</b>
                                </div>
                                <div class="col-sm-2">
                                    Tahun Lulus :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->thn_angkatan }}</b>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Vendor JS Files -->
<script src="{{ asset('vendor/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('vendor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/assets/vendor/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('vendor/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('vendor/assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('vendor/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('vendor/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('vendor/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('vendor/assets/js/main.js') }}"></script>
</body>
</html>
