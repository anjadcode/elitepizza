<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details - Elite Pizza Admin</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&family=Epilogue%3Awght%40400%3B500%3B700%3B900&family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="relative flex h-auto min-h-screen w-full flex-col bg-white group/design-root overflow-x-hidden" style='font-family: Epilogue, "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f4f1f0] px-10 py-3">
                <div class="flex items-center gap-4 text-[#181311]">
                    <div class="size-4">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 4C25.7818 14.2173 33.7827 22.2182 44 24C33.7827 25.7818 25.7818 33.7827 24 44C22.2182 33.7827 14.2173 25.7818 4 24C14.2173 22.2182 22.2182 14.2173 24 4Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <h2 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em]">Elite Pizza Admin</h2>
                </div>
                <div class="flex flex-1 justify-end gap-8">
                    <div class="flex items-center gap-9">
                        <a href="{{ route('admin.dashboard') }}" class="text-[#181311] text-sm font-medium leading-normal">Dashboard</a>
                        <a href="{{ route('admin.content') }}" class="text-[#181311] text-sm font-medium leading-normal">Content</a>
                        <a href="{{ route('admin.inquiries') }}" class="text-[#181311] text-sm font-medium leading-normal">Inquiries</a>
                        <a href="{{ route('admin.instructors') }}" class="text-[#181311] text-sm font-medium leading-normal">Instructors</a>
                        <a href="{{ route('admin.schedule') }}" class="text-[#181311] text-sm font-medium leading-normal">Schedule</a>
                        <a href="{{ route('admin.registration') }}" class="text-[#181311] text-sm font-medium leading-normal">Registration</a>
                    </div>
                    <div class="flex items-center gap-4">
                        <a href="{{ route('dashboard') }}" class="text-[#181311] text-sm font-medium leading-normal">User Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#d44211] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                                <span class="truncate">Logout</span>
                            </button>
                        </form>
                    </div>
                </div>
            </header>
            
            <div class="px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="flex flex-wrap justify-between gap-3 p-4">
                        <div class="flex min-w-72 flex-col gap-3">
                            <div class="flex items-center gap-3">
                                <a href="{{ route('admin.registration') }}" class="text-[#896b61] text-sm font-medium leading-normal">← Back to Registrations</a>
                                <p class="text-[#181311] tracking-light text-[32px] font-bold leading-tight">Registration Details</p>
                            </div>
                            <p class="text-[#896b61] text-sm font-normal leading-normal">
                                View and manage registration details for {{ $registration->user->name }}.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Registration Details -->
                    <div class="px-4 py-3">
                        <div class="bg-white rounded-lg border border-[#e6dedb] p-6">
                            <!-- Header Information -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <h3 class="text-[#181311] text-lg font-semibold leading-normal mb-3">Registration #{{ $registration->id }}</h3>
                                    <div class="space-y-2">
                                        <div class="flex justify-between">
                                            <span class="text-[#896b61] text-sm font-normal leading-normal">Status:</span>
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
                                        <div class="flex justify-between">
                                            <span class="text-[#896b61] text-sm font-normal leading-normal">Payment Status:</span>
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
                                        <div class="flex justify-between">
                                            <span class="text-[#896b61] text-sm font-normal leading-normal">Payment Amount:</span>
                                            <span class="text-[#181311] text-sm font-medium leading-normal">€{{ number_format($registration->payment_amount, 2) }}</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-[#896b61] text-sm font-normal leading-normal">Created:</span>
                                            <span class="text-[#181311] text-sm font-medium leading-normal">{{ $registration->created_at->format('M j, Y g:i A') }}</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-[#896b61] text-sm font-normal leading-normal">Updated:</span>
                                            <span class="text-[#181311] text-sm font-medium leading-normal">{{ $registration->updated_at->format('M j, Y g:i A') }}</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Actions -->
                                <div>
                                    <h3 class="text-[#181311] text-lg font-semibold leading-normal mb-3">Actions</h3>
                                    <div class="space-y-3">
                                        @if($registration->status === 'pending')
                                            <form method="POST" action="{{ route('admin.registration.confirm', $registration->id) }}">
                                                @csrf
                                                <button type="submit" class="flex w-full min-w-[120px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-green-600 text-white text-sm font-bold leading-normal tracking-[0.015em]">
                                                    <span class="truncate">Confirm Registration</span>
                                                </button>
                                            </form>
                                        @endif
                                        
                                        @if($registration->status !== 'cancelled')
                                            <form method="POST" action="{{ route('admin.registration.cancel', $registration->id) }}" onsubmit="return confirm('Are you sure you want to cancel this registration?')">
                                                @csrf
                                                <button type="submit" class="flex w-full min-w-[120px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-red-600 text-white text-sm font-bold leading-normal tracking-[0.015em]">
                                                    <span class="truncate">Cancel Registration</span>
                                                </button>
                                            </form>
                                        @endif
                                        
                                        <form method="POST" action="{{ route('admin.registration.destroy', $registration->id) }}" onsubmit="return confirm('Are you sure you want to delete this registration? This action cannot be undone.')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="flex w-full min-w-[120px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-gray-600 text-white text-sm font-bold leading-normal tracking-[0.015em]">
                                                <span class="truncate">Delete Registration</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Student Information -->
                            <div class="border-t border-[#e6dedb] pt-6 mb-6">
                                <h3 class="text-[#181311] text-lg font-semibold leading-normal mb-4">Student Information</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="text-[#896b61] text-sm font-normal leading-normal">Name:</label>
                                        <p class="text-[#181311] text-base font-medium leading-normal">{{ $registration->user->name }}</p>
                                    </div>
                                    <div>
                                        <label class="text-[#896b61] text-sm font-normal leading-normal">Email:</label>
                                        <p class="text-[#181311] text-base font-medium leading-normal">{{ $registration->user->email }}</p>
                                    </div>
                                    @if($registration->user->phone)
                                        <div>
                                            <label class="text-[#896b61] text-sm font-normal leading-normal">Phone:</label>
                                            <p class="text-[#181311] text-base font-medium leading-normal">{{ $registration->user->phone }}</p>
                                        </div>
                                    @endif
                                    @if($registration->user->address)
                                        <div>
                                            <label class="text-[#896b61] text-sm font-normal leading-normal">Address:</label>
                                            <p class="text-[#181311] text-base font-medium leading-normal">{{ $registration->user->address }}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            
                            <!-- Class Information -->
                            <div class="border-t border-[#e6dedb] pt-6 mb-6">
                                <h3 class="text-[#181311] text-lg font-semibold leading-normal mb-4">Class Information</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="text-[#896b61] text-sm font-normal leading-normal">Title:</label>
                                        <p class="text-[#181311] text-base font-medium leading-normal">{{ $registration->class->title }}</p>
                                    </div>
                                    <div>
                                        <label class="text-[#896b61] text-sm font-normal leading-normal">Type:</label>
                                        <p class="text-[#181311] text-base font-medium leading-normal">{{ ucfirst($registration->class->type) }}</p>
                                    </div>
                                    <div>
                                        <label class="text-[#896b61] text-sm font-normal leading-normal">Date:</label>
                                        <p class="text-[#181311] text-base font-medium leading-normal">{{ $registration->class->formatted_date }}</p>
                                    </div>
                                    <div>
                                        <label class="text-[#896b61] text-sm font-normal leading-normal">Start Time:</label>
                                        <p class="text-[#181311] text-base font-medium leading-normal">{{ $registration->class->formatted_start_time }}</p>
                                    </div>
                                    <div>
                                        <label class="text-[#896b61] text-sm font-normal leading-normal">Duration:</label>
                                        <p class="text-[#181311] text-base font-medium leading-normal">{{ $registration->class->duration }} hours</p>
                                    </div>
                                    <div>
                                        <label class="text-[#896b61] text-sm font-normal leading-normal">Price:</label>
                                        <p class="text-[#181311] text-base font-medium leading-normal">€{{ number_format($registration->class->price, 2) }}</p>
                                    </div>
                                    <div>
                                        <label class="text-[#896b61] text-sm font-normal leading-normal">Max Students:</label>
                                        <p class="text-[#181311] text-base font-medium leading-normal">{{ $registration->class->max_students }}</p>
                                    </div>
                                    <div>
                                        <label class="text-[#896b61] text-sm font-normal leading-normal">Available Spots:</label>
                                        <p class="text-[#181311] text-base font-medium leading-normal">{{ $registration->class->availableSpots() }}</p>
                                    </div>
                                </div>
                                @if($registration->class->description)
                                    <div class="mt-4">
                                        <label class="text-[#896b61] text-sm font-normal leading-normal">Description:</label>
                                        <p class="text-[#181311] text-base font-medium leading-normal mt-1">{{ $registration->class->description }}</p>
                                    </div>
                                @endif
                            </div>
                            
                            <!-- Notes -->
                            @if($registration->notes)
                            <div class="border-t border-[#e6dedb] pt-6">
                                <h3 class="text-[#181311] text-lg font-semibold leading-normal mb-4">Notes</h3>
                                <div class="bg-[#f9f7f6] rounded-lg p-4">
                                    <p class="text-[#181311] text-base font-normal leading-normal">{{ $registration->notes }}</p>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
            <footer class="flex justify-center">
                <div class="flex max-w-[960px] flex-1 flex-col">
                    <footer class="flex flex-col gap-6 px-5 py-10 text-center @container">
                        <div class="flex flex-wrap items-center justify-center gap-6 @[480px]:flex-row @[480px]:justify-around">
                            <a href="{{ route('admin.dashboard') }}" class="text-[#896b61] text-base font-normal leading-normal min-w-40">Dashboard</a>
                            <a href="{{ route('admin.content') }}" class="text-[#896b61] text-base font-normal leading-normal min-w-40">Content</a>
                            <a href="{{ route('admin.inquiries') }}" class="text-[#896b61] text-base font-normal leading-normal min-w-40">Inquiries</a>
                            <a href="{{ route('admin.instructors') }}" class="text-[#896b61] text-base font-normal leading-normal min-w-40">Instructors</a>
                            <a href="{{ route('admin.schedule') }}" class="text-[#896b61] text-base font-normal leading-normal min-w-40">Schedule</a>
                            <a href="{{ route('admin.registration') }}" class="text-[#896b61] text-base font-normal leading-normal min-w-40">Registration</a>
                        </div>
                        <p class="text-[#896b61] text-base font-normal leading-normal">© 2024 Elite Pizza. All rights reserved.</p>
                    </footer>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
