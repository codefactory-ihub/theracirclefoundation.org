<?php

namespace App\View\Components;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectCard extends Component
{
    public string $name;
    public string $date;
    public string $image;
    public string $description;
    public string $projectKey;

    public function __construct(string $name, string $date, string $image, string $description, $projectKey)
    {
        $this->name = $name;
        $this->date = Carbon::parse($date)->format('F j, Y');
        $this->image = $image;
        $this->description = $description;
        $this->projectKey = $projectKey;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project-card');
    }
}
