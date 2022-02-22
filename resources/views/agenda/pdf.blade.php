<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

<body background="{{ asset('img/smk4.png') }}"
    style="background-repeat: no-repeat; opacity: 0.1; background-position: center">
    <section class="section">
        <center>
        <table>
            <tr>
                <td>
                    <center>
                        @php
                        $imageData = base64_encode('img/smk4.png');
                        $src = 'data:' . 'img/smk4.png;base64, img/smk4.png';
                        @endphp
                        <img src="{{ asset('img/' . $src) }}" alt="" class="img-thumbnail">
                        {{-- <img src="{{ asset('img/smk4.png') }}" alt="" width="100"> --}}
                    </center>
                </td>
                <td>
                    SMK NEGERI 4 GORONTALO
                </td>
            </tr>
            <tr>
                <td>aa</td>
                <td>aa</td>
            </tr><tr>
                <td>aa</td>
                <td>aa</td>
            </tr>
        </table>
        </center>
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
