@extends('layouts.user-dashboard')

@section('user-content')
<div class="p-6">
    <h2 class="text-2xl font-bold text-[#181311] mb-6">Welcome to Your Dashboard</h2>
    
    <div class="bg-white rounded-lg shadow-sm p-6">
        <p class="text-[#181311] text-lg mb-4">Welcome to your Elite Pizza Class dashboard!</p>
        <p class="text-[#896b61]">Here you can manage your profile, view class schedules, and learn about our instructors.</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-lg font-semibold text-[#181311] mb-2">Profile</h3>
            <p class="text-[#896b61] text-sm mb-4">Manage your personal information and account settings.</p>
            <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-4 py-2 bg-[#d44211] text-white text-sm font-medium rounded-lg hover:bg-[#b3350f]">
                Edit Profile
            </a>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-lg font-semibold text-[#181311] mb-2">Schedule</h3>
            <p class="text-[#896b61] text-sm mb-4">View and manage your class schedules.</p>
            <a href="{{ route('user.schedule') }}" class="inline-flex items-center px-4 py-2 bg-[#d44211] text-white text-sm font-medium rounded-lg hover:bg-[#b3350f]">
                View Schedule
            </a>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-lg font-semibold text-[#181311] mb-2">Instructors</h3>
            <p class="text-[#896b61] text-sm mb-4">Meet our talented instructors and learn about their specialties.</p>
            <a href="{{ route('user.instructors') }}" class="inline-flex items-center px-4 py-2 bg-[#d44211] text-white text-sm font-medium rounded-lg hover:bg-[#b3350f]">
                Meet Instructors
            </a>
        </div>
    </div>
</div>
@endsection
