@extends('layouts.admin')

@section('admin-content')
<div class="px-4 flex flex-1 justify-center py-5">
    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <div class="flex flex-wrap justify-between gap-3 p-4">
            <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#181311] tracking-light text-[32px] font-bold leading-tight">Manage Schedule</p>
                <p class="text-[#896b61] text-sm font-normal leading-normal">
                    Add, edit, and manage pizza class schedules.
                </p>
            </div>
            <div>
                <a href="{{ route('admin.schedule.create') }}" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#d44211] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                    <span class="truncate">Add Class</span>
                </a>
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
                        <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Instructor</label>
                        <select id="instructor_filter" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 p-[15px] text-base font-normal leading-normal">
                            <option value="">All Instructors</option>
                            @foreach($instructors as $instructor)
                            <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Class Type</label>
                        <select id="class_type_filter" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 p-[15px] text-base font-normal leading-normal">
                            <option value="">All Types</option>
                            <option value="beginner">Beginner</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="advanced">Advanced</option>
                            <option value="workshop">Workshop</option>
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
        
        <!-- Schedule Calendar View -->
        <div class="px-4 py-3">
            <div class="bg-white rounded-lg border border-[#e6dedb] p-4">
                <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] mb-4">Upcoming Classes</h3>
                
                <!-- Schedule List -->
                <div class="space-y-4">
                    @forelse($classes as $class)
                    <div class="border border-[#e6dedb] rounded-lg p-4 hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start">
                            <div class="flex-1">
                                <div class="flex items-center gap-4 mb-2">
                                    <h4 class="text-[#181311] text-lg font-semibold leading-tight">{{ $class->title }}</h4>
                                    <span class="px-2 py-1 bg-[#d44211] text-white text-xs font-bold leading-normal rounded">{{ $class->type }}</span>
                                    <span class="px-2 py-1 bg-[#e6dedb] text-[#896b61] text-xs font-medium leading-normal rounded">{{ $class->duration }} hours</span>
                                </div>
                                <p class="text-[#896b61] text-sm font-normal leading-normal mb-2">{{ $class->description }}</p>
                                <div class="flex items-center gap-6 text-sm">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span class="text-[#181311]">{{ $class->date->format('F j, Y') }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-[#181311]">{{ $class->start_time }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                        <span class="text-[#181311]">{{ $class->instructor->name }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                        <span class="text-[#181311]">{{ $class->max_students }} spots</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-2 ml-4">
                                <a href="{{ route('admin.schedule.edit', $class->id) }}" class="flex min-w-[60px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-3 bg-[#d44211] text-white text-xs font-bold leading-normal tracking-[0.015em]">
                                    <span class="truncate">Edit</span>
                                </a>
                                <form method="POST" action="{{ route('admin.schedule.destroy', $class->id) }}" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="flex min-w-[60px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-3 bg-[#dc2626] text-white text-xs font-bold leading-normal tracking-[0.015em]">
                                        <span class="truncate">Delete</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-8">
                        <p class="text-[#896b61] text-base font-normal leading-normal">No scheduled classes found.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
        
        <!-- Add Class Form -->
        <div class="px-4 py-3">
            <div class="bg-white rounded-lg border border-[#e6dedb] p-6">
                <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] mb-4">Add New Class</h3>
                <form method="POST" action="{{ route('admin.schedule.store') }}" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Class Title</label>
                            <input type="text" name="title" required class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 placeholder:text-[#896b61] p-[15px] text-base font-normal leading-normal">
                        </div>
                        <div>
                            <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Class Type</label>
                            <select name="type" required class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 p-[15px] text-base font-normal leading-normal">
                                <option value="">Select Type</option>
                                <option value="beginner">Beginner</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced">Advanced</option>
                                <option value="workshop">Workshop</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Date</label>
                            <input type="date" name="date" required class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 placeholder:text-[#896b61] p-[15px] text-base font-normal leading-normal">
                        </div>
                        <div>
                            <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Start Time</label>
                            <input type="time" name="start_time" required class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 placeholder:text-[#896b61] p-[15px] text-base font-normal leading-normal">
                        </div>
                        <div>
                            <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Duration (hours)</label>
                            <input type="number" name="duration" required min="1" step="0.5" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 placeholder:text-[#896b61] p-[15px] text-base font-normal leading-normal">
                        </div>
                        <div>
                            <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Max Students</label>
                            <input type="number" name="max_students" required min="1" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 placeholder:text-[#896b61] p-[15px] text-base font-normal leading-normal">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Description</label>
                            <textarea name="description" rows="3" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] min-h-36 placeholder:text-[#896b61] p-[15px] text-base font-normal leading-normal"></textarea>
                        </div>
                        <div>
                            <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Instructor</label>
                            <select name="instructor_id" required class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 p-[15px] text-base font-normal leading-normal">
                                <option value="">Select Instructor</option>
                                @foreach($instructors as $instructor)
                                <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Price (€)</label>
                            <input type="number" name="price" required min="0" step="0.01" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 placeholder:text-[#896b61] p-[15px] text-base font-normal leading-normal">
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#d44211] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                            <span class="truncate">Add Class</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function applyFilters() {
        // Implement filter logic here
        const startDate = document.getElementById('start_date').value;
        const endDate = document.getElementById('end_date').value;
        const instructor = document.getElementById('instructor_filter').value;
        const classType = document.getElementById('class_type_filter').value;
        
        // Here you would typically make an AJAX request to filter the classes
        console.log('Applying filters:', { startDate, endDate, instructor, classType });
        
        // For now, just alert the user that filters would be applied
        alert('Filters would be applied in a real implementation');
    }
</script>
@endsection
