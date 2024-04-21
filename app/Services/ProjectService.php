<?php

namespace App\Services;

use App\Models\Project;

class ProjectService
{
    public function create(array $data)
    {
        return Project::create($data);
    }

    public function update(string $projectKey, array $data)
    {
        $project = $this->find($projectKey);

        $project->update($data);
        return $project;
    }

    public function delete(string $projectKey)
    {
        $project = $this->find($projectKey);
        $project->delete();
    }

    public function find(string $projectKey)
    {
        return Project::where('project_key', $projectKey);
    }

    public function all()
    {
        return Project::all();
    }

    public function paginate(int $perPage = 3)
    {
        return Project::paginate($perPage);
    }
}
