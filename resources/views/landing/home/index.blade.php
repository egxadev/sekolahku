@extends('layouts.app-landing')

@section('content')
    <div class="home">
        <!-- slider -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($sliders as $key => $slider)
                    <div class="carousel-item {{ $key == 1 ? 'active' : '' }}">
                        <img src="{{ Storage::url('public/sliders/' . $slider->image) }}" class="w-100" alt="gambar"
                            style="height:600px;object-fit:cover" />
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
        <!-- end slider -->

        <!-- main content -->
        <div class="container-fluid mt-3 mb-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <!-- berita section -->
                        <div class="col-md-12 mb-3">
                            <h4>
                                <i class="fas fa-book-open"></i> BERITA TERBARU
                            </h4>
                        </div>

                        <div class="col">
                            <div class="row">
                                @foreach ($posts as $post)
                                    <div class="col-md-4 mb-4">
                                        <div class="card  shadow-sm border-0 rounded-lg">
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
                                                {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- end berita section -->

                        <!-- foto section -->
                        <div class="col-md-12 mb-3 mt-4">
                            <h4><i class="fas fa-images"></i> FOTO TERBARU</h4>
                        </div>
                        <div class="col">
                            <div class="row">
                                @foreach ($photos as $photo)
                                    <div class="col-md-6 mb-4">
                                        <div class="card h-100 shadow-sm border-0 rounded-lg">
                                            <div class="card-img">
                                                <img src="{{ Storage::url('public/photos/' . $photo->image) }}"
                                                    class="w-100"
                                                    style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;" />
                                            </div>
                                            <div class="card-body text-center">
                                                <h6>{{ $photo->caption }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- end foto section -->

                        <!-- video section -->
                        <div class="col-md-12 mb-3 mt-4">
                            <h4><i class="fas fa-video"></i> VIDEO TERBARU</h4>
                        </div>
                        <div class="col">
                            <div class="row">
                                @foreach ($videos as $video)
                                    <div class="col-md-6 mb-4">
                                        <div class="card  shadow-sm border-0 rounded-lg">
                                            <div class="card-img">
                                                <iframe
                                                    style="width:100%;height:200px;border-top-left-radius:.3rem;border-top-right-radius:.3rem"
                                                    src="{{ $video->embed }}" frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            </div>
                                            <div class="card-body text-center">
                                                <h6>{{ $video->title }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- end video section -->
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- agenda section -->
                    <div class="title mb-4">
                        <h4>
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            AGENDA TERBARU
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
                            <i class="fa fa-folder" aria-hidden="true"></i>
                            KATEGORI BERITA
                        </h4>
                    </div>

                    <div>
                        <div class="list-group">
                            @foreach ($categories as $category)
                                <a href="{{ route('landing.category.show', $category->slug) }}"
                                    class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded">
                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                    {{ $category->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <!-- end kategori section -->
                </div>
            </div>
        </div>
        <!-- end main content -->
    </div>
@endsection
