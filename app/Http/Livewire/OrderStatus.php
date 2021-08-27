<?php

namespace App\Http\Livewire;

use App\Models\OdersList;
use Livewire\Component;

class OrderStatus extends Component
{
    public $order;
    public function mount($order)
    {
        $this->order = $order;
    }
    public function render()
    {
        return view('livewire.order-status');
    }

    public function getOrderStatus($id)
    {
        $this->order;
    }
}
