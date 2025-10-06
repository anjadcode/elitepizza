<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials - Elite Pizza</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&family=Epilogue%3Awght%40400%3B500%3B700%3B900&family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="relative flex h-auto min-h-screen w-full flex-col bg-white group/design-root overflow-x-hidden" style='font-family: Epilogue, "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
@include('components.public-navbar')
            
            <div class="px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="flex flex-wrap justify-between gap-3 p-4">
                        <div class="flex min-w-72 flex-col gap-3">
                            <p class="text-[#181311] tracking-light text-[32px] font-bold leading-tight">Student Testimonials</p>
                            <p class="text-[#896b61] text-sm font-normal leading-normal">
                                Hear from our students about their amazing experiences learning authentic Italian pizza making.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Testimonials Grid -->
                    <div class="px-4 py-3">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Testimonial 1 -->
                            <div class="bg-white rounded-lg border border-[#e6dedb] p-6">
                                <div class="flex items-start gap-4">
                                    <img src="https://via.placeholder.com/60x60" alt="Sarah Johnson" class="w-14 h-14 rounded-full object-cover">
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2 mb-2">
                                            <h4 class="text-[#181311] text-lg font-bold leading-tight">Sarah Johnson</h4>
                                            <div class="flex text-yellow-400">
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="text-[#896b61] text-sm font-normal leading-normal italic">
                                            "Amazing experience! Marco's teaching style is incredible. I went from knowing nothing about pizza to making authentic Neapolitan pizza at home. The hands-on approach really made the difference."
                                        </p>
                                        <p class="text-[#896b61] text-xs font-normal leading-normal mt-2">Neapolitan Pizza Class • March 2024</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Testimonial 2 -->
                            <div class="bg-white rounded-lg border border-[#e6dedb] p-6">
                                <div class="flex items-start gap-4">
                                    <img src="https://via.placeholder.com/60x60" alt="Michael Chen" class="w-14 h-14 rounded-full object-cover">
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2 mb-2">
                                            <h4 class="text-[#181311] text-lg font-bold leading-tight">Michael Chen</h4>
                                            <div class="flex text-yellow-400">
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="text-[#896b61] text-sm font-normal leading-normal italic">
                                            "Sofia's Sicilian pizza class was fantastic! She shares so many family secrets and tips that you just can't find anywhere else. The small class size meant everyone got personalized attention."
                                        </p>
                                        <p class="text-[#896b61] text-xs font-normal leading-normal mt-2">Sicilian Pizza Workshop • February 2024</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Testimonial 3 -->
                            <div class="bg-white rounded-lg border border-[#e6dedb] p-6">
                                <div class="flex items-start gap-4">
                                    <img src="https://via.placeholder.com/60x60" alt="Emma Rodriguez" class="w-14 h-14 rounded-full object-cover">
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2 mb-2">
                                            <h4 class="text-[#181311] text-lg font-bold leading-tight">Emma Rodriguez</h4>
                                            <div class="flex text-yellow-400">
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                                <svg class="w-4 h-4 fill-gray-300" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="text-[#896b61] text-sm font-normal leading-normal italic">
                                            "I took the beginner class and it was perfect! The instructors are so patient and encouraging. I've already signed up for the advanced class - I'm hooked on making pizza!"
                                        </p>
                                        <p class="text-[#896b61] text-xs font-normal leading-normal mt-2">Introduction to Pizza Making • January 2024</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Testimonial 4 -->
                            <div class="bg-white rounded-lg border border-[#e6dedb] p-6">
                                <div class="flex items-start gap-4">
                                    <img src="https://via.placeholder.com/60x60" alt="David Thompson" class="w-14 h-14 rounded-full object-cover">
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2 mb-2">
                                            <h4 class="text-[#181311] text-lg font-bold leading-tight">David Thompson</h4>
                                            <div class="flex text-yellow-400">
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                                <svg class="w-4 h-4 fill-gray-300" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="text-[#896b61] text-sm font-normal leading-normal italic">
                                            "Giuseppe's Calabrian class opened my eyes to a whole new world of pizza flavors! The spice combinations are incredible. Highly recommend for anyone who wants something beyond traditional pizza."
                                        </p>
                                        <p class="text-[#896b61] text-xs font-normal leading-normal mt-2">Calabrian Pizza Special • December 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Stats Section -->
                    <div class="px-4 py-3">
                        <div class="bg-[#f9f7f6] rounded-lg p-6">
                            <h3 class="text-[#181311] text-xl font-bold leading-tight mb-4">Student Success Stories</h3>
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                <div class="text-center">
                                    <p class="text-[#d44211] text-3xl font-bold leading-tight">2,500+</p>
                                    <p class="text-[#896b61] text-sm font-normal leading-normal mt-1">Happy Students</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-[#d44211] text-3xl font-bold leading-tight">98%</p>
                                    <p class="text-[#896b61] text-sm font-normal leading-normal mt-1">Satisfaction Rate</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-[#d44211] text-3xl font-bold leading-tight">50+</p>
                                    <p class="text-[#896b61] text-sm font-normal leading-normal mt-1">Classes Offered</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-[#d44211] text-3xl font-bold leading-tight">15+</p>
                                    <p class="text-[#896b61] text-sm font-normal leading-normal mt-1">Years Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <footer class="flex justify-center">
                <div class="flex max-w-[960px] flex-1 flex-col">
                    <footer class="flex flex-col gap-6 px-5 py-10 text-center @container">
                        <div class="flex flex-wrap items-center justify-center gap-6 @[480px]:flex-row @[480px]:justify-around">
                            <a href="{{ route('home') }}" class="text-[#896b61] text-base font-normal leading-normal min-w-40">Home</a>
                            <a href="{{ route('about') }}" class="text-[#896b61] text-base font-normal leading-normal min-w-40">About</a>
                            <a href="{{ route('classes') }}" class="text-[#896b61] text-base font-normal leading-normal min-w-40">Classes</a>
                            <a href="{{ route('instructors') }}" class="text-[#896b61] text-base font-normal leading-normal min-w-40">Instructors</a>
                            <a href="{{ route('contact') }}" class="text-[#896b61] text-base font-normal leading-normal min-w-40">Contact</a>
                        </div>
                        <p class="text-[#896b61] text-base font-normal leading-normal">© 2024 Elite Pizza. All rights reserved.</p>
                    </footer>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
