@extends('layouts.admin')

@section('admin-content')
<div class="flex flex-wrap justify-between gap-3 p-4">
    <div class="flex min-w-72 flex-col gap-3">
        <p class="text-[#181311] tracking-light text-[32px] font-bold leading-tight">Inquiries</p>
        <p class="text-[#896b61] text-sm font-normal leading-normal">Manage student questions and contact form submissions for Elite Pizza Class</p>
    </div>
</div>

<div class="px-4 py-3">
    <label class="flex flex-col min-w-40 h-12 w-full">
        <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
            <div class="text-[#896b61] flex border-none bg-[#f4f1f0] items-center justify-center pl-4 rounded-l-lg border-r-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                </svg>
            </div>
            <input placeholder="Search inquiries" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border-none bg-[#f4f1f0] focus:border-none h-full placeholder:text-[#896b61] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal" value=""/>
        </div>
    </label>
</div>

<h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Inquiry List</h2>

<div class="px-4 py-3 @container">
    <div class="flex overflow-hidden rounded-lg border border-[#e6dedb] bg-white">
        <table class="flex-1">
            <thead>
                <tr class="bg-white">
                    <th class="table-b78003b8-61f1-4289-b3cb-7c0ab1520349-column-120 px-4 py-3 text-left text-[#181311] w-[400px] text-sm font-medium leading-normal">Date</th>
                    <th class="table-b78003b8-61f1-4289-b3cb-7c0ab1520349-column-240 px-4 py-3 text-left text-[#181311] w-[400px] text-sm font-medium leading-normal">Name</th>
                    <th class="table-b78003b8-61f1-4289-b3cb-7c0ab1520349-column-360 px-4 py-3 text-left text-[#181311] w-[400px] text-sm font-medium leading-normal">Email</th>
                    <th class="table-b78003b8-61f1-4289-b3cb-7c0ab1520349-column-480 px-4 py-3 text-left text-[#181311] w-[400px] text-sm font-medium leading-normal">Subject</th>
                    <th class="table-b78003b8-61f1-4289-b3cb-7c0ab1520349-column-600 px-4 py-3 text-left text-[#181311] w-60 text-sm font-medium leading-normal">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($inquiries as $inquiry)
                <tr class="border-t border-t-[#e6dedb]">
                    <td class="table-b78003b8-61f1-4289-b3cb-7c0ab1520349-column-120 h-[72px] px-4 py-2 w-[400px] text-[#896b61] text-sm font-normal leading-normal">
                        {{ $inquiry->created_at->format('Y-m-d') }}
                    </td>
                    <td class="table-b78003b8-61f1-4289-b3cb-7c0ab1520349-column-240 h-[72px] px-4 py-2 w-[400px] text-[#181311] text-sm font-normal leading-normal">
                        {{ $inquiry->name }}
                    </td>
                    <td class="table-b78003b8-61f1-4289-b3cb-7c0ab1520349-column-360 h-[72px] px-4 py-2 w-[400px] text-[#896b61] text-sm font-normal leading-normal">
                        {{ $inquiry->email }}
                    </td>
                    <td class="table-b78003b8-61f1-4289-b3cb-7c0ab1520349-column-480 h-[72px] px-4 py-2 w-[400px] text-[#896b61] text-sm font-normal leading-normal">
                        {{ $inquiry->subject }}
                    </td>
                    <td class="table-b78003b8-61f1-4289-b3cb-7c0ab1520349-column-600 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                        <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f4f1f0] text-[#181311] text-sm font-medium leading-normal w-full">
                            <span class="truncate">{{ $inquiry->status ?? 'Open' }}</span>
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-4 py-8 text-center text-[#896b61] text-sm font-normal leading-normal">
                        No inquiries found.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <style>
        @container(max-width:120px){.table-b78003b8-61f1-4289-b3cb-7c0ab1520349-column-120{display: none;}}
        @container(max-width:240px){.table-b78003b8-61f1-4289-b3cb-7c0ab1520349-column-240{display: none;}}
        @container(max-width:360px){.table-b78003b8-61f1-4289-b3cb-7c0ab1520349-column-360{display: none;}}
        @container(max-width:480px){.table-b78003b8-61f1-4289-b3cb-7c0ab1520349-column-480{display: none;}}
        @container(max-width:600px){.table-b78003b8-61f1-4289-b3cb-7c0ab1520349-column-600{display: none;}}
    </style>
</div>
@endsection
