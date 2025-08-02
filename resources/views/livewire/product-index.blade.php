<div>
    <div class="flex justify-end mb-4">
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            + Add Product
        </a>
    </div>

    <div class="card  ">
        <div class="card-body">

            <div class="join max-w-sm mb-4">

                <input type="text" class="input join-item" placeholder="Search"
                    wire:model.live.debounce.150ms="search" />

                <button class="btn btn-ghost join-item" wire:click="$set('search', '')">Clear</button>
            </div>
            <div class="overflow-x-auto">
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>UOM</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $index => $product)
                            <tr wire:key="product-row-{{ $product->id }}">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->uom }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->current_stock }}</td>
                                <td class="text-end">
                                    <livewire:product-action :product="$product"
                                        :wire:key="'product-action-'.$product->id" />
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-gray-500">No products found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="text-sm text-gray-600 mb-2">
                Showing
                <span class="font-medium">{{ $products->firstItem() }}</span>
                to
                <span class="font-medium">{{ $products->lastItem() }}</span>
                of
                <span class="font-medium">{{ $products->total() }}</span>
                results
            </div>
            <nav class="flex items-center justify-center gap-x-1">
                <button wire:click="previousPage" @disabled($products->onFirstPage()) class="btn btn-text">Previous</button>

                @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                    <button wire:click="gotoPage({{ $page }})"
                        class="btn btn-text btn-square {{ $products->currentPage() == $page ? 'bg-primary text-white' : '' }}">
                        {{ $page }}
                    </button>
                @endforeach

                <button wire:click="nextPage" @disabled(!$products->hasMorePages()) class="btn btn-text">Next</button>
            </nav>


        </div>
    </div>


</div>
