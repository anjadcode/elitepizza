@extends('layouts.admin')

@section('admin-content')
<div class="px-4 flex flex-1 justify-center py-5">
    <div class="layout-content-container flex flex-col flex-1">
        <div class="flex flex-wrap justify-between gap-3 p-4">
            <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#181311] tracking-light text-[32px] font-bold leading-tight">Admin Dashboard</p>
                <p class="text-[#896b61] text-sm font-normal leading-normal">Manage your Elite Pizza Class</p>
            </div>
        </div>
        <div class="flex flex-wrap gap-4 p-4">
            <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#e6dedb]">
                <p class="text-[#181311] text-base font-medium leading-normal">Total Registrations</p>
                <p class="text-[#181311] tracking-light text-2xl font-bold leading-tight">250</p>
            </div>
            <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#e6dedb]">
                <p class="text-[#181311] text-base font-medium leading-normal">Upcoming Classes</p>
                <p class="text-[#181311] tracking-light text-2xl font-bold leading-tight">15</p>
            </div>
            <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#e6dedb]">
                <p class="text-[#181311] text-base font-medium leading-normal">Active Instructors</p>
                <p class="text-[#181311] tracking-light text-2xl font-bold leading-tight">5</p>
            </div>
        </div>
        <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Key Metrics</h2>
        <div class="flex flex-wrap gap-4 px-4 py-6">
            <div class="flex min-w-72 flex-1 flex-col gap-2">
                <p class="text-[#181311] text-base font-medium leading-normal">Registrations Over Time</p>
                <p class="text-[#181311] tracking-light text-[32px] font-bold leading-tight truncate">+15%</p>
                <div class="flex gap-1">
                    <p class="text-[#896b61] text-base font-normal leading-normal">Last 30 Days</p>
                    <p class="text-[#07880b] text-base font-medium leading-normal">+15%</p>
                </div>
                <div class="flex min-h-[180px] flex-1 flex-col gap-8 py-4">
                    <svg width="100%" height="148" viewBox="-3 0 478 150" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <path
                            d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25V149H326.769H0V109Z"
                            fill="url(#paint0_linear_1131_5935)"
                        ></path>
                        <path
                            d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25"
                            stroke="#896b61"
                            stroke-width="3"
                            stroke-linecap="round"
                        ></path>
                        <defs>
                            <linearGradient id="paint0_linear_1131_5935" x1="236" y1="1" x2="236" y2="149" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#f4f1f0"></stop>
                                <stop offset="1" stop-color="#f4f1f0" stop-opacity="0"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                    <div class="flex justify-around">
                        <p class="text-[#896b61] text-[13px] font-bold leading-normal tracking-[0.015em]">Week 1</p>
                        <p class="text-[#896b61] text-[13px] font-bold leading-normal tracking-[0.015em]">Week 2</p>
                        <p class="text-[#896b61] text-[13px] font-bold leading-normal tracking-[0.015em]">Week 3</p>
                        <p class="text-[#896b61] text-[13px] font-bold leading-normal tracking-[0.015em]">Week 4</p>
                    </div>
                </div>
            </div>
            <div class="flex min-w-72 flex-1 flex-col gap-2">
                <p class="text-[#181311] text-base font-medium leading-normal">Class Attendance</p>
                <p class="text-[#181311] tracking-light text-[32px] font-bold leading-tight truncate">+10%</p>
                <div class="flex gap-1">
                    <p class="text-[#896b61] text-base font-normal leading-normal">Last 30 Days</p>
                    <p class="text-[#07880b] text-base font-medium leading-normal">+10%</p>
                </div>
                <div class="grid min-h-[180px] grid-flow-col gap-6 grid-rows-[1fr_auto] items-end justify-items-center px-3">
                    <div class="border-[#896b61] bg-[#f4f1f0] border-t-2 w-full" style="height: 60%;"></div>
                    <p class="text-[#896b61] text-[13px] font-bold leading-normal tracking-[0.015em]">Class 1</p>
                    <div class="border-[#896b61] bg-[#f4f1f0] border-t-2 w-full" style="height: 30%;"></div>
                    <p class="text-[#896b61] text-[13px] font-bold leading-normal tracking-[0.015em]">Class 2</p>
                    <div class="border-[#896b61] bg-[#f4f1f0] border-t-2 w-full" style="height: 10%;"></div>
                    <p class="text-[#896b61] text-[13px] font-bold leading-normal tracking-[0.015em]">Class 3</p>
                    <div class="border-[#896b61] bg-[#f4f1f0] border-t-2 w-full" style="height: 20%;"></div>
                    <p class="text-[#896b61] text-[13px] font-bold leading-normal tracking-[0.015em]">Class 4</p>
                </div>
            </div>
        </div>
        <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Quick Actions</h2>
        <div class="flex justify-stretch">
            <div class="flex flex-1 gap-3 flex-wrap px-4 py-3 justify-start">
                <a href="{{ route('admin.inquiries') }}" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#d44211] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                    <span class="truncate">Manage Inquiries</span>
                </a>
                <a href="{{ route('admin.content') }}" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#f4f1f0] text-[#181311] text-sm font-bold leading-normal tracking-[0.015em]">
                    <span class="truncate">Update Content</span>
                </a>
            </div>
        </div>
        <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Recent Inquiries</h2>
        <div class="px-4 py-3 @container">
            <div class="flex overflow-hidden rounded-lg border border-[#e6dedb] bg-white">
                <table class="flex-1">
                    <thead>
                        <tr class="bg-white">
                            <th class="table-fcfdff1f-d06e-4d11-9306-79c50a9ef4a6-column-120 px-4 py-3 text-left text-[#181311] w-[400px] text-sm font-medium leading-normal">Name</th>
                            <th class="table-fcfdff1f-d06e-4d11-9306-79c50a9ef4a6-column-240 px-4 py-3 text-left text-[#181311] w-[400px] text-sm font-medium leading-normal">Email</th>
                            <th class="table-fcfdff1f-d06e-4d11-9306-79c50a9ef4a6-column-360 px-4 py-3 text-left text-[#181311] w-[400px] text-sm font-medium leading-normal">Subject</th>
                            <th class="table-fcfdff1f-d06e-4d11-9306-79c50a9ef4a6-column-480 px-4 py-3 text-left text-[#181311] w-[400px] text-sm font-medium leading-normal">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($inquiries as $inquiry)
                        <tr class="border-t border-t-[#e6dedb]">
                            <td class="table-fcfdff1f-d06e-4d11-9306-79c50a9ef4a6-column-120 h-[72px] px-4 py-2 w-[400px] text-[#181311] text-sm font-normal leading-normal">
                                {{ $inquiry['name'] }}
                            </td>
                            <td class="table-fcfdff1f-d06e-4d11-9306-79c50a9ef4a6-column-240 h-[72px] px-4 py-2 w-[400px] text-[#896b61] text-sm font-normal leading-normal">
                                {{ $inquiry['email'] }}
                            </td>
                            <td class="table-fcfdff1f-d06e-4d11-9306-79c50a9ef4a6-column-360 h-[72px] px-4 py-2 w-[400px] text-[#896b61] text-sm font-normal leading-normal">
                                {{ $inquiry['subject'] }}
                            </td>
                            <td class="table-fcfdff1f-d06e-4d11-9306-79c50a9ef4a6-column-480 h-[72px] px-4 py-2 w-[400px] text-[#896b61] text-sm font-normal leading-normal">
                                {{ $inquiry['created_at']->format('Y-m-d') }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <style>
                @container(max-width:120px){.table-fcfdff1f-d06e-4d11-9306-79c50a9ef4a6-column-120{display: none;}}
                @container(max-width:240px){.table-fcfdff1f-d06e-4d11-9306-79c50a9ef4a6-column-240{display: none;}}
                @container(max-width:360px){.table-fcfdff1f-d06e-4d11-9306-79c50a9ef4a6-column-360{display: none;}}
                @container(max-width:480px){.table-fcfdff1f-d06e-4d11-9306-79c50a9ef4a6-column-480{display: none;}}
            </style>
        </div>
    </div>
</div>
@endsection
