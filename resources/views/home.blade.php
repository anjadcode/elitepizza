<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Pizza Class</title>
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
                    <div class="@container">
                        <div class="@[480px]:p-4">
                            <div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-lg items-center justify-center p-4" style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuB9Od5sjyDwFSJHHwFXiZpb_FEdHJbLJkjvBS76_lz9n5H78PyKjCToA2BF7cwN79fbvpGRQ_l-sj8Qd1j0lrlEqfoJVcoEmXYiGo_SHb_duNlxt6FFtRSBtpN2xPoHQ8fQi15b7sLw88kR4zxHvsykXQ0efZCnIdWby1jTgE9A7GdScCa9_1QZkxBSj2mEJoZzajrTpG9VgJlXKkjDhTRF2tH8UhzGofynwBFZjTsqEdHen_cbJ9gXvH6YchfPpaZ8S0-pVAs7ie4F");'>
                                <div class="flex flex-col gap-2 text-center">
                                    <h1 class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">
                                        Exclusive Pizza Making Class in Napoli
                                    </h1>
                                    <h2 class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                                        Join our annual, elite pizza making class in the heart of Napoli. Learn the art of crafting authentic Neapolitan pizza from master pizzaiolos.
                                    </h2>
                                </div>
                                <a href="{{ route('register') }}" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#d44211] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]">
                                    <span class="truncate">Sign Up Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Class Highlights</h2>
                    <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
                        <div class="flex flex-col gap-3 pb-3">
                            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCGY0T6WGeDgq3V6_Cy9a6nrGg53rmkaZXm4m8eM-fxL6OqBhdOra-C2er2cGUSEZUgqExlKTNqb08tx7oTH1uXULNZ6mkDAdcVeBClQrFgCNeDMdwdHRdnz_Hmd9fH2Qlsgge_UyfZPj_hakdBNacNRKEhh17AW4jraVuIt63A9oK0YWKo21o1R2jgvc7nX8SCBXD829CrYclygHxQrB1CD8j47aqZdpdmkRxYj4DCexaqrpQ35aD3I4fw3GKQ9_ZvBgPwiObpepNi");'></div>
                            <div>
                                <p class="text-[#181311] text-base font-medium leading-normal">Authentic Techniques</p>
                                <p class="text-[#896b61] text-sm font-normal leading-normal">Learn traditional Neapolitan pizza making techniques passed down through generations.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 pb-3">
                            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBtSwCtRQ7-ZIqIb4FI5tHvER1l1Clnq9eFvjjqt7bqFT9zHeVPjbENQITYfOusONH722qhTa4wU10l__KDg63vcghMlSA56UvDgr-gk0tMRgvgmjzogLmNnh2O5yRODGKs4yuaLYuyOfqE47g6_WiSOkLUuALKFc-up36tPKDvSW_zAkB6Cp6Ki3aoX-9XTSkEkvWs51_vz5KEbihGn4_FgQ4vvD_-o7YSZBZDsR_0eMqWcWYVPJb6wTXEEbaa0AGp5H2skaLW7OLm");'></div>
                            <div>
                                <p class="text-[#181311] text-base font-medium leading-normal">Premium Ingredients</p>
                                <p class="text-[#896b61] text-sm font-normal leading-normal">Use the finest local ingredients, from San Marzano tomatoes to fresh mozzarella.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 pb-3">
                            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBVL9UTnqb_zX9IW9maVYcr4rNxsKy064-0IZ7Vc67PP9y7MN-r0Ly_nVphZbGdtrBEwEz31aEjkQ7OgMFE_RdoDrzDEvfpEAE5exRx61294U2_PKL8CayDzb1x8-fVGHFVMuqu20fu4g6NrSGbvuJF9tBxXaSiq2zUE47wyAclfbIb9MtfXdvsCEmuBhVIuyBQXbzTiVEwKYcsk7S4wNfBRayysdeLLnplVSkRGEjIWoRRouowIbIhb1NvW9jav3F2isSOhIfu90av");'></div>
                            <div>
                                <p class="text-[#181311] text-base font-medium leading-normal">Expert Instruction</p>
                                <p class="text-[#896b61] text-sm font-normal leading-normal">Receive personalized guidance from renowned pizzaiolos with decades of experience.</p>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Testimonials</h2>
                    <div class="flex flex-col gap-8 overflow-x-hidden bg-white p-4">
                        <div class="flex flex-col gap-3 bg-white">
                            <div class="flex items-center gap-3">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCXImh8AHLYYdS_HUzR_4XpbqsYcyCtryNANzUJHDf-6YhVObJl-_bMQutDelI_cUvqV8dJXLVKLy5vr8L9BsN5f9vOip9JxmMZEPZ3T9Ily4JChFTwLDkbAT1cOP3mEzjvZ15G6CUwAZZFIgfV2_V9zjtZDT2bNkpGqAS8EdnmX8auH_rbn320zAJzgNNRG9wg1ideelrg-AW8ZYqhZxbIMJpmDBH_0Ozs1rJUtOr_xpw0uVT7gk5rYWCd3FPJBONVk5raOpITs7Rj");'></div>
                                <div class="flex-1">
                                    <p class="text-[#181311] text-base font-medium leading-normal">Sophia Rossi</p>
                                    <p class="text-[#896b61] text-sm font-normal leading-normal">2023</p>
                                </div>
                            </div>
                            <div class="flex gap-0.5">
                                <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                    </svg>
                                </div>
                                <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                    </svg>
                                </div>
                                <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                    </svg>
                                </div>
                                <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                    </svg>
                                </div>
                                <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="text-[#181311] text-base font-normal leading-normal">
                                "This class was an incredible experience! I learned so much and the pizzas we made were the best I've ever tasted."
                            </p>
                            <div class="flex gap-9 text-[#896b61]">
                                <button class="flex items-center gap-2">
                                    <div class="text-inherit" data-icon="ThumbsUp" data-size="20px" data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                            <path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-inherit">12</p>
                                </button>
                                <button class="flex items-center gap-2">
                                    <div class="text-inherit" data-icon="ThumbsDown" data-size="20px" data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                            <path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-inherit">1</p>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 bg-white">
                            <div class="flex items-center gap-3">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDDkj9JUSuK0-nW0or-SMcQ3vVTTgLNQkNmxK-6b3Xi5-MwOQck_WowNdkEyV0QZOE-N_QCwOARzikosZ23SqpTHs1s0gJ2FsJlE5ygzoQAYalXbnsNfBvi-tgqVsaAlUEgYaGwaCm1tpcqy4zMOiUkVIuLYrTvyI4FP-XWtUYmSiMFLhuGM3ZMAnySWHm4VeI4QBrrZnER7OrKeBVa0i4_RvfyddyY8A383vAFwsSugbwioSman3Fjx4xngc1UbQ5_7TaaTpR47Pgm");'></div>
                                <div class="flex-1">
                                    <p class="text-[#181311] text-base font-medium leading-normal">Ethan Bianchi</p>
                                    <p class="text-[#896b61] text-sm font-normal leading-normal">2023</p>
                                </div>
                            </div>
                            <div class="flex gap-0.5">
                                <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                    </svg>
                                </div>
                                <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                    </svg>
                                </div>
                                <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                    </svg>
                                </div>
                                <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                    </svg>
                                </div>
                                <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="text-[#181311] text-base font-normal leading-normal">
                                "The instructors were fantastic and the atmosphere was truly authentic. Highly recommend!"
                            </p>
                            <div class="flex gap-9 text-[#896b61]">
                                <button class="flex items-center gap-2">
                                    <div class="text-inherit" data-icon="ThumbsUp" data-size="20px" data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                            <path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-inherit">15</p>
                                </button>
                                <button class="flex items-center gap-2">
                                    <div class="text-inherit" data-icon="ThumbsDown" data-size="20px" data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                            <path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 bg-white">
                            <div class="flex items-center gap-3">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuABkEOkQGT-PD5nU2_4p_OC3qv7dsgLPgUNw5BDBw6Qh0o5brxjMwKbUbZN6Iylcjn50IBukxkQju5E1TYlgLDHokQsvedbcaIq_0unxZv_sCVjQGIkVnnI41xxAmR6DuhzdIoWUPXIcyG2YGJlFVpTaUJ4PvVNIg0YCj1Sy-kbA26Gyt6GvXhHu2EjQ7wv7MDvI-ZOyoylkFS4ml8uTFZdiJ46yNpe-AQ4hHe3t49WRcdWhqug6ctdBiosxVK4i7R5wNRFn929y7zZ");'></div>
                                <div class="flex-1">
                                    <p class="text-[#181311] text-base font-medium leading-normal">Chloe Conti</p>
                                    <p class="text-[#896b61] text-sm font-normal leading-normal">2022</p>
                                </div>
                            </div>
                            <div class="flex gap-0.5">
                                <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                    </svg>
                                </div>
                                <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                    </svg>
                                </div>
                                <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                    </svg>
                                </div>
                                <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                    </svg>
                                </div>
                                <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="text-[#181311] text-base font-normal leading-normal">
                                "A must-do for any pizza lover. The class was well-organized and the instructors were passionate about their craft."
                            </p>
                            <div class="flex gap-9 text-[#896b61]">
                                <button class="flex items-center gap-2">
                                    <div class="text-inherit" data-icon="ThumbsUp" data-size="20px" data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                            <path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-inherit">10</p>
                                </button>
                                <button class="flex items-center gap-2">
                                    <div class="text-inherit" data-icon="ThumbsDown" data-size="20px" data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                            <path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-inherit">2</p>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Meet the Instructors</h2>
                    <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
                        <div class="flex flex-col gap-3 pb-3">
                            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCI0Kb_cVYRCmXOYeYB1C3xLgqIKY1_vH86N1DRVOmLLGfoCm_kd-DL5D5MF5rO5NCD9cAcqsdjwoWCforMOzpNkSGmYHrexu87VrShISZX5zxLs2cHOH5U5Zw7xQgkDFiuAV0K47nvoTpL5AxIbQzV5kRAyK1VuK1ZXRW_4I2BJgyCQAIUH6SUadZDkMDuuJ8I5XsQ0OBt6rscxgFe6NvBoy9pfQI-m84z6VNoQrBPMhBfcf4LAgXfN15tpAQDfG8aAonlSzjT6Cf7");'></div>
                            <div>
                                <p class="text-[#181311] text-base font-medium leading-normal">Chef Anthony</p>
                                <p class="text-[#896b61] text-sm font-normal leading-normal">
                                    With over 20 years of experience, Chef Anthony is a master pizzaiolo known for his innovative techniques.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 pb-3">
                            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCAhVM9H1nLAaXjCET6KWDCDwts7_ZH401S2TRT-jhsiKo1I71K9XPmERl105rCT_DjOu3s7QIxG1x3ZSQ_UQBup9J4KFYhLmWkJXgxyNihfLlt0bJqBAPovBR1hWrMpWdY9dApWsClaS_93Gm38iifEdaTal_-PBuZ3dEfhZnPJ-fwflcx3MR0Ly4bB8M8Jm945MAp51-13OdQna6hqF3RJQyU-7h3xnvjh3XLbHd-mzrp3ZpipeYgjd9R1XAMcRj8nLdh4arATab4");'></div>
                            <div>
                                <p class="text-[#181311] text-base font-medium leading-normal">Chef Isabella</p>
                                <p class="text-[#896b61] text-sm font-normal leading-normal">Chef Isabella brings a modern twist to traditional methods, creating unique and delicious pizzas.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="@container">
                        <div class="flex flex-col justify-end gap-6 px-4 py-10 @[480px]:gap-8 @[480px]:px-10 @[480px]:py-20">
                            <div class="flex flex-col gap-2 text-center">
                                <h1 class="text-[#181311] tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]">
                                    Secure Your Spot
                                </h1>
                            </div>
                            <div class="flex flex-1 justify-center">
                                <div class="flex justify-center">
                                    <a href="{{ route('register') }}" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#d44211] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] grow">
                                        <span class="truncate">Sign Up Now</span>
                                    </a>
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
                            <a href="{{ route('about') }}" class="text-[#896b61] text-base font-normal leading-normal min-w-40">About</a>
                            <a href="{{ route('contact') }}" class="text-[#896b61] text-base font-normal leading-normal min-w-40">Contact</a>
                        </div>
                        <p class="text-[#896b61] text-base font-normal leading-normal">@2024 Elite Pizza. All rights reserved.</p>
                    </footer>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
