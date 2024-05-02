<?php

namespace App\Livewire\Admin;

use App\Models\ReportRequest;
use Livewire\Component;
use Livewire\WithPagination;

class ReportRequestList extends Component
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
    public function render()
    {
        $requests = $this->search($this->sortDirection, $this->search, $this->sortColumn, $this->perPage);
        return view('livewire.admin.report-request-list', compact('requests'));
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

    public function search(string $sortDirection, string $search, string $sortColumn, $perPage = 3)
    {
        return ReportRequest::search($search)
            ->orderBy($sortColumn, $sortDirection)
            ->paginate($perPage, ['*'], 'page');
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
}
