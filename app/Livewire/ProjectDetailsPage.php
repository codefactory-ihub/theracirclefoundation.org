<?php

namespace App\Livewire;

use App\Models\ProjectsMedia;
use App\Services\ProjectService;
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class ProjectDetailsPage extends Component
{
    public ProjectsMedia $activeMedia;
    public array $media;
    public Model $project;
    public string $projectKey;

    #[Layout('layouts.landing')]
    #[Title("Project Details")]
    public function render(ProjectService $projectService)
    {
        $this->project = $projectService->getProjectByProjectkey($this->projectKey);
        $this->setActiveMedia($this->project?->media[0]);

        return view('livewire.project-details-page');
    }

    public function setActiveMedia($media)
    {
        // Update the active media
        $this->activeMedia = $media;

        // Filter out the active media from the media array
        $media = $this->project->media->filter(function ($item) {
            return $item['id'] !== $this->activeMedia['id'];
        })->values()->toArray();

        // Reindex the array to avoid gaps in the array indices
        $this->media = array_values($media);
    }

}
