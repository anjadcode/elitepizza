<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Elite Pizza</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&family=Epilogue%3Awght%40400%3B500%3B700%3B900&family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    @vite('resources/js/app.js')
</head>
<body>
@include('components.public-navbar')

<div class="px-40 flex flex-1 justify-center py-5">
    <div class="layout-content-container flex flex-col w-[512px] max-w-[512px] py-5 max-w-[960px] flex-1">
        <h2 class="text-[#181311] tracking-light text-[28px] font-bold leading-tight px-4 text-center pb-3 pt-5">Create your account</h2>
        
        <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4 px-4">
            @csrf
            
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Full Name"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border-none bg-[#f4f1f0] focus:border-none h-14 placeholder:text-[#896b61] p-4 text-base font-normal leading-normal"
                        value="{{ old('name') }}"
                        required
                        autofocus
                        autocomplete="name"
                    />
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Email"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border-none bg-[#f4f1f0] focus:border-none h-14 placeholder:text-[#896b61] p-4 text-base font-normal leading-normal"
                        value="{{ old('email') }}"
                        required
                        autocomplete="username"
                    />
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Password"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border-none bg-[#f4f1f0] focus:border-none h-14 placeholder:text-[#896b61] p-4 text-base font-normal leading-normal"
                        required
                        autocomplete="new-password"
                    />
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Confirm Password"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border-none bg-[#f4f1f0] focus:border-none h-14 placeholder:text-[#896b61] p-4 text-base font-normal leading-normal"
                        required
                        autocomplete="new-password"
                    />
                    @error('password_confirmation')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            
            <div class="px-4">
                <label class="flex gap-x-3 py-3 flex-row">
                    <input
                        type="checkbox"
                        name="terms"
                        class="h-5 w-5 rounded border-[#e6dedb] border-2 bg-transparent text-[#d44211] checked:bg-[#d44211] checked:border-[#d44211] checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#e6dedb] focus:outline-none"
                        required
                    />
                    <p class="text-[#181311] text-base font-normal leading-normal">I agree to the Terms and Conditions</p>
                </label>
                @error('terms')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex px-4 py-3">
                <button
                    type="submit"
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 flex-1 bg-[#d44211] text-white text-sm font-bold leading-normal tracking-[0.015em]"
                >
                    <span class="truncate">Register</span>
                </button>
            </div>
        </form>
        
        <p class="text-[#896b61] text-sm font-normal leading-normal pb-3 pt-1 px-4 text-center underline">
            Already have an account? 
            <a href="{{ route('login') }}" class="hover:text-[#d44211]">
                Log in
            </a>
        </p>
    </div>
</div>
</body>
</html>
