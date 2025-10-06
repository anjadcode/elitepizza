@extends('layouts.app')

@section('content')
<div class="relative flex h-auto min-h-screen w-full flex-col bg-white group/design-root overflow-x-hidden" style='font-family: Manrope, "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
        <div class="gap-1 px-6 flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col w-80">
                <div class="flex h-full min-h-[700px] flex-col justify-between bg-white p-4">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col">
                            <h1 class="text-[#181311] text-base font-medium leading-normal">Elite Pizza Class</h1>
                            <p class="text-[#896b61] text-sm font-normal leading-normal">User Dashboard</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->is('dashboard') ? 'bg-[#f4f1f0]' : '' }}">
                                <div class="text-[#181311]" data-icon="House" data-size="24px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H96a16,16,0,0,0,16-16V160h32v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z"
                                        ></path>
                                    </svg>
                                </div>
                                <p class="text-[#181311] text-sm font-medium leading-normal">Dashboard</p>
                            </a>
                            <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->is('profile*') ? 'bg-[#f4f1f0]' : '' }}">
                                <div class="text-[#181311]" data-icon="User" data-size="24px" data-weight="regular">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"
                                        ></path>
                                    </svg>
                                </div>
                                <p class="text-[#181311] text-sm font-medium leading-normal">Profile</p>
                            </a>
                            <a href="{{ route('user.schedule') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->is('user/schedule*') ? 'bg-[#f4f1f0]' : '' }}">
                                <div class="text-[#181311]" data-icon="Calendar" data-size="24px" data-weight="regular">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"
                                        ></path>
                                    </svg>
                                </div>
                                <p class="text-[#181311] text-sm font-medium leading-normal">Schedule</p>
                            </a>
                            <a href="{{ route('user.instructors') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->is('user/instructors*') ? 'bg-[#f4f1f0]' : '' }}">
                                <div class="text-[#181311]" data-icon="User" data-size="24px" data-weight="regular">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"
                                        ></path>
                                    </svg>
                                </div>
                                <p class="text-[#181311] text-sm font-medium leading-normal">Instructors</p>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#f4f1f0] w-full text-left">
                                <div class="text-[#181311]" data-icon="Logout" data-size="24px" data-weight="regular">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M224,104v48a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0ZM216,16H72A64,64,0,0,0,8,80v96A64,64,0,0,0,72,240h88a8,8,0,0,1,0,16H72a80,80,0,0,1-80-80V80A80,80,0,0,1,72,0H216a8,8,0,0,1,0,16ZM150.34,81.66a8,8,0,0,0-11.32,11.31L181.66,136l-42.64,42.63a8,8,0,0,0,11.32,11.32l48-48a8,8,0,0,0,0-11.32Z"
                                        ></path>
                                    </svg>
                                </div>
                                <p class="text-[#181311] text-sm font-medium leading-normal">Logout</p>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Main Content Area -->
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                @yield('user-content')
            </div>
        </div>
    </div>
</div>
@endsection
