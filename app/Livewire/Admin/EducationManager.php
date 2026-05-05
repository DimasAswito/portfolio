<?php

namespace App\Livewire\Admin;

use App\Models\Education;
use Livewire\Component;

class EducationManager extends Component
{
    public $educations;
    public $institution, $major, $degree, $description, $start_date, $end_date, $icon_class, $order_number, $education_id;
    public $isOpen = false;

    public function render()
    {
        $this->educations = Education::orderBy('order_number')->get();
        return view('livewire.admin.education-manager')->layout('layouts.app');
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
        $this->institution = '';
        $this->major = '';
        $this->degree = '';
        $this->description = '';
        $this->start_date = '';
        $this->end_date = '';
        $this->icon_class = '';
        $this->order_number = '';
        $this->education_id = '';
    }

    public function store()
    {
        $this->validate([
            'institution' => 'required',
            'major' => 'required',
            'degree' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'icon_class' => 'required',
            'order_number' => 'required|numeric',
        ]);

        Education::updateOrCreate(['id' => $this->education_id], [
            'institution' => $this->institution,
            'major' => $this->major,
            'degree' => $this->degree,
            'description' => $this->description,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'icon_class' => $this->icon_class,
            'order_number' => $this->order_number
        ]);

        session()->flash('message', $this->education_id ? 'Education Updated Successfully.' : 'Education Created Successfully.');
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $education = Education::findOrFail($id);
        $this->education_id = $id;
        $this->institution = $education->institution;
        $this->major = $education->major;
        $this->degree = $education->degree;
        $this->description = $education->description;
        $this->start_date = $education->start_date;
        $this->end_date = $education->end_date;
        $this->icon_class = $education->icon_class;
        $this->order_number = $education->order_number;
        $this->openModal();
    }

    public function delete($id)
    {
        Education::find($id)->delete();
        session()->flash('message', 'Education Deleted Successfully.');
    }
}
