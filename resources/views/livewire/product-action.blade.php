<div>
    <div class="flex justify-end gap-2">

        <!-- 🔹 Tombol trigger delete -->
        <div class="flex justify-end gap-2">
            <a href="{{ route('products.show', $product['id']) }}" class="btn btn-sm btn-outline">Detail</a>
            <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-sm btn-warning">Edit</a>
            <button id="open-btn" type="button" data-overlay="#confirm-delete-modal-{{ $product['id'] }}"
                class="btn btn-sm btn-error"> Delete </button>
        </div>

        <!-- 🔹 Modal dipush ke root layout -->
        <div id="confirm-delete-modal-{{ $product['id'] }}"
            class="overlay modal overlay-open:opacity-100 modal-middle hidden" x-data>
            <div class="modal-dialog overlay-open:opacity-100">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Konfirmasi Hapus</h3>

                        <button type="button" id="close-btn-{{ $product['id'] }}"
                            class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close"
                            data-overlay="#confirm-delete-modal-{{ $product['id'] }}">
                            <span class="icon-[tabler--x] size-4"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-4">Yakin ingin hapus <strong>{{ $product['name'] }}</strong>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-soft btn-secondary"
                            data-overlay="#confirm-delete-modal-{{ $product['id'] }}">Close</button>

                        <button wire:click="delete('{{ $product['id'] }}')" wire:loading.attr="disabled"
                            wire:target="delete('{{ $product['id'] }}')" class="btn btn-error">
                            <span wire:loading wire:target="delete('{{ $product['id'] }}')"
                                class="loading loading-spinner loading-sm"></span>
                            <span wire:loading.remove wire:target="delete('{{ $product['id'] }}')">Hapus</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@script
    <script>
        $wire.on('productDeleted', ({
            id
        }) => {

            // Tunggu animasi FlyonUI selesai, lalu hapus overlay backdrop
            setTimeout(() => {
                const backdrop = document.querySelector('.overlay-backdrop');
                if (backdrop) {
                    backdrop.remove(); // langsung hapus dari DOM
                    console.log("Overlay backdrop berhasil dihapus");
                }
            }, 300);
        });
    </script>
@endscript
