@extends('layouts.user-dashboard')

@section('user-content')
<div class="p-6">
    <h2 class="text-2xl font-bold text-[#181311] mb-6">Class Schedule</h2>
    
    <div class="bg-white rounded-lg shadow-sm p-6">
        <h3 class="text-lg font-semibold text-[#181311] mb-4">Upcoming Classes</h3>
        
        <div class="space-y-4">
            @forelse ($classes as $class)
            <div class="border border-[#f4f1f0] rounded-lg p-4">
                <div class="flex justify-between items-start mb-2">
                    <h4 class="font-semibold text-[#181311]">{{ $class->title }}</h4>
                    <span class="@if($class->type === 'beginner')bg-[#d44211]@elseif($class->type === 'intermediate')bg-[#896b61]@else bg-[#2c3e50]@endif text-white text-xs px-2 py-1 rounded">
                        {{ ucfirst($class->type) }}
                    </span>
                </div>
                <p class="text-[#896b61] text-sm mb-2">{{ $class->description }}</p>
                <div class="flex items-center gap-4 text-sm text-[#896b61] mb-3">
                    <span class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M224,104v48a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0ZM216,16H72A64,64,0,0,0,8,80v96A64,64,0,0,0,72,240h88a8,8,0,0,1,0,16H72a80,80,0,0,1-80-80V80A80,80,0,0,1,72,0H216a8,8,0,0,1,0,16ZM150.34,81.66a8,8,0,0,0-11.32,11.31L181.66,136l-42.64,42.63a8,8,0,0,0,11.32,11.32l48-48a8,8,0,0,0,0-11.32Z"/>
                        </svg>
                        {{ $class->getFormattedDateAttribute() }}, {{ $class->getFormattedStartTimeAttribute() }}
                    </span>
                    <span class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M232,128a104,104,0,1,1-104-104A104.11,104.11,0,0,1,232,128ZM128,32a96,96,0,1,0,96,96A96.11,96.11,0,0,0,128,32Zm16,96a8,8,0,0,1-16,0V128a8,8,0,0,1,16,0Zm0-48a8,8,0,0,1-16,0V96a8,8,0,0,1,16,0Z"/>
                        </svg>
                        {{ $class->duration }} hours
                    </span>
                    @if($class->instructor)
                    <span class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M128,24A104,104,0,1,0,232,128,104.13,104.13,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216ZM128,88a40,40,0,1,0,40,40A40,40,0,0,0,128,88Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,152Zm64-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h16A8,8,0,0,1,192,128Z"/>
                        </svg>
                        {{ $class->instructor->name }}
                    </span>
                    @endif
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-[#896b61]">
                        @if($class->isFull())
                            <span class="text-[#d44211]">Class Full</span>
                        @else
                            {{ $class->availableSpots() }} spots available
                        @endif
                    </span>
                    @if($class->status === 'available' && !$class->isFull())
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-3 py-1 bg-[#d44211] text-white text-sm font-medium rounded hover:bg-[#b3350f]">
                        Register Now
                    </a>
                    @endif
                </div>
            </div>
            @empty
            <div class="text-center py-8">
                <p class="text-[#896b61]">No classes available at the moment.</p>
            </div>
            @endforelse
        </div>
        
        <div class="mt-6">
            <h4 class="font-semibold text-[#181311] mb-3">Register for Classes</h4>
            <p class="text-[#896b61] text-sm mb-4">Ready to join a class? Contact us to register for any of the upcoming sessions.</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center px-4 py-2 bg-[#d44211] text-white text-sm font-medium rounded-lg hover:bg-[#b3350f]">
                Contact Us to Register
            </a>
        </div>
    </div>
</div>
@endsection
