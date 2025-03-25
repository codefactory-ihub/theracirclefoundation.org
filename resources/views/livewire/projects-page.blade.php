<div class="projects-container">
    <div class="projects-header">
        <h1>Our Projects</h1>
        <p>Discover the initiatives that are making a difference in our community</p>
    </div>

    @if($projects->count() > 0)
        <div class="projects-grid">
            @foreach($projects as $project)
                <x-project-card
                    :name="$project['name']"
                    :date="$project['project_date']"
                    :image="$project->firstMedia?->public_url ?? 'https://kzmnz57ygqy8iwbi1yex.lite.vusercontent.net/placeholder.svg?height=300&width=400'"
                    :description="$project['description']"
                    :projectKey="$project['project_key']"
                />
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="pagination-links">
            {{ $projects->links("vendor.pagination.bootstrap-5") }}
        </div>
    @else
        <div class="no-projects-message">
            <div class="notification-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="16" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
                <p>We currently do not have any projects at the moment. Please check back later or consider volunteering to help us start new initiatives!</p>
            </div>
        </div>
    @endif
</div>