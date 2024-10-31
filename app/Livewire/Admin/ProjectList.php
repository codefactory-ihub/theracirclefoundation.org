<?php

namespace App\Livewire\Admin;


use App\Services\ProjectService;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectList extends Component
{
    use WithPagination;

    public $deleting = '';
    public $page = 1;
    public $perPage = 15;
    public $search = '';
    public $sortDirection = 'DESC';
    public $sortColumn = 'created_at';


    public function mount()
    {
        if (session()->has('page'))
            $this->page = session('page');
    }

    public function render(ProjectService $projectService)
    {
        $projects = $projectService->search($this->sortDirection, $this->search, $this->sortColumn, $this->perPage);
        return view('livewire.admin.project-list', compact('projects'));
    }

    /**
     * Toggle sort direction when column header is clicked.
     *
     * @param string $column
     * @return void
     */
    public function doSort(string $column)
    {
        if ($this->sortColumn === $column) {
            $this->sortDirection = ($this->sortDirection === 'ASC') ? 'DESC' : 'ASC';
            return;
        }
        $this->sortColumn = $column;
        $this->sortDirection = 'ASC';
    }

    /**
     * Store the current page when updating.
     *
     * @param int $page
     * @return void
     */
    public function updatingPage(int $page)
    {
        $this->page = $page ?: 1;
    }

    /**
     * Save the current page to the session.
     *
     * @return void
     */
    public function updatedPage()
    {
        session(['page' => $this->page]);
    }

    public function deleteProject(string $projectKey, ProjectService $projectService)
    {
        if ($this->deleting == '') {
            $this->deleting = $projectKey;
            $projectService->delete($projectKey);
            $this->deleting = '';
        }
    }
}
