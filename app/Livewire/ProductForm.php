<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductForm extends Component
{
    public $name, $uom, $description;
    public ?Product $product = null;




    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'uom' => 'required|string|max:20',
            'description' => 'nullable|string|max:1000',
        ];
    }



    public function mount($product = null)
    {
        $this->product = $product;

        if ($product) {
            $this->name = $this->product->name;
            $this->uom = $this->product->uom;
            $this->description = $this->product->description;
        }
    }

    public function save()
    {
        $validated = $this->validate();

        if ($this->product) {
            $this->product->update($validated);
            $this->product->refresh();
            $this->fill($this->product->only(['name', 'uom', 'description']));


            session()->flash('message', 'Produk berhasil diperbarui.');
        } else {
            Product::create($validated);
            $this->reset(['name', 'uom', 'description']);
            session()->flash('message', 'Produk berhasil ditambahkan.');
        }

        // return redirect()->route('products.index');
    }



    public function render()
    {
        return view('livewire.product-form');
    }
}
