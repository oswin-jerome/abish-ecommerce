<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BannerStatus extends Component
{
    public $banner;
    public function mount($banner)
    {
        $this->banner = $banner;
    }
    public function render()
    {
        return view('livewire.banner-status');
    }
    public function changeBannerStatus()
    {

        $this->banner->update(["status" => $this->banner->status == 1 ? 0 : 1]);
    }
}
