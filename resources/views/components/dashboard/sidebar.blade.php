<!-- ---------- MAIN SIDEBAR ---------- -->
<aside id="layout-toggle"
    class="overlay overlay-open:translate-x-0 drawer drawer-start inset-y-0 start-0 hidden h-full [--auto-close:lg] sm:w-75 lg:z-50 lg:block lg:translate-x-0 lg:shadow-none"
    aria-label="Sidebar" tabindex="-1">
    <div class="drawer-body border-base-content/20 h-full border-e p-0">
        <div class="flex h-full max-h-full flex-col">
            <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3 lg:hidden" aria-label="Close"
                data-overlay="#layout-toggle">
                <span class="icon-[tabler--x] size-5"></span>
            </button>
            <div class="text-base-content border-base-content/20 flex flex-col items-center gap-4 border-b px-4 py-6">
                <div class="avatar">
                    <div class="size-17 rounded-full">
                        <img src="{{ asset('logo.png') }}" alt="avatar" />

                    </div>
                </div>
                <div class="text-center">
                    <h3 class="text-base-content text-lg font-semibold">{{ Auth::user()->name }}</h3>
                    <p class="text-base-content/80">{{ Auth::user()->email }}</p>
                </div>


            </div>
            <div class="h-full overflow-y-auto">
                <ul class="menu menu-sm gap-1 px-4">
                    <!-- Dashboard -->
                    <li class="mt-2.5">
                        <a href={{ route('dashboard') }} class="px-2">
                            <span class="icon-[tabler--dashboard] size-4.5"></span>
                            <span class="grow">Dashboard</span>

                        </a>
                    </li>
                    <li class="text-base-content/50 mt-2.5 p-2 text-xs uppercase">Pages</li>

                    <!-- Content Performance -->
                    <li>
                        <a href={{ route('products.index') }} class="px-2">
                            <span class="icon-[tabler--file-invoice] size-4.5"></span>
                            Products
                        </a>
                    </li>

                    <li class="text-base-content/50 mt-2.5 p-2 text-xs uppercase">Account</li>
                    @livewire('auth.logout-button')


                </ul>
            </div>
        </div>
    </div>
</aside>
<!-- ---------- END MAIN SIDEBAR ---------- -->
