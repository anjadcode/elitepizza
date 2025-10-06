@extends('layouts.user-dashboard')

@section('user-content')
<div class="p-6">
    <h2 class="text-2xl font-bold text-[#181311] mb-6">Our Instructors</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($instructors as $instructor)
        <div class="bg-white rounded-lg shadow-sm border border-[#f4f1f0] overflow-hidden">
            <div class="h-48 bg-[#d44211] flex items-center justify-center">
                @if($instructor->photo_url)
                    <img src="{{ $instructor->photo_url }}" alt="{{ $instructor->name }}" class="w-full h-full object-cover">
                @else
                    <img src="https://picsum.photos/seed/{{ $instructor->name }}/300/200.jpg" alt="{{ $instructor->name }}" class="w-full h-full object-cover">
                @endif
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold text-[#181311] mb-2">{{ $instructor->name }}</h3>
                <p class="text-[#896b61] text-sm mb-3">{{ $instructor->specialty }}</p>
                <p class="text-[#181311] text-sm mb-4">{{ $instructor->bio }}</p>
                <div class="flex items-center gap-2">
                    <span class="bg-[#d44211] text-white text-xs px-2 py-1 rounded">{{ $instructor->specialty }}</span>
                    <span class="bg-[#896b61] text-white text-xs px-2 py-1 rounded">{{ $instructor->experience_years }} years experience</span>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-8">
            <p class="text-[#896b61]">No instructors available at the moment.</p>
        </div>
        @endforelse
    </div>
    
    <div class="mt-8 bg-white rounded-lg shadow-sm p-6">
        <h3 class="text-lg font-semibold text-[#181311] mb-4">Why Choose Our Instructors?</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex items-start gap-3">
                <div class="text-[#d44211] mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-[#181311] mb-1">Expert Experience</h4>
                    <p class="text-[#896b61] text-sm">Our instructors bring decades of combined experience in authentic Italian pizza making.</p>
                </div>
            </div>
            <div class="flex items-start gap-3">
                <div class="text-[#d44211] mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-[#181311] mb-1">Small Class Sizes</h4>
                    <p class="text-[#896b61] text-sm">Personalized attention with maximum 8 students per class for optimal learning.</p>
                </div>
            </div>
            <div class="flex items-start gap-3">
                <div class="text-[#d44211] mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-[#181311] mb-1">Hands-On Learning</h4>
                    <p class="text-[#896b61] text-sm">Get hands-on experience with professional equipment and authentic ingredients.</p>
                </div>
            </div>
            <div class="flex items-start gap-3">
                <div class="text-[#d44211] mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-[#181311] mb-1">Lifetime Support</h4>
                    <p class="text-[#896b61] text-sm">Ongoing support and recipe access after completing your course.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
