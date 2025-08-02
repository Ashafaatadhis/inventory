   <!-- ---------- HEADER ---------- -->
   <div class="bg-base-100 border-base-content/20 sticky top-0 z-50 flex border-b lg:ps-75">
       <div class="mx-auto w-full max-w-7xl">
           <nav class="navbar py-2">
               <div class="navbar-start gap-2">
                   <button type="button" class="btn btn-soft btn-square btn-sm lg:hidden" aria-haspopup="dialog"
                       aria-expanded="false" aria-controls="layout-toggle" data-overlay="#layout-toggle">
                       <span class="icon-[tabler--menu-2] size-4.5"></span>
                   </button>

                   <div class="h-4" />
               </div>


           </nav>
       </div>
   </div>
   <!-- Search Dropdown Content  -->
   <div id="search-modal" class="overlay modal overlay-open:opacity-100 overlay-open:duration-300 modal-middle hidden"
       role="dialog" tabindex="-1">
       <div class="modal-dialog w-full max-w-145">
           <div class="modal-content overflow-auto shadow-none">
               <!-- SearchBox -->
               <div class="modal-header border-base-content/20 border-b-1 px-3 py-2">
                   <div class="input no-focus border-0 px-0">
                       <span class="icon-[tabler--search] text-base-content/80 my-auto me-2 size-5 shrink-0"></span>
                       <input type="search" class="grow" placeholder="Search here..." id="kbdInput" />
                       <label class="sr-only" for="kbdInput">Search</label>
                   </div>
               </div>

               <nav class="tabs tabs-bordered py-2" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                   <button type="button" class="tab active-tab:tab-active active w-full font-medium"
                       id="search-tabs-item-1" data-tab="#search-tabs-1" aria-controls="search-tabs-1" role="tab"
                       aria-selected="true">
                       All
                   </button>
                   <button type="button" class="tab active-tab:tab-active w-full font-medium" id="search-tabs-item-2"
                       data-tab="#search-tabs-2" aria-controls="search-tabs-2" role="tab" aria-selected="false">
                       Pages
                   </button>
                   <button type="button" class="tab active-tab:tab-active w-full font-medium" id="search-tabs-item-3"
                       data-tab="#search-tabs-3" aria-controls="search-tabs-3" role="tab" aria-selected="false">
                       Integration
                   </button>
                   <button type="button" class="tab active-tab:tab-active w-full font-medium" id="search-tabs-item-4"
                       data-tab="#search-tabs-4" aria-controls="search-tabs-4" role="tab" aria-selected="false">
                       Users
                   </button>
               </nav>
               <!-- SearchBox Modal Body -->
               <div class="max-h-90 overflow-y-auto lg:max-h-121">
                   <!-- SearchBox All Modal Body -->
                   <div id="search-tabs-1" role="tabpanel" aria-labelledby="search-tabs-item-1">
                       <!-- Pages Section -->
                       <div class="modal-body">
                           <div class="text-base-content/50 mb-1.5 text-sm uppercase">Pages</div>
                           <ul class="space-y-1.5">
                               <li>
                                   <a class="hover:bg-base-200 rounded-field flex items-center gap-2 px-1 py-1.5"
                                       href="#">
                                       <span class="icon-[tabler--users] size-6 shrink-0"></span>
                                       <h6 class="font-medium">Marketing UI Page</h6>
                                   </a>
                               </li>
                               <li>
                                   <a class="hover:bg-base-200 rounded-field flex items-center gap-2 px-1 py-1.5"
                                       href="#">
                                       <span class="icon-[tabler--shopping-cart] size-6 shrink-0"></span>
                                       <h6 class="font-medium">e-commerce UI Page</h6>
                                   </a>
                               </li>
                               <li>
                                   <a class="hover:bg-base-200 rounded-field flex items-center gap-2 px-1 py-1.5"
                                       href="#">
                                       <span class="icon-[tabler--device-desktop-analytics] size-6 shrink-0"></span>
                                       <h6 class="font-medium">Dashboard UI Page</h6>
                                   </a>
                               </li>
                           </ul>
                       </div>
                       <div class="divider"></div>
                       <!-- Interaction Section -->
                       <div class="modal-body">
                           <div class="text-base-content/50 mb-1.5 text-sm uppercase">Interaction</div>
                           <ul class="space-y-1.5">
                               <li>
                                   <a class="hover:bg-base-200 rounded-field flex justify-between gap-2 px-1 py-1.5 max-sm:flex-col sm:items-center"
                                       href="#">
                                       <div class="flex items-center gap-3">
                                           <div class="avatar avatar-placeholder">
                                               <div class="bg-base-200 size-9.5 rounded-full">
                                                   <img src="https://cdn.flyonui.com/fy-assets/blocks/dashboard-app/dashboard-modals/jira.png"
                                                       alt="jira" class="size-6" />
                                               </div>
                                           </div>
                                           <div>
                                               <h6 class="font-medium">Jira</h6>
                                               <p class="text-base-content/50 text-sm">Project management</p>
                                           </div>
                                       </div>
                                       <div class="avatar-group -space-x-3">
                                           <div class="avatar">
                                               <div class="size-8">
                                                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-10.png"
                                                       alt="avatar" />
                                               </div>
                                           </div>
                                           <div class="avatar">
                                               <div class="size-8">
                                                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-12.png"
                                                       alt="avatar" />
                                               </div>
                                           </div>
                                           <div class="avatar">
                                               <div class="size-8">
                                                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-6.png"
                                                       alt="avatar" />
                                               </div>
                                           </div>
                                           <div class="avatar avatar-placeholder">
                                               <div class="bg-neutral text-neutral-content size-8">
                                                   <span>+3</span>
                                               </div>
                                           </div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a class="hover:bg-base-200 rounded-field flex justify-between gap-2 px-1 py-1.5 max-sm:flex-col sm:items-center"
                                       href="#">
                                       <div class="flex items-center gap-3">
                                           <div class="avatar avatar-placeholder">
                                               <div class="bg-base-200 size-9.5 rounded-full">
                                                   <img src="https://cdn.flyonui.com/fy-assets/blocks/dashboard-app/dashboard-modals/inferno.png"
                                                       alt="inferno" class="size-6" />
                                               </div>
                                           </div>
                                           <div>
                                               <h6 class="font-medium">Inferno</h6>
                                               <p class="text-base-content/50 text-sm">Real-time photo sharing app</p>
                                           </div>
                                       </div>
                                       <div class="avatar-group -space-x-3">
                                           <div class="avatar">
                                               <div class="size-8">
                                                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-5.png"
                                                       alt="avatar" />
                                               </div>
                                           </div>
                                           <div class="avatar">
                                               <div class="size-8">
                                                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-13.png"
                                                       alt="avatar" />
                                               </div>
                                           </div>
                                           <div class="avatar">
                                               <div class="size-8">
                                                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-7.png"
                                                       alt="avatar" />
                                               </div>
                                           </div>
                                       </div>
                                   </a>
                               </li>
                           </ul>
                       </div>
                       <div class="divider"></div>
                       <!-- User Section -->
                       <div class="modal-body">
                           <div class="text-base-content/50 mb-1.5 text-sm uppercase">User</div>
                           <ul class="space-y-1.5">
                               <li>
                                   <div
                                       class="hover:bg-base-200 rounded-field flex items-center justify-between gap-2 px-1 py-1.5">
                                       <a href="#" class="flex grow items-center gap-3">
                                           <div class="avatar">
                                               <div class="size-9.5 rounded-full">
                                                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-7.png"
                                                       alt="Amelle Laurent" />
                                               </div>
                                           </div>
                                           <div>
                                               <h6 class="font-medium">Amelle Laurent</h6>
                                               <p class="text-base-content/50 text-sm">Amelle@hotmail.com</p>
                                           </div>
                                       </a>
                                       <div class="flex items-center gap-2 max-sm:hidden">
                                           <span class="badge badge-success badge-soft rounded-full">In office</span>
                                           <div class="dropdown relative inline-flex [--placement:bottom-end]">
                                               <button id="user-dropdown1" type="button"
                                                   class="dropdown-toggle btn btn-text text-base-content btn-circle btn-xs"
                                                   aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                                   <span class="icon-[tabler--dots-vertical] size-4.5"></span>
                                               </button>
                                               <ul class="dropdown-menu dropdown-open:opacity-100 menu-sm hidden p-1"
                                                   role="menu" aria-orientation="vertical"
                                                   aria-labelledby="user-dropdown1">
                                                   <li><button class="dropdown-item px-2" type="button">View
                                                           More</button></li>
                                                   <li><button class="dropdown-item px-2"
                                                           type="button">Delete</button></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               </li>
                               <li>
                                   <div
                                       class="hover:bg-base-200 rounded-field flex items-center justify-between gap-2 px-1 py-1.5">
                                       <a href="#" class="flex grow items-center gap-3">
                                           <div class="avatar">
                                               <div class="size-9.5 rounded-full">
                                                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-3.png"
                                                       alt="Maria Donin" />
                                               </div>
                                           </div>
                                           <div>
                                               <h6 class="font-medium">Maria Donin</h6>
                                               <p class="text-base-content/50 text-sm">Maria@hotmail.com</p>
                                           </div>
                                       </a>
                                       <div class="flex items-center gap-2 max-sm:hidden">
                                           <span class="badge badge-error badge-soft rounded-full">On leave</span>
                                           <div class="dropdown relative inline-flex [--placement:bottom-end]">
                                               <button id="user-dropdown2" type="button"
                                                   class="dropdown-toggle btn btn-text text-base-content btn-circle btn-xs"
                                                   aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                                   <span class="icon-[tabler--dots-vertical] size-4.5"></span>
                                               </button>
                                               <ul class="dropdown-menu dropdown-open:opacity-100 menu-sm hidden p-1"
                                                   role="menu" aria-orientation="vertical"
                                                   aria-labelledby="user-dropdown2">
                                                   <li><button class="dropdown-item px-2" type="button">View
                                                           More</button></li>
                                                   <li><button class="dropdown-item px-2"
                                                           type="button">Delete</button></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               </li>
                           </ul>
                       </div>
                   </div>

                   <!-- SearchBox Pages Modal Body -->
                   <div id="search-tabs-2" class="hidden" role="tabpanel" aria-labelledby="search-tabs-item-2">
                       <div class="modal-body">
                           <ul class="space-y-1.5">
                               <li>
                                   <a class="hover:bg-base-200 rounded-field flex items-center gap-2 px-1 py-1.5"
                                       href="#">
                                       <span class="icon-[tabler--users] size-6 shrink-0"></span>
                                       <h6 class="font-medium">Marketing UI Page</h6>
                                   </a>
                               </li>
                               <li>
                                   <a class="hover:bg-base-200 rounded-field flex items-center gap-2 px-1 py-1.5"
                                       href="#">
                                       <span class="icon-[tabler--shopping-cart] size-6 shrink-0"></span>
                                       <h6 class="font-medium">e-commerce UI Page</h6>
                                   </a>
                               </li>
                               <li>
                                   <a class="hover:bg-base-200 rounded-field flex items-center gap-2 px-1 py-1.5"
                                       href="#">
                                       <span class="icon-[tabler--device-desktop-analytics] size-6 shrink-0"></span>
                                       <h6 class="font-medium">Dashboard UI Page</h6>
                                   </a>
                               </li>
                           </ul>
                       </div>
                   </div>

                   <!-- SearchBox Integration Modal Body -->
                   <div id="search-tabs-3" class="hidden" role="tabpanel" aria-labelledby="search-tabs-item-3">
                       <div class="modal-body">
                           <ul class="space-y-1.5">
                               <li>
                                   <a class="hover:bg-base-200 rounded-field flex justify-between gap-2 px-1 py-1.5 max-sm:flex-col sm:items-center"
                                       href="#">
                                       <div class="flex items-center gap-3">
                                           <div class="avatar avatar-placeholder">
                                               <div class="bg-base-200 size-9.5 rounded-full">
                                                   <img src="https://cdn.flyonui.com/fy-assets/blocks/dashboard-app/dashboard-modals/jira.png"
                                                       alt="jira" class="size-6" />
                                               </div>
                                           </div>
                                           <div>
                                               <h6 class="font-medium">Jira</h6>
                                               <p class="text-base-content/50 text-sm">Project management</p>
                                           </div>
                                       </div>
                                       <div class="avatar-group -space-x-3">
                                           <div class="avatar">
                                               <div class="size-8">
                                                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-10.png"
                                                       alt="avatar" />
                                               </div>
                                           </div>
                                           <div class="avatar">
                                               <div class="size-8">
                                                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-12.png"
                                                       alt="avatar" />
                                               </div>
                                           </div>
                                           <div class="avatar">
                                               <div class="size-8">
                                                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-6.png"
                                                       alt="avatar" />
                                               </div>
                                           </div>
                                           <div class="avatar avatar-placeholder">
                                               <div class="bg-neutral text-neutral-content size-8">
                                                   <span>+3</span>
                                               </div>
                                           </div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a class="hover:bg-base-200 rounded-field flex justify-between gap-2 px-1 py-1.5 max-sm:flex-col sm:items-center"
                                       href="#">
                                       <div class="flex items-center gap-3">
                                           <div class="avatar avatar-placeholder">
                                               <div class="bg-base-200 size-9.5 rounded-full">
                                                   <img src="https://cdn.flyonui.com/fy-assets/blocks/dashboard-app/dashboard-modals/inferno.png"
                                                       alt="inferno" class="size-6" />
                                               </div>
                                           </div>
                                           <div>
                                               <h6 class="font-medium">Inferno</h6>
                                               <p class="text-base-content/50 text-sm">Real-time photo sharing app</p>
                                           </div>
                                       </div>
                                       <div class="avatar-group -space-x-3">
                                           <div class="avatar">
                                               <div class="size-8">
                                                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-5.png"
                                                       alt="avatar" />
                                               </div>
                                           </div>
                                           <div class="avatar">
                                               <div class="size-8">
                                                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-13.png"
                                                       alt="avatar" />
                                               </div>
                                           </div>
                                           <div class="avatar">
                                               <div class="size-8">
                                                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-7.png"
                                                       alt="avatar" />
                                               </div>
                                           </div>
                                       </div>
                                   </a>
                               </li>
                           </ul>
                       </div>
                   </div>

                   <!-- SearchBox Users Modal Body -->
                   <div id="search-tabs-4" class="hidden" role="tabpanel" aria-labelledby="search-tabs-item-4">
                       <div class="modal-body">
                           <ul class="space-y-1.5">
                               <li>
                                   <div
                                       class="hover:bg-base-200 rounded-field flex items-center justify-between gap-2 px-1 py-1.5">
                                       <a href="#" class="flex items-center gap-3">
                                           <div class="avatar">
                                               <div class="size-9.5 rounded-full">
                                                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-7.png"
                                                       alt="Amelle Laurent" />
                                               </div>
                                           </div>
                                           <div>
                                               <h6 class="font-medium">Amelle Laurent</h6>
                                               <p class="text-base-content/50 text-sm">Amelle@hotmail.com</p>
                                           </div>
                                       </a>
                                       <div class="flex items-center gap-2">
                                           <span class="badge badge-success badge-soft rounded-full">In office</span>
                                           <div
                                               class="dropdown relative inline-flex [--placement:bottom-end] max-sm:hidden">
                                               <button id="user-dropdown3" type="button"
                                                   class="dropdown-toggle btn btn-text text-base-content btn-circle btn-xs"
                                                   aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                                   <span class="icon-[tabler--dots-vertical] size-4.5"></span>
                                               </button>
                                               <ul class="dropdown-menu dropdown-open:opacity-100 menu-sm hidden p-1"
                                                   role="menu" aria-orientation="vertical"
                                                   aria-labelledby="user-dropdown3">
                                                   <li><button class="dropdown-item px-2">View More</button></li>
                                                   <li><button class="dropdown-item px-2">Delete</button></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               </li>
                               <li>
                                   <div
                                       class="hover:bg-base-200 rounded-field flex items-center justify-between gap-2 px-1 py-1.5">
                                       <a href="#" class="flex items-center gap-3">
                                           <div class="avatar">
                                               <div class="size-9.5 rounded-full">
                                                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-3.png"
                                                       alt="Maria Donin" />
                                               </div>
                                           </div>
                                           <div>
                                               <h6 class="font-medium">Maria Donin</h6>
                                               <p class="text-base-content/50 text-sm">Maria@hotmail.com</p>
                                           </div>
                                       </a>
                                       <div class="flex items-center gap-2">
                                           <span class="badge badge-error badge-soft rounded-full">On leave</span>
                                           <div
                                               class="dropdown relative inline-flex [--placement:bottom-end] max-sm:hidden">
                                               <button id="user-dropdown4" type="button"
                                                   class="dropdown-toggle btn btn-text text-base-content btn-circle btn-xs"
                                                   aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                                   <span class="icon-[tabler--dots-vertical] size-4.5"></span>
                                               </button>
                                               <ul class="dropdown-menu dropdown-open:opacity-100 menu-sm hidden p-1"
                                                   role="menu" aria-orientation="vertical"
                                                   aria-labelledby="user-dropdown4">
                                                   <li><button class="dropdown-item px-2" type="button">View
                                                           More</button></li>
                                                   <li><button class="dropdown-item px-2"
                                                           type="button">Delete</button></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
               <!-- Footer Commands -->
               <div
                   class="modal-footer border-base-content/20 text-base-content/50 gap-4 border-t-1 py-4 max-sm:hidden">
                   <div class="flex grow items-center gap-2 text-sm">
                       <kbd class="kbd kbd-sm">esc</kbd>
                       <span>To close</span>
                   </div>
                   <div class="flex items-center gap-2 text-sm">
                       <kbd class="kbd kbd-sm p-0"><span class="icon-[tabler--arrow-back] size-4"></span></kbd>
                       <span>To Select</span>
                   </div>
                   <div class="flex items-center gap-2 text-sm">
                       <kbd class="kbd kbd-sm p-0"><span class="icon-[tabler--arrow-up] size-4"></span></kbd>
                       <kbd class="kbd kbd-sm p-0"><span class="icon-[tabler--arrow-down] size-4"></span></kbd>
                       <span>To Navigate</span>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <!-- Activity Drawer Content  -->
   <div id="activity-drawer" class="overlay overlay-open:translate-x-0 drawer drawer-end hidden sm:max-w-104"
       role="dialog" tabindex="-1">
       <div class="drawer-header border-base-content/20 border-b p-4">
           <h3 class="drawer-title text-base font-semibold">Activity</h3>
           <button type="button" class="btn btn-text btn-circle btn-xs" aria-label="Close"
               data-overlay="#activity-drawer">
               <span class="icon-[tabler--x] size-4"></span>
           </button>
       </div>
       <div class="drawer-body p-0">
           <ul class="space-y-0">
               <!-- Joe Lincoln Activity -->
               <li class="flex items-start gap-4 p-4">
                   <div class="avatar">
                       <div class="size-8 rounded-full">
                           <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png" alt="avatar" />
                       </div>
                   </div>
                   <div class="flex-1">
                       <div class="mb-1">
                           <span class="text-base-content font-semibold">joe Lincoln</span>
                           <span class="text-base-content text-sm">mentioned you in last trends topic</span>
                       </div>
                       <p class="text-base-content/50 mb-3 text-sm">18 Mins ago</p>

                       <div class="bg-base-200 rounded-box border-base-content/20 border px-4 py-2.5">
                           <p class="text-base-content mb-4 text-sm font-medium">
                               @Flyonui For an expert opinion, check out what Mike has to say on this topic!
                           </p>
                           <div class="input input-sm">
                               <input type="text" class="grow" placeholder="Reply" id="flyonuiReply" />
                               <span
                                   class="icon-[tabler--photo] text-base-content/80 my-auto ms-2 size-4 shrink-0"></span>
                           </div>
                       </div>
                   </div>
               </li>

               <li>
                   <div class="divider"></div>
               </li>

               <!-- Sofia -->
               <li class="flex items-start gap-4 p-4">
                   <div class="avatar">
                       <div class="size-8 rounded-full">
                           <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-2.png" alt="Sofia" />
                       </div>
                   </div>
                   <div class="flex-1">
                       <div class="mb-1">
                           <span class="text-base-content font-semibold">Sofia</span>
                           <span class="text-base-content text-sm">requested feedback on her design.</span>
                       </div>
                       <p class="text-base-content/50 text-sm">1 Hour ago</p>
                   </div>
               </li>

               <li>
                   <div class="divider"></div>
               </li>

               <!-- Jane Perez File Review -->
               <li class="flex items-start gap-4 p-4">
                   <div class="avatar">
                       <div class="size-8 rounded-full">
                           <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-3.png" alt="Jane Perez" />
                       </div>
                   </div>
                   <div class="flex-1">
                       <div class="mb-1">
                           <span class="text-base-content font-semibold">Jane Perez</span>
                           <span class="text-base-content text-sm">invites you to review a file.</span>
                       </div>
                       <p class="text-base-content/50 mb-2.5 text-sm">3 Hours ago</p>
                       <span class="badge badge-soft badge-lg">
                           <span class="icon-[tabler--file-type-pdf] text-error"></span>
                           invoices.pdf
                       </span>
                   </div>
               </li>

               <li>
                   <div class="divider"></div>
               </li>

               <!-- Liam -->
               <li class="flex items-start gap-4 p-4">
                   <div class="avatar">
                       <div class="size-8 rounded-full">
                           <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-11.png" alt="Liam" />
                       </div>
                   </div>
                   <div class="flex-1">
                       <div class="mb-1">
                           <span class="text-base-content font-semibold">Liam</span>
                           <span class="text-base-content text-sm">has shared a project update.</span>
                       </div>
                       <p class="text-base-content/50 text-sm">5 Hours ago</p>
                   </div>
               </li>

               <li>
                   <div class="divider"></div>
               </li>

               <!-- Tyler Hero Design Project -->
               <li class="flex items-start gap-4 p-4">
                   <div class="avatar">
                       <div class="size-8 rounded-full">
                           <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-9.png" alt="Tyler Hero" />
                       </div>
                   </div>
                   <div class="flex-1">
                       <div class="mb-1">
                           <span class="text-base-content font-semibold">Tyler Hero</span>
                           <span class="text-base-content text-sm">wants to view your design project</span>
                       </div>
                       <p class="text-base-content/50 mb-3 text-sm">18 Mins ago</p>

                       <div
                           class="bg-base-200 rounded-box border-base-content/20 flex items-center gap-4 border px-4 py-2.5">
                           <div class="avatar avatar-placeholder">
                               <div class="bg-base-100 text-primary rounded-box size-8 p-2">
                                   <img src="https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/brand-logo/figma-icon.png"
                                       alt="avatar" />
                               </div>
                           </div>
                           <span class="text-sm font-medium">Launcher-UIkit.fig</span>
                       </div>
                   </div>
               </li>

               <li>
                   <div class="divider"></div>
               </li>

               <!-- Denial Invite -->
               <li class="flex items-start gap-4 p-4">
                   <div class="avatar">
                       <div class="size-8 rounded-full">
                           <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-4.png" alt="Denial" />
                       </div>
                   </div>
                   <div class="flex-1">
                       <div class="mb-1">
                           <span class="text-base-content font-semibold">Denial</span>
                           <span class="text-base-content text-sm">Invite from invite link</span>
                       </div>
                       <p class="text-base-content/50 text-sm">3 Hours ago</p>
                   </div>
               </li>

               <li>
                   <div class="divider"></div>
               </li>

               <!-- Leslie Alexander Tags -->
               <li class="flex items-start gap-4 p-4">
                   <div class="avatar">
                       <div class="size-8 rounded-full">
                           <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-5.png" alt="Leslie Alexander" />
                       </div>
                   </div>
                   <div class="flex-1">
                       <div class="mb-1">
                           <span class="text-base-content font-semibold">Leslie Alexander</span>
                           <span class="text-base-content text-sm">new tags to Web Redesign</span>
                       </div>
                       <p class="text-base-content/50 mb-3 text-sm">18 Mins ago</p>

                       <div class="flex gap-2.5">
                           <span class="badge badge-soft badge-primary badge-sm">Client - Request</span>
                           <span class="badge badge-soft badge-warning badge-sm">Figma</span>
                           <span class="badge badge-soft badge-info badge-sm">Redesign</span>
                       </div>
                   </div>
               </li>

               <li>
                   <div class="divider"></div>
               </li>

               <!-- Miya File Review -->
               <li class="flex items-start gap-4 p-4">
                   <div class="avatar">
                       <div class="size-8 rounded-full">
                           <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-6.png" alt="Miya" />
                       </div>
                   </div>
                   <div class="flex-1">
                       <div class="mb-1">
                           <span class="text-base-content font-semibold">Miya</span>
                           <span class="text-base-content text-sm">invites you to review a file.</span>
                       </div>
                       <p class="text-base-content/50 text-sm">10 Hours ago</p>
                   </div>
               </li>
           </ul>
       </div>
   </div>
   <!-- ---------- END HEADER ---------- -->
