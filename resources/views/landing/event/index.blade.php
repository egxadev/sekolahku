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
            <div class="container-fluid pt-md-1 pb-md-1">
                <h1 class="bd-title mt-4 font-weight-bold">
                    <i class="fa fa-bell" aria-hidden="true"></i> AGENDA
                </h1>
                <p class="bd-lead">Agenda terbaru tentang SMK Indonesia.</p>
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
                    <a href="/event" class="text-decoration-none text-white"><i class="fa fa-bell" aria-hidden="true"></i>
                        Agenda
                    </a>
                </li>
            </ol>
        </nav>
        <!-- end breadcrumb -->

        <div class="container-fluid mt-5 mb-5">
            <div class="row">
                @forelse ($events as $event)
                    <div class="col-md-6 mb-3">
                        <a href="{{ route('landing.event.show', $event->slug) }}" class="text-decoration-none text-dark">
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
                    </div>

                @empty
                    Data tidak ditemukan.
                @endforelse
            </div>

            <div class="mt-5 d-flex justify-content-center">
                {{ $events->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
        <!-- main content -->
    </div>
@endsection
