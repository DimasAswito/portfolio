<?php

namespace App\Livewire\Admin;

use App\Models\Experience;
use Livewire\Component;

class ExperienceManager extends Component
{
    public $experiences;
    public $title, $company, $description, $status_label, $start_date, $end_date, $order_number, $experience_id;
    public $isOpen = false;

    public function render()
    {
        $this->experiences = Experience::orderBy('order_number')->get();
        return view('livewire.admin.experience-manager')->layout('layouts.app');
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
        $this->company = '';
        $this->description = '';
        $this->status_label = '';
        $this->start_date = '';
        $this->end_date = '';
        $this->order_number = '';
        $this->experience_id = '';
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'company' => 'required',
            'description' => 'required',
            'status_label' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'order_number' => 'required|numeric',
        ]);

        Experience::updateOrCreate(['id' => $this->experience_id], [
            'title' => $this->title,
            'company' => $this->company,
            'description' => $this->description,
            'status_label' => $this->status_label,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'order_number' => $this->order_number
        ]);

        session()->flash('message', $this->experience_id ? 'Experience Updated Successfully.' : 'Experience Created Successfully.');
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $experience = Experience::findOrFail($id);
        $this->experience_id = $id;
        $this->title = $experience->title;
        $this->company = $experience->company;
        $this->description = $experience->description;
        $this->status_label = $experience->status_label;
        $this->start_date = $experience->start_date;
        $this->end_date = $experience->end_date;
        $this->order_number = $experience->order_number;
        $this->openModal();
    }

    public function delete($id)
    {
        Experience::find($id)->delete();
        session()->flash('message', 'Experience Deleted Successfully.');
    }
}
