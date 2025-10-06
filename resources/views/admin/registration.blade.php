@extends('layouts.admin')

@section('admin-content')
<div class="px-4 flex flex-1 justify-center py-5">
    <div class="layout-content-container flex flex-col flex-1">
        <div class="flex flex-wrap justify-between gap-3 p-4">
            <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#181311] tracking-light text-[32px] font-bold leading-tight">Manage Registration</p>
                <p class="text-[#896b61] text-sm font-normal leading-normal">
                    View and manage class registrations.
                </p>
            </div>
        </div>
        
        <!-- Filter Section -->
        <div class="px-4 py-3">
            <div class="bg-white rounded-lg border border-[#e6dedb] p-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Date Range</label>
                        <input type="date" id="start_date" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 placeholder:text-[#896b61] p-[15px] text-base font-normal leading-normal">
                        <input type="date" id="end_date" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 placeholder:text-[#896b61] p-[15px] text-base font-normal leading-normal mt-2">
                    </div>
                    <div>
                        <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Status</label>
                        <select id="status_filter" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 p-[15px] text-base font-normal leading-normal">
                            <option value="">All Status</option>
                            <option value="pending">Pending</option>
                            <option value="confirmed">Confirmed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Payment Status</label>
                        <select id="payment_filter" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 p-[15px] text-base font-normal leading-normal">
                            <option value="">All Payment</option>
                            <option value="paid">Paid</option>
                            <option value="unpaid">Unpaid</option>
                            <option value="refunded">Refunded</option>
                        </select>
                    </div>
                    <div class="flex items-end">
                        <button onclick="applyFilters()" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#d44211] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                            <span class="truncate">Apply Filters</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Registration Statistics -->
        <div class="px-4 py-3">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="bg-white rounded-lg border border-[#e6dedb] p-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-[#d44211] bg-opacity-10 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-[#d44211]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[#896b61] text-sm font-normal leading-normal">Total Registrations</p>
                            <p class="text-[#181311] text-2xl font-bold leading-tight">{{ $totalRegistrations }}</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg border border-[#e6dedb] p-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-[#10b981] bg-opacity-10 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-[#10b981]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[#896b61] text-sm font-normal leading-normal">Confirmed</p>
                            <p class="text-[#181311] text-2xl font-bold leading-tight">{{ $confirmedRegistrations }}</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg border border-[#e6dedb] p-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-[#f59e0b] bg-opacity-10 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-[#f59e0b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[#896b61] text-sm font-normal leading-normal">Pending</p>
                            <p class="text-[#181311] text-2xl font-bold leading-tight">{{ $pendingRegistrations }}</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg border border-[#e6dedb] p-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-[#8b5cf6] bg-opacity-10 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-[#8b5cf6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[#896b61] text-sm font-normal leading-normal">Revenue (€)</p>
                            <p class="text-[#181311] text-2xl font-bold leading-tight">{{ number_format($totalRevenue, 2) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Registration List -->
        <div class="px-4 py-3">
            <div class="bg-white rounded-lg border border-[#e6dedb] overflow-hidden">
                <div class="grid grid-cols-12 gap-4 p-4 bg-[#f9f7f6] border-b border-[#e6dedb]">
                    <div class="col-span-2">
                        <p class="text-[#181311] text-sm font-medium leading-normal">ID</p>
                    </div>
                    <div class="col-span-3">
                        <p class="text-[#181311] text-sm font-medium leading-normal">Student</p>
                    </div>
                    <div class="col-span-2">
                        <p class="text-[#181311] text-sm font-medium leading-normal">Class</p>
                    </div>
                    <div class="col-span-1">
                        <p class="text-[#181311] text-sm font-medium leading-normal">Status</p>
                    </div>
                    <div class="col-span-1">
                        <p class="text-[#181311] text-sm font-medium leading-normal">Payment</p>
                    </div>
                    <div class="col-span-1">
                        <p class="text-[#181311] text-sm font-medium leading-normal">Date</p>
                    </div>
                    <div class="col-span-2">
                        <p class="text-[#181311] text-sm font-medium leading-normal">Actions</p>
                    </div>
                </div>
                
                @forelse($registrations as $registration)
                <div class="grid grid-cols-12 gap-4 p-4 border-b border-[#e6dedb] last:border-b-0">
                    <div class="col-span-2">
                        <p class="text-[#181311] text-base font-normal leading-normal">{{ $registration->id }}</p>
                    </div>
                    <div class="col-span-3">
                        <p class="text-[#181311] text-base font-normal leading-normal">{{ $registration->user->name }}</p>
                        <p class="text-[#896b61] text-sm font-normal leading-normal">{{ $registration->user->email }}</p>
                    </div>
                    <div class="col-span-2">
                        <p class="text-[#181311] text-base font-normal leading-normal">{{ $registration->class->title }}</p>
                        <p class="text-[#896b61] text-sm font-normal leading-normal">{{ $registration->class->date->format('M j') }}</p>
                    </div>
                    <div class="col-span-1">
                        <span class="px-2 py-1 rounded text-xs font-medium
                            @if($registration->status === 'confirmed')
                                bg-green-100 text-green-800
                            @elseif($registration->status === 'pending')
                                bg-yellow-100 text-yellow-800
                            @else
                                bg-red-100 text-red-800
                            @endif
                        ">
                            {{ ucfirst($registration->status) }}
                        </span>
                    </div>
                    <div class="col-span-1">
                        <span class="px-2 py-1 rounded text-xs font-medium
                            @if($registration->payment_status === 'paid')
                                bg-green-100 text-green-800
                            @elseif($registration->payment_status === 'unpaid')
                                bg-red-100 text-red-800
                            @else
                                bg-gray-100 text-gray-800
                            @endif
                        ">
                            {{ ucfirst($registration->payment_status) }}
                        </span>
                    </div>
                    <div class="col-span-1">
                        <p class="text-[#181311] text-sm font-normal leading-normal">{{ $registration->created_at->format('M j') }}</p>
                    </div>
                    <div class="col-span-2">
                        <div class="flex gap-2">
                            @if($registration->status === 'pending')
                                <form method="POST" action="{{ route('admin.registration.confirm', $registration->id) }}">
                                    @csrf
                                    <button type="submit" class="flex min-w-[60px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-3 bg-green-600 text-white text-xs font-bold leading-normal tracking-[0.015em]">
                                        <span class="truncate">Confirm</span>
                                    </button>
                                </form>
                            @endif
                            
                            @if($registration->status !== 'cancelled')
                                <form method="POST" action="{{ route('admin.registration.cancel', $registration->id) }}" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    <button type="submit" class="flex min-w-[60px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-3 bg-red-600 text-white text-xs font-bold leading-normal tracking-[0.015em]">
                                        <span class="truncate">Cancel</span>
                                    </button>
                                </form>
                            @endif
                            
                            <a href="{{ route('admin.registration.show', $registration->id) }}" class="flex min-w-[60px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-3 bg-[#d44211] text-white text-xs font-bold leading-normal tracking-[0.015em]">
                                <span class="truncate">View</span>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="p-8 text-center">
                    <p class="text-[#896b61] text-base font-normal leading-normal">No registrations found.</p>
                </div>
                @endforelse
            </div>
        </div>
        
        <!-- Pagination -->
        @if($registrations->hasPages())
        <div class="px-4 py-3">
            <div class="flex justify-center">
                {{ $registrations->links() }}
            </div>
        </div>
        @endif
    </div>
</div>

<script>
    function applyFilters() {
        // Implement filter logic here
        const startDate = document.getElementById('start_date').value;
        const endDate = document.getElementById('end_date').value;
        const status = document.getElementById('status_filter').value;
        const payment = document.getElementById('payment_filter').value;
        
        // Here you would typically make an AJAX request to filter the registrations
        console.log('Applying filters:', { startDate, endDate, status, payment });
        
        // For now, just alert the user that filters would be applied
        alert('Filters would be applied in a real implementation');
    }
</script>
@endsection
