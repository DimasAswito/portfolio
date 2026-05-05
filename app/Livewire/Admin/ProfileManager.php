<?php

namespace App\Livewire\Admin;

use App\Models\Profile;
use Livewire\Component;

class ProfileManager extends Component
{
    public $profile_id, $name, $headline, $description, $about_text, $github_username, $email;

    public function mount()
    {
        $profile = Profile::first();
        if ($profile) {
            $this->profile_id = $profile->id;
            $this->name = $profile->name;
            $this->headline = $profile->headline;
            $this->description = $profile->description;
            $this->about_text = $profile->about_text;
            $this->github_username = $profile->github_username;
            $this->email = $profile->email;
        }
    }

    public function render()
    {
        return view('livewire.admin.profile-manager')->layout('layouts.app');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'headline' => 'required',
            'description' => 'required',
            'about_text' => 'required',
            'github_username' => 'required',
            'email' => 'required|email',
        ]);

        Profile::updateOrCreate(
            ['id' => $this->profile_id ?? 1],
            [
                'name' => $this->name,
                'headline' => $this->headline,
                'description' => $this->description,
                'about_text' => $this->about_text,
                'github_username' => $this->github_username,
                'email' => $this->email,
            ]
        );

        session()->flash('message', 'Profile successfully updated.');
    }
}
