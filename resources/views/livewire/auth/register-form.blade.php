<form class="mb-4 space-y-4" wire:submit.prevent="register">
    <div>
        <label class="label-text" for="userName">Username*</label>
        <input type="text" wire:model.live.debounce.150ms="username" required placeholder="Enter your username"
            class="input" id="userName" required />
        <div class="h-3">
            @error('username')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

    </div>
    <div>
        <label class="label-text" for="userEmail">Email address*</label>
        <input type="email" wire:model.live.debounce.150ms="email" placeholder="Enter your email address"
            class="input" id="userEmail" required />
        <div class="h-3">
            @error('email')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div>
        <label class="label-text" for="userPassword">Password*</label>
        <div class="input">
            <input id="userPassword" wire:model.live.debounce.150ms="password" type="password"
                placeholder="············" required />
            <button type="button" data-toggle-password='{ "target": "#userPassword" }' class="block cursor-pointer"
                aria-label="userPassword">
                <span class="icon-[tabler--eye] password-active:block hidden size-5 shrink-0"></span>
                <span class="icon-[tabler--eye-off] password-active:hidden block size-5 shrink-0"></span>
            </button>
        </div>
        <div class="h-3">
            @error('password')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div>
        <label class="label-text" for="userConfrimPassword">Confirm Password*</label>
        <div class="input">
            <input id="userConfrimPassword" wire:model.live.debounce.150ms="password_confirmation" type="password"
                placeholder="············" required />
            <button type="button" data-toggle-password='{ "target": "#userConfrimPassword" }'
                class="block cursor-pointer" aria-label="userConfrimPassword">
                <span class="icon-[tabler--eye] password-active:block hidden size-5 shrink-0"></span>
                <span class="icon-[tabler--eye-off] password-active:hidden block size-5 shrink-0"></span>
            </button>
        </div>
        <div class="h-3">
            @error('password_confirmation')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <button class="btn btn-lg btn-primary btn-gradient btn-block">Register</button>
</form>
