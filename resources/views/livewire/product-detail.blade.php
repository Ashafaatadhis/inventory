<div>
    <h2 class="text-xl font-bold mb-4">Detail Produk</h2>

    <div class="card mb-4">
        <div class="card-body">
            <p><strong>Nama:</strong> {{ $product->name }}</p>
            <p><strong>UOM:</strong> {{ $product->uom }}</p>
            <p><strong>Stok Saat Ini:</strong> {{ $product->current_stock }}</p>

        </div>
    </div>

    <div class="grid grid-cols-2 gap-4 mb-6">
        {{-- Tambah Stok --}}
        <div class="card">
            <div class="card-body">
                <h3 class="font-semibold mb-2">Material Received</h3>
                <form wire:submit.prevent="addStock">
                    <input type="number" wire:model="qtyIn" class="input input-bordered w-full mb-2"
                        placeholder="Qty In" />
                    <input type="text" wire:model="noteIn" class="input input-bordered w-full mb-2"
                        placeholder="Note" />
                    <button class="btn btn-primary w-full">Tambah</button>
                </form>
            </div>
        </div>

        {{-- Kurangi Stok --}}
        <div class="card">
            <div class="card-body">
                <h3 class="font-semibold mb-2">Inventory Used</h3>
                <form wire:submit.prevent="reduceStock">
                    <div class="relative mb-2">
                        <input type="number" wire:model="qtyOut" class="input input-bordered w-full"
                            placeholder="Qty Out" />
                        @error('qtyOut')
                            <span class="helper-text text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <input type="text" wire:model="noteOut" class="input input-bordered w-full mb-2"
                        placeholder="Note" />
                    <button class="btn btn-error w-full">Kurangi</button>
                </form>
            </div>
        </div>
    </div>

    {{-- Riwayat --}}
    <div class="card">
        <div class="card-body">
            <h3 class="font-semibold mb-4">Riwayat Stok</h3>
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Masuk</th>
                        <th>Keluar</th>
                        <th>Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($history as $item)
                        <tr>
                            <td>{{ $item->created_at->format('Y-m-d H:i') }}</td>
                            <td>{{ $item->type == 'in' ? $item->qty : '-' }}</td>
                            <td>{{ $item->type == 'out' ? $item->qty : '-' }}</td>
                            <td>{{ $item->note }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
