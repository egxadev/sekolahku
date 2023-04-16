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
                    <i class="fa fa-book-open" aria-hidden="true"></i> BERITA
                </h1>
                <p class="bd-lead">Berita terbaru tentang SMK Indonesia.</p>
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
                    <a href="/post" class="text-decoration-none text-white"><i class="fa fa-book-open"></i> Berita
                    </a>
                </li>
            </ol>
        </nav>
        <!-- end breadcrumb -->

        <div class="container-fluid mt-5 mb-5">
            <div class="row">
                @forelse ($posts as $post)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm border-0 rounded-lg">
                            <div class="card-img">
                                <img src="{{ Storage::url('public/posts/' . $post->image) }}" class="w-100"
                                    style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;" />
                            </div>
                            <div class="card-body">
                                <a href="{{ route('landing.post.show', $post->slug) }}"
                                    class="text-dark text-decoration-none">
                                    <h6>{{ $post->title }}</h6>
                                </a>
                            </div>
                            <div class="card-footer bg-white">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                {{ $post->created_at }}
                            </div>
                        </div>
                    </div>

                @empty
                    Data tidak ditemukan.
                @endforelse
            </div>
            <div class="mt-5 d-flex justify-content-center">
                {{ $posts->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
        <!-- main content -->
    </div>
@endsection
