<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ProductStock;
use Carbon\Carbon;
use Livewire\Component;

class StockChart extends Component
{
    public $series = [];
    public $categories = [];
    public $seriesCurrent = [];
    public $categoriesCurrent = [];

    public function mount()
    {
        $inData = [];
        $outData = [];
        $dates = [];

        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            $dates[] = $date;

            $inData[] = ProductStock::whereDate('created_at', $date)->where('type', 'in')->sum('qty');
            $outData[] = ProductStock::whereDate('created_at', $date)->where('type', 'out')->sum('qty');
        }

        $this->categories = $dates;
        $this->series = [
            ['name' => 'Material In', 'data' => $inData],
            ['name' => 'Inventory Used', 'data' => $outData],
        ];

        // =====
        $products =  Product::with('stocks')->get()
            ->sortByDesc(fn($p) => $p->current_stock)
            ->take(5)
            ->values();
        $this->categoriesCurrent = $products->pluck('name')->toArray();
        $this->seriesCurrent = [
            [
                'name' => 'Stok Saat Ini',
                'data' => $products->map(fn($p) => $p->current_stock)->toArray(),
            ]
        ];
    }

    public function render()
    {
        return view('livewire.stock-chart');
    }
}
