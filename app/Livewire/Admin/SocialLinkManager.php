<?php

namespace App\Livewire\Admin;

use App\Models\SocialLink;
use Livewire\Component;

class SocialLinkManager extends Component
{
    public $social_links;
    public $platform, $url, $icon_class, $order_number, $social_link_id;
    public $isOpen = false;

    public function render()
    {
        $this->social_links = SocialLink::orderBy('order_number')->get();
        return view('livewire.admin.social-link-manager')->layout('layouts.app');
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
        $this->platform = '';
        $this->url = '';
        $this->icon_class = '';
        $this->order_number = '';
        $this->social_link_id = '';
    }

    public function store()
    {
        $this->validate([
            'platform' => 'required',
            'url' => 'required|url',
            'icon_class' => 'required',
            'order_number' => 'required|numeric',
        ]);

        SocialLink::updateOrCreate(['id' => $this->social_link_id], [
            'platform' => $this->platform,
            'url' => $this->url,
            'icon_class' => $this->icon_class,
            'order_number' => $this->order_number
        ]);

        session()->flash('message', $this->social_link_id ? 'Social Link Updated Successfully.' : 'Social Link Created Successfully.');
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $link = SocialLink::findOrFail($id);
        $this->social_link_id = $id;
        $this->platform = $link->platform;
        $this->url = $link->url;
        $this->icon_class = $link->icon_class;
        $this->order_number = $link->order_number;
        $this->openModal();
    }

    public function delete($id)
    {
        SocialLink::find($id)->delete();
        session()->flash('message', 'Social Link Deleted Successfully.');
    }
}
