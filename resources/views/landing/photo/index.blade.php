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
                    <i class="fa fa-image" aria-hidden="true"></i> GALERI
                </h1>
                <p class="bd-lead">Galeri Foto terbaru tentang SMA Antariksa.</p>
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
                    <a href="/photo" class="text-decoration-none text-white"><i class="fa fa-image"></i> Gallery
                    </a>
                </li>
            </ol>
        </nav>
        <!-- end breadcrumb -->

        <div class="container-fluid mt-5 mb-5">
            <div class="row">
                @forelse ($photos as $photo)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0 rounded-lg">
                            <div class="card-img">
                                <img src="{{ Storage::url('public/photos/' . $photo->image) }}" class="w-100"
                                    style="height: 300px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;" />
                            </div>
                            <div class="card-body text-center">
                                <h6>{{ $photo->caption }}</h6>
                            </div>
                        </div>
                    </div>

                @empty
                    Data tidak ditemukan.
                @endforelse
            </div>

            <div class="mt-5 d-flex justify-content-center">
                {{ $photos->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
        <!-- main content -->
    </div>
@endsection
