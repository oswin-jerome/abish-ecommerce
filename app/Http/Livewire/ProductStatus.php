<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductStatus extends Component
{
    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.product-status');
    }
    public function change_status()
    {
        $this->product->update(["status" => $this->product->status == 1 ? 0 : 1]);
    }
}
