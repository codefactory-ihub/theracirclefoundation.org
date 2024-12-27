<div class="projects-container">
    <div class="projects-header">
        <h1>Our Projects</h1>
        <p>Discover the initiatives that are making a difference in our community</p>
    </div>

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
</div>
