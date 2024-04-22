<?php

namespace App\Livewire\Admin;

use App\Services\ProjectService;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectList extends Component
{
    use WithPagination;

    public $isModalOpen = false;
    public $isModalDelete = false;
    public $isUpdatePage = false;
    public $page = 1;
    public $perPage = 15;
    public $search = '';
    public $sortDirection = 'DESC';
    public $sortColumn = 'created_at';
    public $confirmDeleteId;
    // public $projects;
    public $columns = [
        ['label' => 'Media', 'column' => 'media', 'isData' => false, 'hasRelation' => true],
        ['label' => 'Name', 'column' => 'name', 'isData' => true, 'hasRelation' => false],
        ['label' => 'Status', 'column' => 'archived', 'isData' => true, 'hasRelation' => false],
        ['label' => 'Creator', 'column' => 'creator.name', 'isData' => true, 'hasRelation' => true],
        ['label' => 'Short Description', 'column' => 'short_description', 'isData' => true, 'hasRelation' => false],
        ['label' => 'Created At', 'column' => 'created_at', 'isData' => true, 'hasRelation' => false],
        ['label' => 'Project Key', 'column' => 'project_key', 'isData' => false, 'hasRelation' => false],
        ['label' => 'Action', 'column' => 'action', 'isData' => false, 'hasRelation' => false],
    ];


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
    public function doSort($column)
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
    public function updatingPage($page)
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

    public function customFormat($column, $data)
    {
        switch ($column) {
            case 'created_at':
                $parsedDate = \Carbon\Carbon::parse($data);
                return $parsedDate->diffForHumans();
            default:
                return $data;
        }
    }

    /**
     * Open the modal popover based on the provided ID.
     *
     * @param int|null $id
     * @return void
     */
    public function openModalPopover($id = null)
    {
        if ($id) {
            $this->confirmDeleteId = $id;
            $this->isModalDelete = true;
        } else {
            $this->isModalOpen = true;
        }
    }

    /**
     * Close the modal popover.
     *
     * @return void
     */
    public function closeModalPopover()
    {
        $this->isModalDelete = false;
        $this->isModalOpen = false;
        $this->resetCreateForm();
    }
}
