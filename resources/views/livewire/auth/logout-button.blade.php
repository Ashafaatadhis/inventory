<li>
    <!-- Tombol trigger modal -->
    <button type="button" id="open-logout-modal" class="flex items-center cursor-pointer gap-2"
        data-overlay="#logout-modal">
        <span class="icon-[tabler--logout-2] size-5"></span>
        Sign Out
    </button>

    <button wire:click="logout" id="real-logout" class="hidden"></button>
</li>

@push('modals')
    <!-- Modal Logout -->
    <div id="logout-modal" class="overlay modal overlay-open:opacity-100 modal-middle hidden" role="dialog" tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Konfirmasi Logout</h3>
                    <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3"
                        data-overlay="#logout-modal">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-4">Yakin ingin keluar?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-soft btn-secondary" data-overlay="#logout-modal">Batal</button>
                    <button type="button" class="btn btn-error" id="confirm-logout">Logout</button>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('scripts')
    <script>
        document.getElementById('confirm-logout').addEventListener('click', function() {
            document.getElementById('real-logout').click();
        });
    </script>
@endpush
