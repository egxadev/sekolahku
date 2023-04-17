@extends('layouts.app-landing')

@push('style')
    <style>
        .breadcrumb-item+.breadcrumb-item::before {
            content: '/';
            color: white;
        }

        .mapouter {
            position: relative;
            text-align: right;
            height: 100%;
            width: 100%;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: 100%;
            width: 100%;
        }
    </style>
@endpush

@section('content')
    <div class="post-index">

        <!-- main content -->
        <header class="border-bottom bg-light">
            <div class="container-fluid pt-md-1">
                <h1 class="bd-title mt-4 font-weight-bold">
                    <i class="fa fa-phone" aria-hidden="true"></i> Kontak
                </h1>
                <p class="bd-lead">Kontak SMA Antariksa.</p>
            </div>
        </header>

        <!-- breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white" style="background-color: #6777EF">
                <li class="breadcrumb-item">
                    <a href="/" class="text-decoration-none text-white"><i class="fa fa-home"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    <a href="/contact" class="text-decoration-none text-white"><i class="fa fa-phone"></i> Kontak
                    </a>
                </li>
            </ol>
        </nav>
        <!-- end breadcrumb -->

        <div class="container-fluid mt-5 mb-5">
            <div class="row">
                <div class="col-md-7">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=sma antartika&t=&z=14&ie=UTF8&iwloc=&output=embed"
                                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                        aria-hidden="false" tabindex="0" frameborder="0" marginheight="0" marginwidth="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <h3>KONTAK KAMI</h3>
                            <hr />
                            <p>
                                <i class="fas fa-envelope"></i> info@smaantariksa.sch.id <br>
                                <i class="fas fa-phone"></i> +62857-8585-2224 <br>
                                <i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Raya Siwalanpanji No.6, Siwalan
                                Panji, Siwalanpanji, Kec. Buduran, Kabupaten Sidoarjo, Jawa Timur 61252
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content -->
    </div>
@endsection
