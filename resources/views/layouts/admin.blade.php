@extends('layouts.app')

@section('content')
<div class="relative flex h-auto min-h-screen w-full flex-col bg-white group/design-root overflow-x-hidden" style='font-family: Manrope, "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
        <div class="gap-1 px-6 flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col w-64">
                <div class="flex h-full min-h-[700px] flex-col justify-between bg-white p-2">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col">
                            <h1 class="text-[#181311] text-base font-medium leading-normal">Elite Pizza Class</h1>
                            <p class="text-[#896b61] text-sm font-normal leading-normal">Admin</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->is('admin/dashboard') ? 'bg-[#f4f1f0]' : '' }}">
                                <div class="text-[#181311]" data-icon="House" data-size="24px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H96a16,16,0,0,0,16-16V160h32v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z"
                                        ></path>
                                    </svg>
                                </div>
                                <p class="text-[#181311] text-sm font-medium leading-normal">Dashboard</p>
                            </a>
                            <a href="{{ route('admin.registration') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->is('admin/registration*') ? 'bg-[#f4f1f0]' : '' }}">
                                <div class="text-[#181311]" data-icon="Users" data-size="24px" data-weight="regular">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"
                                        ></path>
                                    </svg>
                                </div>
                                <p class="text-[#181311] text-sm font-medium leading-normal">Registrations</p>
                            </a>
                            <a href="{{ route('admin.schedule') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->is('admin/schedule*') ? 'bg-[#f4f1f0]' : '' }}">
                                <div class="text-[#181311]" data-icon="Calendar" data-size="24px" data-weight="regular">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"
                                        ></path>
                                    </svg>
                                </div>
                                <p class="text-[#181311] text-sm font-medium leading-normal">Schedule</p>
                            </a>
                            <a href="{{ route('admin.instructors') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->is('admin/instructors*') ? 'bg-[#f4f1f0]' : '' }}">
                                <div class="text-[#181311]" data-icon="User" data-size="24px" data-weight="regular">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"
                                        ></path>
                                    </svg>
                                </div>
                                <p class="text-[#181311] text-sm font-medium leading-normal">Instructors</p>
                            </a>
                            <a href="{{ route('admin.inquiries') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->is('admin/inquiries*') ? 'bg-[#f4f1f0]' : '' }}">
                                <div class="text-[#181311]" data-icon="Question" data-size="24px" data-weight="regular">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M140,180a12,12,0,1,1-12-12A12,12,0,0,1,140,180ZM128,72c-22.06,0-40,16.15-40,36v4a8,8,0,0,0,16,0v-4c0-11,10.77-20,24-20s24,9,24,20-10.77,20-24,20a8,8,0,0,0-8,8v8a8,8,0,0,0,16,0v-.72c18.24-3.35,32-17.9,32-35.28C168,88.15,150.06,72,128,72Zm104,56A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"
                                        ></path>
                                    </svg>
                                </div>
                                <p class="text-[#181311] text-sm font-medium leading-normal">Inquiries</p>
                            </a>
                            <a href="{{ route('admin.content') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->is('admin/content*') ? 'bg-[#f4f1f0]' : '' }}">
                                <div class="text-[#181311]" data-icon="File" data-size="24px" data-weight="regular">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M213.66,82.34l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V88A8,8,0,0,0,213.66,82.34ZM160,51.31,188.69,80H160ZM200,216H56V40h88V88a8,8,0,0,0,8,8h48V216Z"
                                        ></path>
                                    </svg>
                                </div>
                                <p class="text-[#181311] text-sm font-medium leading-normal">Content</p>
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
            <div class="layout-content-container flex flex-col flex-1 ml-2">
                @yield('admin-content')
            </div>
        </div>
    </div>
</div>
@endsection
