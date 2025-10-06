@extends('layouts.admin')

@section('title', 'Inquiry Details - Admin')

@yield('admin-content')
<div class="flex flex-wrap justify-between gap-3 p-4">
    <div class="flex min-w-72 flex-col gap-3">
        <p class="text-[#181311] tracking-light text-[32px] font-bold leading-tight">Inquiry Details</p>
        <p class="text-[#896b61] text-sm font-normal leading-normal">View and manage individual inquiry details</p>
    </div>
    <div class="flex gap-2">
        <a href="{{ route('admin.inquiries') }}" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f4f1f0] text-[#181311] text-sm font-medium leading-normal">
            Back to List
        </a>
    </div>
</div>

@if ($inquiry)
<div class="px-4 py-3">
    <div class="flex overflow-hidden rounded-lg border border-[#e6dedb] bg-white">
        <div class="flex-1 p-6">
            <div class="space-y-6">
                <div>
                    <h3 class="text-[#181311] text-[18px] font-medium leading-normal mb-2">Inquiry Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="text-[#896b61] text-xs font-medium leading-normal">Name</label>
                            <p class="text-[#181311] text-sm font-normal leading-normal mt-1">{{ $inquiry->name }}</p>
                        </div>
                        <div>
                            <label class="text-[#896b61] text-xs font-medium leading-normal">Email</label>
                            <p class="text-[#181311] text-sm font-normal leading-normal mt-1">{{ $inquiry->email }}</p>
                        </div>
                        <div>
                            <label class="text-[#896b61] text-xs font-medium leading-normal">Subject</label>
                            <p class="text-[#181311] text-sm font-normal leading-normal mt-1">{{ $inquiry->subject }}</p>
                        </div>
                        <div>
                            <label class="text-[#896b61] text-xs font-medium leading-normal">Status</label>
                            <p class="text-[#181311] text-sm font-normal leading-normal mt-1">{{ $inquiry->status ?? 'Open' }}</p>
                        </div>
                        <div class="md:col-span-2">
                            <label class="text-[#896b61] text-xs font-medium leading-normal">Date Submitted</label>
                            <p class="text-[#181311] text-sm font-normal leading-normal mt-1">{{ $inquiry->created_at->format('Y-m-d H:i:s') }}</p>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-[#181311] text-[18px] font-medium leading-normal mb-2">Message</h3>
                    <div class="bg-[#f4f1f0] rounded-lg p-4">
                        <p class="text-[#181311] text-sm font-normal leading-normal whitespace-pre-wrap">{{ $inquiry->message }}</p>
                    </div>
                </div>
                
                <div class="flex gap-3">
                    <form method="POST" action="{{ route('admin.inquiries.reply', $inquiry->id) }}">
                        @csrf
                        <button type="submit" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#181311] text-white text-sm font-medium leading-normal">
                            Send Reply
                        </button>
                    </form>
                    <form method="POST" action="{{ route('admin.inquiries.destroy', $inquiry->id) }}" onsubmit="return confirm('Are you sure you want to delete this inquiry?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#ef4444] text-white text-sm font-medium leading-normal">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="px-4 py-3">
    <div class="flex overflow-hidden rounded-lg border border-[#e6dedb] bg-white">
        <div class="flex-1 p-6">
            <p class="text-[#896b61] text-sm font-normal leading-normal">Inquiry not found.</p>
        </div>
    </div>
</div>
@endif
