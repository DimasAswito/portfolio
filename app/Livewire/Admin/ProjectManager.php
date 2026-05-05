<?php

namespace App\Livewire\Admin;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ProjectManager extends Component
{
    use WithFileUploads;

    public $projects;
    public $title, $description, $image_path, $project_url, $github_url, $order_number, $project_id;
    public $new_image;
    public $isOpen = false;

    public function render()
    {
        $this->projects = Project::orderBy('order_number')->get();
        return view('livewire.admin.project-manager')->layout('layouts.app');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->description = '';
        $this->image_path = '';
        $this->new_image = null;
        $this->project_url = '';
        $this->github_url = '';
        $this->order_number = '';
        $this->project_id = '';
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'project_url' => 'nullable|url',
            'github_url' => 'nullable|url',
            'order_number' => 'required|numeric',
            'new_image' => $this->project_id ? 'nullable|image|max:2048' : 'required|image|max:2048',
        ]);

        $data = [
            'title' => $this->title,
            'description' => $this->description,
            'project_url' => $this->project_url,
            'github_url' => $this->github_url,
            'order_number' => $this->order_number
        ];

        if ($this->new_image) {
            $data['image_path'] = $this->new_image->store('projects', 'public');
        }

        Project::updateOrCreate(['id' => $this->project_id], $data);

        session()->flash('message', $this->project_id ? 'Project Updated Successfully.' : 'Project Created Successfully.');
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $this->project_id = $id;
        $this->title = $project->title;
        $this->description = $project->description;
        $this->image_path = $project->image_path;
        $this->project_url = $project->project_url;
        $this->github_url = $project->github_url;
        $this->order_number = $project->order_number;
        $this->new_image = null;
        $this->openModal();
    }

    public function delete($id)
    {
        $project = Project::findOrFail($id);
        if ($project->image_path) {
            Storage::disk('public')->delete($project->image_path);
        }
        $project->delete();
        session()->flash('message', 'Project Deleted Successfully.');
    }
}
