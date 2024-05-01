<?php

namespace App\Services;

use App\Models\Volunteer;

class VolunteerService
{
    public function create(array $data)
    {
        return Volunteer::create($data);
    }

    public function update(Volunteer $volunteer, array $data)
    {
        $volunteer->update($data);
        return $volunteer->saveOrFail();
    }

    public function delete(Volunteer $volunteer)
    {
        $volunteer->delete();
    }

    public function getAll()
    {
        return Volunteer::all();
    }

    public function getById(int $id)
    {
        return Volunteer::findOrFail($id);
    }

    public function getByKey(string $volunteerKey)
    {
        return Volunteer::where('volunteer_key', $volunteerKey)->firstOrFail();
    }

    public function updateById($id, array $data)
    {
        $volunteer = $this->getById($id);
        $volunteer->update($data);
        return $volunteer->saveOrFail();
    }

    public function deleteById($id)
    {
        $volunteer = $this->getById($id);
        $volunteer->delete();
    }

    public function deleteByKey(string $volunteerKey)
    {
        $volunteer = $this->getByKey($volunteerKey);
        $volunteer->delete();
    }


    public function acceptByKey($volunteerKey)
    {
        $volunteer = $this->getByKey($volunteerKey);
        $volunteer->update(['accepted' => true]);
        return $volunteer->saveOrFail();
    }

    public function rejectByKey($volunteerKey)
    {
        $volunteer = $this->getByKey($volunteerKey);
        $volunteer->update(['accepted' => false]);
        return $volunteer->saveOrFail();
    }

    public function paginate(int $perPage = 3)
    {
        return Volunteer::paginate($perPage);
    }

    public function search(string $sortDirection, string $search, string $sortColumn, $perPage = 3)
    {
        return Volunteer::search($search)
            ->orderBy($sortColumn, $sortDirection)
            ->paginate($perPage, ['*'], 'page');
    }
}
