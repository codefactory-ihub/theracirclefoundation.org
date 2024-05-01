<?php

namespace App\Livewire\Admin;

use App\Services\VolunteerService;
use Livewire\Component;
use Livewire\WithPagination;

class VolunteerList extends Component
{
    use WithPagination;

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

    public function render(VolunteerService $volunteerService)
    {
        $volunteers = $volunteerService->search($this->sortDirection, $this->search, $this->sortColumn, $this->perPage);
        return view('livewire.admin.volunteer-list', compact('volunteers'));
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

    public function acceptVolunteer(string $volunteerKey, VolunteerService $volunteerService)
    {
        $volunteerService->acceptByKey($volunteerKey);
        $this->resetPage();

        $this->dispatch('notification', "Volunteer has been accepted", "Action successful", "success");
    }
    public function rejectVolunteer(string $volunteerKey, VolunteerService $volunteerService)
    {
        $volunteerService->rejectByKey($volunteerKey);
        $this->resetPage();

        $this->dispatch('notification', "Volunteer has been rejected", "Action successful", "info");
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
}
