<main>
    <!-- Breadcrumb Area S t a r t -->
    <section class="breadcrumb-section breadcrumb-bg-2">
        <div class="container">
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="{{ route('home') }}" class="single">Home</a>
                        </li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                                                                       class="single">Project Details</a></li>
                    </ul>
                </nav>
                <h1 class="title wow fadeInUp" data-wow-delay="0.1s">{{ $project['name'] }}</h1>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumb Area -->

    <div class="project-container">
        <div class="project-content">
{{--            <h1 class="project-title">{{ $project['name'] }}</h1>--}}
            <div class="project-date">{{ $project['date'] }}</div>

            @if ($activeMedia)
                <div class="media-container">
                    @if ($activeMedia['source'] === 'cloudinary')
                        @if (Str::startsWith($activeMedia['media_type'], 'image/'))
                            <div class="image-container">
                                <img src="{{ $activeMedia['public_url'] }}" alt="{{ $project['name'] }}"
                                     style="object-fit: cover; width: 100%; height: 100%;"/>
                            </div>
                        @elseif (Str::startsWith($activeMedia['media_type'], 'video/'))
                            <video controls class="media-video">
                                <source src="{{ $activeMedia['public_url'] }}" type="{{ $activeMedia['media_type'] }}"/>
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    @elseif ($activeMedia['source'] === 'youtube')
                        <iframe width="100%" height="400"
                                src="https://www.youtube.com/embed/{{ $activeMedia['public_id'] }}"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen style="border: none;"></iframe>
                    @endif
                </div>
            @endif

            <div class="thumbnail-container">
                @foreach ($media as $medium)
                    <div wire:click="setActiveMedia({{ $medium }})"
                         class="thumbnail {{ $medium['id'] === $activeMedia['id'] ? 'selected' : '' }}">
                        @if (Str::startsWith($medium['media_type'], 'image/'))
                            <img src="{{ $medium['public_url'] }}" alt="Thumbnail {{ $medium['id'] }}" width="80"
                                 height="80"/>
                        @else
                            <div class="thumbnail-text">
                                {{ $medium['source'] === 'youtube' ? 'YouTube' : 'Video' }}
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>

            <div class="project-description">
                <h2 class="project-description-title">Project Description</h2>
                <p>{{ $project['description'] }}</p>
            </div>

            <a wire:navigate href="{{route("donate")}}" class="support-button">
                Support This Project
            </a>
        </div>
    </div>
</main>
