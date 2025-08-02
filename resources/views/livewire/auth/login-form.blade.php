   <form class="mb-4 space-y-4" wire:submit.prevent="login">

       <div>
           <label class="label-text" for="userEmail">Email address*</label>
           <input wire:model.live.debounce.150ms="email" required ="email" placeholder="Enter your email address"
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
               <input wire:model.live.debounce.150ms="password" id="userPassword" type="password"
                   placeholder="············" required />
               <button type="button" data-toggle-password='{ "target": "#userPassword" }' class="block cursor-pointer"
                   aria-label="userPassword">
                   <span class="icon-[tabler--eye] password-active:block hidden size-5 shrink-0"></span>
                   <span class="icon-[tabler--eye-off] password-active:hidden block size-5 shrink-0"></span>
               </button>
           </div>
       </div>
       <div class="flex items-center justify-between gap-y-2">
           <div class="flex items-center gap-2">
               <input type="checkbox" wire:model="remember" class="checkbox checkbox-primary" id="rememberMe" />
               <label class="label-text text-base-content/80 p-0 text-base" for="rememberMe">Remember
                   Me</label>
           </div>
       </div>
       <button class="btn btn-lg btn-primary btn-gradient btn-block">Login</button>
   </form>
