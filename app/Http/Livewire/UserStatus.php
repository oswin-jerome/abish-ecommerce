<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserStatus extends Component
{
    public $customer;
    public function mount($customer)
    {
        $this->customer = $customer;
    }
    public function render()
    {
        return view('livewire.user-status');
    }
    public function changeUserStatus()
    {

        $this->customer->update(["status" => $this->customer->status == 1 ? 0 : 1]);
    }
}
