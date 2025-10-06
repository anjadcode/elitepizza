@extends('layouts.admin')

@section('admin-content')
<div class="px-4 flex flex-1 justify-center py-5">
    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <div class="flex flex-wrap justify-between gap-3 p-4">
            <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#181311] tracking-light text-[32px] font-bold leading-tight">Manage Instructors</p>
                <p class="text-[#896b61] text-sm font-normal leading-normal">
                    Add, edit, and manage pizza class instructors.
                </p>
            </div>
            <div>
                <a href="{{ route('admin.instructors.create') }}" class="flex min-w-[40px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 w-10 bg-[#d44211] text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z"></path>
                    </svg>
                </a>
            </div>
        </div>
        
        <!-- Instructor List -->
        <div class="px-4 py-3">
            <div class="bg-white rounded-lg border border-[#e6dedb] overflow-hidden">
                <div class="grid grid-cols-12 gap-4 p-4 bg-[#f9f7f6] border-b border-[#e6dedb]">
                    <div class="col-span-2">
                        <p class="text-[#181311] text-sm font-medium leading-normal">Photo</p>
                    </div>
                    <div class="col-span-3">
                        <p class="text-[#181311] text-sm font-medium leading-normal">Name</p>
                    </div>
                    <div class="col-span-3">
                        <p class="text-[#181311] text-sm font-medium leading-normal">Specialty</p>
                    </div>
                    <div class="col-span-2">
                        <p class="text-[#181311] text-sm font-medium leading-normal">Experience</p>
                    </div>
                    <div class="col-span-2">
                        <p class="text-[#181311] text-sm font-medium leading-normal">Actions</p>
                    </div>
                </div>
                
                @forelse ($instructors as $instructor)
                <div class="grid grid-cols-12 gap-4 p-4 border-b border-[#e6dedb] last:border-b-0">
                    <div class="col-span-2">
                        <img src="{{ $instructor->photo_url ?? 'https://via.placeholder.com/80x80' }}" alt="{{ $instructor->name }}" class="w-20 h-20 rounded-lg object-cover">
                    </div>
                    <div class="col-span-3">
                        <p class="text-[#181311] text-base font-normal leading-normal">{{ $instructor->name }}</p>
                        <p class="text-[#896b61] text-sm font-normal leading-normal">{{ $instructor->email }}</p>
                    </div>
                    <div class="col-span-3">
                        <p class="text-[#181311] text-base font-normal leading-normal">{{ $instructor->specialty }}</p>
                    </div>
                    <div class="col-span-2">
                        <p class="text-[#181311] text-base font-normal leading-normal">{{ $instructor->experience_years }} years</p>
                    </div>
                    <div class="col-span-2">
                        <div class="flex gap-2">
                            <a href="{{ route('admin.instructors.edit', $instructor->id) }}" class="flex min-w-[40px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 w-8 bg-[#d44211] text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="currentColor" viewBox="0 0 256 256">
                                    <path d="M208.49,191.94l-45.26-45.25a72,72,0,1,0-16.47,16.47l45.25,45.26a12,12,0,0,0,17-17ZM72,112a48,48,0,1,1,48,48A48,48,0,0,1,72,112Z"></path>
                                </svg>
                            </a>
                            <form method="POST" action="{{ route('admin.instructors.destroy', $instructor->id) }}" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="flex min-w-[40px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 w-8 bg-[#dc2626] text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M200,56H152V48a24,24,0,0,0-24-24H128A24,24,0,0,0,104,48v8H56A16,16,0,0,0,40,72V88a16,16,0,0,0,16,16h8V208a16,16,0,0,0,16,16H176a16,16,0,0,0,16-16V104h8a16,16,0,0,0,16-16V72A16,16,0,0,0,200,56ZM120,48a8,8,0,0,1,8-8h8a8,8,0,0,1,8,8v8H120ZM192,208H64V104H192Zm0-120H64V72H192Z"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @empty
                <div class="p-8 text-center">
                    <p class="text-[#896b61] text-base font-normal leading-normal">No instructors found.</p>
                </div>
                @endforelse
            </div>
        </div>
        
        <!-- Add Instructor Form -->
        <div class="px-4 py-3">
            <div class="bg-white rounded-lg border border-[#e6dedb] p-6">
                <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] mb-4">Add New Instructor</h3>
                <form method="POST" action="{{ route('admin.instructors.store') }}" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Full Name</label>
                            <input type="text" name="name" required class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 placeholder:text-[#896b61] p-[15px] text-base font-normal leading-normal">
                        </div>
                        <div>
                            <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Email</label>
                            <input type="email" name="email" required class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 placeholder:text-[#896b61] p-[15px] text-base font-normal leading-normal">
                        </div>
                        <div>
                            <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Phone</label>
                            <input type="tel" name="phone" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 placeholder:text-[#896b61] p-[15px] text-base font-normal leading-normal">
                        </div>
                        <div>
                            <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Specialty</label>
                            <input type="text" name="specialty" required class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 placeholder:text-[#896b61] p-[15px] text-base font-normal leading-normal">
                        </div>
                        <div>
                            <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Experience (Years)</label>
                            <input type="number" name="experience_years" required min="0" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] h-10 placeholder:text-[#896b61] p-[15px] text-base font-normal leading-normal">
                        </div>
                        <div>
                            <label class="block text-[#181311] text-base font-medium leading-normal mb-2">Bio</label>
                            <textarea name="bio" rows="3" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e6dedb] bg-white focus:border-[#e6dedb] min-h-36 placeholder:text-[#896b61] p-[15px] text-base font-normal leading-normal"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#d44211] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                            <span class="truncate">Add Instructor</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
