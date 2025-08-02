<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductAction extends Component
{
    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function delete($productId)
    {
        $product = Product::findOrFail($productId);
        $product->delete();

        // Emit event untuk menutup modal dan tampilkan pesan sukses
        $this->dispatch('product-deleted', [
            'message' => 'Produk berhasil dihapus!'
        ]);

        $this->dispatch('productDeleted', id: $productId);


        session()->flash('message', 'Produk berhasil dihapus.');
    }

    public function render()
    {
        return view('livewire.product-action');
    }
}
