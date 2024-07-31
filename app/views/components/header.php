            <header class="sticky top-0 bg-white h-16 flex items-center px-5 gap-4 z-50">
                <a href="/" class="md:hidden flex">
                    <img src="assets/images/logo-sm.png" class="h-6" alt="Small logo">
                </a>
                <button id="button-toggle-menu"
                    class="text-gray-500 hover:text-gray-600 p-2 rounded-full cursor-pointer waves-effect me-auto"
                    data-hs-overlay="#app-menu" aria-controls="application-sidebar" aria-label="Toggle navigation">
                    <span class="sr-only">Menu Toggle Button</span>
                    <span class="flex items-center justify-center h-6 w-6">
                        <i class="ti ti-menu-2 text-2xl"></i>
                    </span>
                </button>
                <div class="md:flex hidden">
                    <button data-toggle="fullscreen" type="button" class="nav-link p-2 waves-effect">
                        <span class="sr-only">Fullscreen Mode</span>
                        <span class="flex items-center justify-center h-6 w-6">
                            <i class="ti ti-maximize text-2xl"></i>
                        </span>
                    </button>
                </div>
                <div class="relative">
                    <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                        <button type="button" class="hs-dropdown-toggle nav-link flex items-center gap-2">
                            <img src="assets/images/users/avatar-6.jpg" alt="user-image" class="rounded-full h-10">
                            <span class="md:flex items-center hidden">
                                <h5 class="text-base">Fitri Hy</h5>
                                <i class="ti ti-chevron-down text-sm ms-2"></i>
                            </span>
                        </button>
                        <div
                            class="hs-dropdown-menu duration mt-2 min-w-[12rem] rounded-lg border border-default-200 bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50 hidden">
                            <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100" href="#">
                                Profile
                            </a>
                            <hr class="my-2">
                            <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100" href="/logout">
                                Log Out
                            </a>
                        </div>
                    </div>
                </div>
            </header>