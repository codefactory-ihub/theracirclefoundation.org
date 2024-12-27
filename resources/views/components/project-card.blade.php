<div class="project-card">
    <div class="project-image" style="background-image: url('{{ $image }}');"></div>
    <div class="project-details">
        <h3>{{ $name }}</h3>
        <div class="project-date">{{ $date }}</div>
        <p class="truncate-text">{{ $description }}</p>
        <a wire:navigate href="{{ route('project-details', ['projectKey' => $projectKey]) }}" class="learn-more-button">Learn
            More</a>
    </div>
</div>
