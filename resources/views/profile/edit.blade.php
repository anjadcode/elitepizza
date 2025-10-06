@extends('layouts.user-dashboard')

@section('user-content')
<div class="p-6">
    <h2 class="text-2xl font-bold text-[#181311] mb-6">Profile Settings</h2>
    
    <div class="space-y-6">
        <div class="bg-white rounded-lg shadow-sm border border-[#f4f1f0] p-6">
            <h3 class="text-lg font-semibold text-[#181311] mb-4">Profile Information</h3>
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm border border-[#f4f1f0] p-6">
            <h3 class="text-lg font-semibold text-[#181311] mb-4">Update Password</h3>
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm border border-[#f4f1f0] p-6">
            <h3 class="text-lg font-semibold text-[#181311] mb-4">Delete Account</h3>
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection
