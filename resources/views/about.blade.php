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
                    <div class="flex flex-wrap justify-between gap-3 p-4">
                        <p class="text-[#181311] tracking-light text-[32px] font-bold leading-tight min-w-72">About Elite Pizza Class</p>
                    </div>
                    <p class="text-[#181311] text-base font-normal leading-normal pb-3 pt-1 px-4">
                        Elite Pizza Class is more than just a cooking class; it's a journey into the heart of Neapolitan pizza-making. Our philosophy is rooted in preserving the authentic
                        techniques passed down through generations, ensuring that each participant not only learns to make pizza but also understands the cultural significance behind it.
                    </p>
                    <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Our Values</h2>
                    <p class="text-[#181311] text-base font-normal leading-normal pb-3 pt-1 px-4">
                        We are committed to using only the finest, locally sourced ingredients, from the '00' flour to the San Marzano tomatoes and fresh mozzarella. Our classes are small
                        and intimate, allowing for personalized instruction and a hands-on experience. We believe in fostering a community of pizza enthusiasts who share a passion for
                        quality and tradition.
                    </p>
                    <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Our Vision</h2>
                    <p class="text-[#181311] text-base font-normal leading-normal pb-3 pt-1 px-4">
                        Our vision is to be the premier destination for those seeking an immersive and authentic Neapolitan pizza-making experience. We aim to inspire our participants to
                        carry on the legacy of this culinary art, sharing their knowledge and passion with others. We envision a world where the true essence of Neapolitan pizza is
                        celebrated and enjoyed by all.
                    </p>
                    <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Testimonials</h2>
                    <div class="flex flex-col gap-8 overflow-x-hidden bg-white p-4">
                        <div class="flex flex-col gap-3 bg-white">
                            <div class="flex items-center gap-3">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBo6pNKZw9-xElQmEjyBvpA2inpxIUWU3K5JY0ZBOq3bkSWysv-Kjfz6gW0UbpidjbmSOXt3ZQJVJfraBFclOZTkBuy9GX6cfru2J6PNNxGv41lFJGloc0uKFtNlL0sQSVqgMy7sLAkjU1mBYp5QWBJQCP6_Q9kv49HKOqLCwQFHzFAmbsEedW_JeT7Wn6p3MR-dztjHaC-tZz9Ls5k0VdxRGIZrKUPfJy-LrFOCx-T7Tsk4_4WnES37j_wNOs5ZLiL79SuFyqIgnhw");'></div>
                                <div class="flex-1">
                                    <p class="text-[#181311] text-base font-medium leading-normal">Sophia Rossi</p>
                                    <p class="text-[#896b61] text-sm font-normal leading-normal">2023-08-15</p>
                                </div>
                            </div>
                            <div class="flex gap-0.5">
                                @for ($i = 1; $i <= 5; $i++)
                                    <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                            <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                        </svg>
                                    </div>
                                @endfor
                            </div>
                            <p class="text-[#181311] text-base font-normal leading-normal">
                                "This class exceeded all my expectations! The instructors were incredibly knowledgeable and patient, and the entire experience was truly immersive. I left with a
                                newfound appreciation for Neapolitan pizza and the confidence to make it at home."
                            </p>
                        </div>
                        <div class="flex flex-col gap-3 bg-white">
                            <div class="flex items-center gap-3">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuANrCsX9o-2jmMvXjYMVb68wablyKbm9deW2tw8DJB-9YJCkbPgBVM3zDMFjahcz2CCjY7j1YWbrjyEJct9ctkIAHyYuCgY3rn_0NxYul7nxW6J5nWLcvooMwK-JXAY_gED3j8dTIA9hN95UotOCKcTJGPswR9k7ZrN7cDAVxs8j--AKnpa1lzHJv2d5p_lVIhuRYVEWu-CGf3urG3K8DuI_4RfG0-Qjdmg48oQnudCBcxjHmmCwPb_olWiOeMbkawdK8-aMIp60LEP");'></div>
                                <div class="flex-1">
                                    <p class="text-[#181311] text-base font-medium leading-normal">Marco Bianchi</p>
                                    <p class="text-[#896b61] text-sm font-normal leading-normal">2023-07-22</p>
                                </div>
                            </div>
                            <div class="flex gap-0.5">
                                @for ($i = 1; $i <= 5; $i++)
                                    <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                            <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                        </svg>
                                    </div>
                                @endfor
                            </div>
                            <p class="text-[#181311] text-base font-normal leading-normal">
                                "As a pizza lover, I've always wanted to learn the secrets behind the perfect Neapolitan pizza. This class delivered just that and more. The hands-on approach and
                                attention to detail were exceptional. Highly recommended!"
                            </p>
                        </div>
                        <div class="flex flex-col gap-3 bg-white">
                            <div class="flex items-center gap-3">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBtUN9ywNw16kzS1ihqi390aC8XwItbqc5xt0E1tW6f4OCXBOXd7jmd3AV-34MhcjMwo6Krl9wNTgw5OuTZP9gyT2gCJb2a2dX4Ekq5yBJeLK4QZrMRyylirg1oWrgntw2r1_NZLAKqsO_SRb5uo_7-MTx7opAhZa_fExsv-LWn-rBZkGSpfVOHF5g1siJmVdxAB4JtyeYNDOGtDfQ8QAtb7cI2bNkNeg7gSo00pE2Y3QvGaKaMRIadXh0wxPm5timdJHp8mjMDgGP3");'></div>
                                <div class="flex-1">
                                    <p class="text-[#181311] text-base font-medium leading-normal">Isabella Conti</p>
                                    <p class="text-[#896b61] text-sm font-normal leading-normal">2023-06-10</p>
                                </div>
                            </div>
                            <div class="flex gap-0.5">
                                @for ($i = 1; $i <= 5; $i++)
                                    <div class="text-[#181311]" data-icon="Star" data-size="20px" data-weight="fill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                            <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                        </svg>
                                    </div>
                                @endfor
                            </div>
                            <p class="text-[#181311] text-base font-normal leading-normal">
                                "The Elite Pizza Class is a must for anyone passionate about food and culture. The class was not only informative but also incredibly fun. I learned so much and
                                met some wonderful people. I can't wait to make pizza for my family and friends!"
                            </p>
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
