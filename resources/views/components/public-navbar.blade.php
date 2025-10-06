<nav class="relative flex w-full flex-col bg-white group/design-root overflow-x-hidden" style='font-family: Epilogue, "Noto Sans", sans-serif;'>
    <div class="layout-container">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f4f1f0] px-10 py-3">
            <div class="flex items-center gap-4 text-[#181311]">
                <div class="size-4">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 4C25.7818 14.2173 33.7827 22.2182 44 24C33.7827 25.7818 25.7818 33.7827 24 44C22.2182 33.7827 14.2173 25.7818 4 24C14.2173 22.2182 22.2182 14.2173 24 4Z" fill="currentColor"></path>
                    </svg>
                </div>
                <h2 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em]">Elite Pizza</h2>
            </div>
            <div class="flex flex-1 justify-end gap-8">
                <div class="flex items-center gap-9">
                    <a href="{{ route('home') }}" class="text-[#181311] text-sm font-medium leading-normal {{ request()->is('/') ? 'font-bold' : '' }}">Home</a>
                    <a href="{{ route('classes') }}" class="text-[#181311] text-sm font-medium leading-normal {{ request()->is('classes*') ? 'font-bold' : '' }}">Classes</a>
                    <a href="{{ route('instructors') }}" class="text-[#181311] text-sm font-medium leading-normal {{ request()->is('instructors*') ? 'font-bold' : '' }}">Instructors</a>
                    <a href="{{ route('about') }}" class="text-[#181311] text-sm font-medium leading-normal {{ request()->is('about*') ? 'font-bold' : '' }}">About</a>
                    <a href="{{ route('contact') }}" class="text-[#181311] text-sm font-medium leading-normal {{ request()->is('contact*') ? 'font-bold' : '' }}">Contact</a>
                </div>
                @guest
                    <a href="{{ route('login') }}" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#d44211] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                        <span class="truncate">Login</span>
                    </a>
                    <a href="{{ route('register') }}" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#d44211] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                        <span class="truncate">Sign Up</span>
                    </a>
                @else
                    <div class="flex items-center gap-4">
                        @if(auth()->user()->isAdmin())
                            <a href="{{ route('admin.dashboard') }}" class="text-[#181311] text-sm font-medium leading-normal">Admin</a>
                        @else
                            <a href="{{ route('dashboard') }}" class="text-[#181311] text-sm font-medium leading-normal">Dashboard</a>
                        @endif
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#d44211] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                                <span class="truncate">Logout</span>
                            </button>
                        </form>
                    </div>
                @endguest
            </div>
        </header>
    </div>
</nav>
