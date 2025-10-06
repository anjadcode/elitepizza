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
                        <p class="text-[#181311] tracking-light text-[32px] font-bold leading-tight min-w-72">Meet Our Master Pizzaiolos</p>
                    </div>
                    <div class="p-4">
                        <div class="flex items-stretch justify-between gap-4 rounded-lg">
                            <div class="flex flex-col gap-1 flex-[2_2_0px]">
                                <p class="text-[#181311] text-base font-bold leading-tight">Chef Anthony</p>
                                <p class="text-[#896b61] text-sm font-normal leading-normal">
                                    With over two decades of experience, Chef Anthony is a renowned pizzaiolo celebrated for his innovative techniques and dedication to preserving traditional
                                    Neapolitan pizza-making methods. His expertise has earned him numerous accolades, including the prestigious Golden Pizza Award.
                                </p>
                            </div>
                            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCI0Kb_cVYRCmXOYeYB1C3xLgqIKY1_vH86N1DRVOmLLGfoCm_kd-DL5D5MF5rO5NCD9cAcqsdjwoWCforMOzpNkSGmYHrexu87VrShISZX5zxLs2cHOH5U5Zw7xQgkDFiuAV0K47nvoTpL5AxIbQzV5kRAyK1VuK1ZXRW_4I2BJgyCQAIUH6SUadZDkMDuuJ8I5XsQ0OBt6rscxgFe6NvBoy9pfQI-m84z6VNoQrBPMhBfcf4LAgXfN15tpAQDfG8aAonlSzjT6Cf7");'></div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-stretch justify-between gap-4 rounded-lg">
                            <div class="flex flex-col gap-1 flex-[2_2_0px]">
                                <p class="text-[#181311] text-base font-bold leading-tight">Chef Isabella</p>
                                <p class="text-[#896b61] text-sm font-normal leading-normal">
                                    Chef Isabella brings a modern flair to classic pizza-making, blending traditional techniques with contemporary flavors. Her unique approach has garnered
                                    international recognition, and she holds a Master Pizzaiolo certification from the esteemed Napoli Pizza Academy.
                                </p>
                            </div>
                            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCAhVM9H1nLAaXjCET6KWDCDwts7_ZH401S2TRT-jhsiKo1I71K9XPmERl105rCT_DjOu3s7QIxG1x3ZSQ_UQBup9J4KFYhLmWkJXgxyNihfLlt0bJqBAPovBR1hWrMpWdY9dApWsClaS_93Gm38iifEdaTal_-PBuZ3dEfhZnPJ-fwflcx3MR0Ly4bB8M8Jm945MAp51-13OdQna6hqF3RJQyU-7h3xnvjh3XLbHd-mzrp3ZpipeYgjd9R1XAMcRj8nLdh4arATab4");'></div>
                        </div>
                    </div>
                    
                    <div class="flex flex-col gap-8 overflow-x-hidden bg-white p-4">
                        <div class="flex flex-col gap-3 bg-white">
                            <div class="flex items-center gap-3">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB9Od5sjyDwFSJHHwFXiZpb_FEdHJbLJkjvBS76_lz9n5H78PyKjCToA2BF7cwN79fbvpGRQ_l-sj8Qd1j0lrlEqfoJVcoEmXYiGo_SHb_duNlxt6FFtRSBtpN2xPoHQ8fQi15b7sLw88kR4zxHvsykXQ0efZCnIdWby1jTgE9A7GdScCa9_1QZkxBSj2mEJoZzajrTpG9VgJlXKkjDhTRF2tH8UhzGofynwBFZjTsqEdHen_cbJ9gXvH6YchfPpaZ8S0-pVAs7ie4F");'></div>
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
