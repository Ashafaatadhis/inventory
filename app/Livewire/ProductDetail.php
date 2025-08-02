<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ProductStock;
use Livewire\Component;

class ProductDetail extends Component
{
    public Product $product;
    public $qtyIn, $qtyOut, $noteIn, $noteOut;

    public function addStock()
    {
        $this->validate(['qtyIn' => 'required|numeric|min:1']);

        ProductStock::create([
            'product_id' => $this->product->id,
            'type' => 'in',
            'qty' => $this->qtyIn,
            'note' => $this->noteIn,
        ]);

        $this->product->refresh();
        $this->reset(['qtyIn', 'noteIn']);
    }

    public function reduceStock()
    {
        $this->validate(['qtyOut' => 'required|numeric|min:1']);
        $currentStock = $this->product->stocks()
            ->where('type', 'in')->sum('qty')
            - $this->product->stocks()->where('type', 'out')->sum('qty');

        if ($this->qtyOut > $currentStock) {
            $this->addError('qtyOut', 'Stok tidak mencukupi.');
            return;
        }

        ProductStock::create([
            'product_id' => $this->product->id,
            'type' => 'out',
            'qty' => $this->qtyOut,
            'note' => $this->noteOut,
        ]);

        $this->product->refresh();
        $this->reset(['qtyOut', 'noteOut']);
    }

    public function render()
    {
        $history = $this->product->stocks()->latest()->get();

        return view('livewire.product-detail', [
            'history' => $history,
        ]);
    }
}
