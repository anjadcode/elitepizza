<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes - Elite Pizza</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&family=Epilogue%3Awght%40400%3B500%3B700%3B900&family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    @vite('resources/js/app.js')
</head>
<body>
@include('components.public-navbar')
            
            <div class="px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="flex flex-wrap justify-between gap-3 p-4">
                        <p class="text-[#181311] tracking-light text-[32px] font-bold leading-tight min-w-72">Pizza Making Classes</p>
                    </div>
                    
                    <div class="p-4">
                        <div class="flex items-stretch justify-between gap-4 rounded-lg">
                            <div class="flex flex-[2_2_0px] flex-col gap-4">
                                <div class="flex flex-col gap-1">
                                    <p class="text-[#181311] text-base font-bold leading-tight">Beginner's Pizza Basics</p>
                                    <p class="text-[#896b61] text-sm font-normal leading-normal">
                                        Learn the fundamentals of Neapolitan pizza making, from dough preparation to baking techniques. Perfect for beginners.
                                    </p>
                                    <p class="text-[#d44211] text-sm font-bold leading-normal mt-2">Duration: 3 hours | Level: Beginner</p>
                                </div>
                                <a href="{{ route('register') }}" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 flex-row-reverse bg-[#f4f1f0] text-[#181311] text-sm font-medium leading-normal w-fit">
                                    <span class="truncate">Enroll Now</span>
                                </a>
                            </div>
                            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAlnxIttbCkDjDSR18rEsPAkJqSrcmreCZr-cjNfaCjio1-7lmUrqiEhrD-2L1sY6nkgqTOHiXkP5F4mY4sdp3c9uFayRkxCSwtDvhQ4wW_Y9EWD7nTZgGexF4FMaF7roifC1O3vzk-T6GNHcYbNm3loQXARqSsyv0U0vTekPf0qeBmjwJyKNpvUSKSjGUFlgAxk9kqrsTTJeuKTI95MM3yjOSm-849fkk75El0V30bfFHzWL4vDeQnODetglB9m4wIU55W8rSx3rri");'></div>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <div class="flex items-stretch justify-between gap-4 rounded-lg">
                            <div class="flex flex-[2_2_0px] flex-col gap-4">
                                <div class="flex flex-col gap-1">
                                    <p class="text-[#181311] text-base font-bold leading-tight">Intermediate Pizza Mastery</p>
                                    <p class="text-[#896b61] text-sm font-normal leading-normal">
                                        Elevate your pizza skills with advanced techniques, including sourdough starters and creative toppings.
                                    </p>
                                    <p class="text-[#d44211] text-sm font-bold leading-normal mt-2">Duration: 4 hours | Level: Intermediate</p>
                                </div>
                                <a href="{{ route('register') }}" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 flex-row-reverse bg-[#f4f1f0] text-[#181311] text-sm font-medium leading-normal w-fit">
                                    <span class="truncate">Enroll Now</span>
                                </a>
                            </div>
                            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCg3bAT0wRbHD7sGaThLn8bxYE31ILLJPvF7Z1wVgOVurDuVcyQc3DgjV5MXnL5d9PCmX0UWn6-y1ttCJvxViuiHgvAu2CH_T5DBPjrlDV5Ci9aSWoMqRq4klevSfxDpofJasxRPRFsiowQV3Dwgnuj6IAUGCDUt5GlulM5CJ4IcCUCLSI9JyLl-onJ2PjzPJ1FBBUrjPsdP1lqKvwR_MjrppTEFryIsa0yJGH-Ins98k4VUGy54QXACzXQrXgdn5165aa4oNvI_t_P");'></div>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <div class="flex items-stretch justify-between gap-4 rounded-lg">
                            <div class="flex flex-[2_2_0px] flex-col gap-4">
                                <div class="flex flex-col gap-1">
                                    <p class="text-[#181311] text-base font-bold leading-tight">Masterclass: Gourmet Pizza Artistry</p>
                                    <p class="text-[#896b61] text-sm font-normal leading-normal">
                                        Join our masterclass to explore gourmet pizza creations, featuring rare ingredients and innovative flavor combinations.
                                    </p>
                                    <p class="text-[#d44211] text-sm font-bold leading-normal mt-2">Duration: 6 hours | Level: Advanced</p>
                                </div>
                                <a href="{{ route('register') }}" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 flex-row-reverse bg-[#f4f1f0] text-[#181311] text-sm font-medium leading-normal w-fit">
                                    <span class="truncate">Enroll Now</span>
                                </a>
                            </div>
                            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDmrY4lKgUypH-ZfNUIU116NaICRC8RMRdE8OUweMfB2YBjgHiqL02NA33MTiE10XW8Vr1VftXboZlSM3NtM87bo5Ys2FjSAuGBsePlQHBkUGh7xS4tEZv5RXzqp2SR6EUuKyqDlwOk8CKk1isphm9-zOGMcE87UZi2ilwqO8Y6S5Mbr3vOPlUeJ6dQE0BvuhhjlDqnG02yEdbbV2EuXJpT37XxgsTjpECTM2WN7A_NWM4mqLkBxHYBKZrPuUFimgL2IOvw_WHtmrx0");'></div>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] pb-3 pt-5">Class Schedule</h2>
                        <div class="bg-[#f4f1f0] rounded-lg p-4">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="text-center">
                                    <p class="text-[#181311] font-bold">Beginner's Class</p>
                                    <p class="text-[#896b61] text-sm">Every Saturday</p>
                                    <p class="text-[#d44211] font-bold">10:00 AM - 1:00 PM</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-[#181311] font-bold">Intermediate Class</p>
                                    <p class="text-[#896b61] text-sm">Every Sunday</p>
                                    <p class="text-[#d44211] font-bold">2:00 PM - 6:00 PM</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-[#181311] font-bold">Masterclass</p>
                                    <p class="text-[#896b61] text-sm">First Friday of Month</p>
                                    <p class="text-[#d44211] font-bold">6:00 PM - 12:00 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] pb-3 pt-5">What You'll Learn</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-start gap-3">
                                <div class="text-[#d44211]">✓</div>
                                <div>
                                    <p class="text-[#181311] font-medium">Dough Preparation</p>
                                    <p class="text-[#896b61] text-sm">Master the art of perfect pizza dough</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="text-[#d44211]">✓</div>
                                <div>
                                    <p class="text-[#181311] font-medium">Sauce Making</p>
                                    <p class="text-[#896b61] text-sm">Create authentic tomato sauce recipes</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="text-[#d44211]">✓</div>
                                <div>
                                    <p class="text-[#181311] font-medium">Topping Techniques</p>
                                    <p class="text-[#896b61] text-sm">Learn proper topping arrangement</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="text-[#d44211]">✓</div>
                                <div>
                                    <p class="text-[#181311] font-medium">Baking Methods</p>
                                    <p class="text-[#896b61] text-sm">Perfect your pizza in wood-fired ovens</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
