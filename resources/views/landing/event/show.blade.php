@extends('layouts.app-landing')

@push('style')
    <style>
        .breadcrumb-item+.breadcrumb-item::before {
            content: '/';
            color: white;
        }
    </style>
@endpush

@section('content')
    <div class="post-index">

        <!-- main content -->
        <header class="border-bottom bg-light">
            <div class="container-fluid pt-md-1">
                <h1 class="bd-title mt-4 font-weight-bold">
                    <i class="fa fa-bell" aria-hidden="true"></i> AGENDA
                </h1>
                <p class="bd-lead">{{ $event->title }}</p>
            </div>
        </header>

        <!-- breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white" style="background-color: #6777EF">
                <li class="breadcrumb-item">
                    <a href="/" class="text-decoration-none text-white"><i class="fa fa-home"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/event" class="text-decoration-none text-white"><i class="fa fa-book-open"></i> Agenda
                    </a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    {{ $event->title }}
                </li>
            </ol>
        </nav>
        <!-- end breadcrumb -->

        <div class="container-fluid mt-5 mb-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <h3>{{ $event->title }}</h3>
                            <hr />
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td style="width:20%">LOKASI</td>
                                            <td>
                                                {{ $event->location }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TANGGAL</td>
                                            <td>
                                                {{ $event->date }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- agenda section -->
                    <div class="title mb-4">
                        <h4>
                            <i class="fa fa-calendar" aria-hidden="true"></i> AGENDA TERBARU
                        </h4>
                    </div>

                    <div v-if="events.length > 0">
                        @foreach ($events as $event)
                            <a href="{{ route('landing.event.show', $event->slug) }}"
                                class="text-decoration-none text-dark">
                                <div class="card mb-3 shadow-sm border-0">
                                    <div class="card-body">
                                        <h6>{{ $event->title }}</h6>
                                        <hr />
                                        <div>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            {{ $event->location }}
                                        </div>
                                        <div class="mt-2">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            {{ $event->date }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <!-- end agenda section -->
                </div>
            </div>
        </div>
        <!-- main content -->
    </div>
@endsection
