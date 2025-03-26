<main>
    <!-- Breadcrumb Area S t a r t -->
    <section class="breadcrumb-section breadcrumb-bg-2">
        <div class="container">
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="{{ route('home') }}" class="single">Home</a>
                        </li>
                        <li class="breadcrumb-item single-list"><a href="{{ route('projects') }}" class="single">Project List</a>
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
          <h1 class="project-title">{{ $project['name'] }}</h1>
            <div class="project-date">{{ $project['date'] }}</div>

            <div class="media-container">
                <!-- This will be populated by JavaScript -->
                @if (count($media) > 0)
                    @if ($media[0]['source'] === 'cloudinary')
                        @if (Str::startsWith($media[0]['media_type'], 'image/'))
                            <div class="image-container" id="active-media-container">
                                <img src="{{ $media[0]['public_url'] }}" alt="{{ $project['name'] }}"
                                     style="object-fit: cover; width: 100%; height: 100%;"/>
                            </div>
                        @elseif (Str::startsWith($media[0]['media_type'], 'video/'))
                            <video controls class="media-video" id="active-media-container">
                                <source src="{{ $media[0]['public_url'] }}" type="{{ $media[0]['media_type'] }}"/>
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    @elseif ($media[0]['source'] === 'youtube')
                        <iframe width="100%" height="400" id="active-media-container"
                                src="https://www.youtube.com/embed/{{ $media[0]['public_id'] }}"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen style="border: none;"></iframe>
                    @endif
                @endif
            </div>

            <div class="thumbnail-container">
                @foreach ($media as $index => $medium)
                    <div class="thumbnail {{ $index === 0 ? 'selected' : '' }}" 
                         data-media-id="{{ $medium['id'] }}"
                         data-source="{{ $medium['source'] }}"
                         data-media-type="{{ $medium['media_type'] }}"
                         data-public-url="{{ $medium['public_url'] }}"
                         data-public-id="{{ $medium['public_id'] ?? '' }}"
                         onclick="changeActiveMedia(this)">
                        @if (Str::startsWith($medium['media_type'], 'image/'))
                            <img src="{{ $medium['public_url'] }}" alt="Thumbnail {{ $medium['id'] }}" width="80" height="80"/>
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

            <a wire:navigate href="{{route('donate')}}" class="support-button">
                Support This Project
            </a>
        </div>
    </div>

    <script>
        // Convert PHP media array to JavaScript
        const mediaArray = @json($media);
        
        function changeActiveMedia(thumbnailElement) {
            // Remove selected class from all thumbnails
            document.querySelectorAll('.thumbnail').forEach(el => {
                el.classList.remove('selected');
            });
            
            // Add selected class to clicked thumbnail
            thumbnailElement.classList.add('selected');
            
            // Get media data from data attributes
            const source = thumbnailElement.dataset.source;
            const mediaType = thumbnailElement.dataset.mediaType;
            const publicUrl = thumbnailElement.dataset.publicUrl;
            const publicId = thumbnailElement.dataset.publicId;
            
            // Get the container
            const mediaContainer = document.getElementById('active-media-container');
            
            // Clear existing content
            mediaContainer.innerHTML = '';
            
            // Create new media element based on type
            if (source === 'cloudinary') {
                if (mediaType.startsWith('image/')) {
                    mediaContainer.innerHTML = `
                        <img src="${publicUrl}" alt="Project Media" 
                             style="object-fit: cover; width: 100%; height: 100%;"/>
                    `;
                } else if (mediaType.startsWith('video/')) {
                    mediaContainer.innerHTML = `
                        <video controls class="media-video">
                            <source src="${publicUrl}" type="${mediaType}"/>
                            Your browser does not support the video tag.
                        </video>
                    `;
                }
            } else if (source === 'youtube') {
                mediaContainer.innerHTML = `
                    <iframe width="100%" height="400"
                            src="https://www.youtube.com/embed/${publicId}"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen style="border: none;"></iframe>
                `;
            }
        }
    </script>
</main>