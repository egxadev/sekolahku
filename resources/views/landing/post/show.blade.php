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
                    <i class="fa fa-book-open" aria-hidden="true"></i> BERITA
                </h1>
                <p class="bd-lead">{{ $post->title }}</p>
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
                    <a href="/post" class="text-decoration-none text-white"><i class="fa fa-book-open"></i> Berita
                    </a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    {{ $post->title }}
                </li>
            </ol>
        </nav>
        <!-- end breadcrumb -->

        <div class="container-fluid mt-5 mb-5">
            <div class="row">
                <div class="col-md-8">
                    <div>
                        <div class="card border-0 shadow-sm rounded">
                            <div class="card-body">
                                <h3>{{ $post->title }}</h3>
                                <p>{{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('l, d M Y H:i') . ' WIB' }}
                                </p>
                                <hr />
                                <img src="{{ Storage::url('public/posts/' . $post->image) }}" class="w-100 rounded" />

                                {!! $post->content !!}
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

                    <div>
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

                    <!-- kategori section -->
                    <div class="title mb-4 mt-5">
                        <h4>
                            <i class="fa fa-folder" aria-hidden="true"></i> KATEGORI BERITA
                        </h4>
                    </div>

                    <div>
                        <div class="list-group">
                            @foreach ($categories as $category)
                                <a href="{{ route('landing.category.show', $category->slug) }}"
                                    class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded"><i
                                        class="fa fa-folder-open" aria-hidden="true"></i>
                                    {{ $category->name }}</a>
                            @endforeach

                        </div>
                    </div>
                    <!-- end kategori section -->
                </div>
            </div>
        </div>
        <!-- main content -->
    </div>
@endsection
