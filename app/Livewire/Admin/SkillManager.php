<?php

namespace App\Livewire\Admin;

use App\Models\Skill;
use Livewire\Component;

class SkillManager extends Component
{
    public $skills, $name, $icon_class, $order_number, $skill_id;
    public $isOpen = false;

    public function render()
    {
        $this->skills = Skill::orderBy('order_number')->get();
        return view('livewire.admin.skill-manager')->layout('layouts.app');
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
        $this->name = '';
        $this->icon_class = '';
        $this->order_number = '';
        $this->skill_id = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'icon_class' => 'required',
            'order_number' => 'required|numeric',
        ]);

        Skill::updateOrCreate(['id' => $this->skill_id], [
            'name' => $this->name,
            'icon_class' => $this->icon_class,
            'order_number' => $this->order_number
        ]);

        session()->flash('message', $this->skill_id ? 'Skill Updated Successfully.' : 'Skill Created Successfully.');
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        $this->skill_id = $id;
        $this->name = $skill->name;
        $this->icon_class = $skill->icon_class;
        $this->order_number = $skill->order_number;
        $this->openModal();
    }

    public function delete($id)
    {
        Skill::find($id)->delete();
        session()->flash('message', 'Skill Deleted Successfully.');
    }
}
