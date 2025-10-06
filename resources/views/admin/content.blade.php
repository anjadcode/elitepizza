@extends('layouts.admin')

@section('admin-content')
<div class="flex flex-wrap justify-between gap-3 p-4">
    <div class="flex min-w-72 flex-col gap-3">
        <p class="text-[#181311] tracking-light text-[32px] font-bold leading-tight">Content Management</p>
        <p class="text-[#896b61] text-sm font-normal leading-normal">Manage website content for Elite Pizza Class</p>
    </div>
</div>

<div class="pb-3">
    <div class="flex border-b border-[#e6dedb] px-4 gap-8">
        <a href="#" class="flex flex-col items-center justify-center border-b-[3px] border-b-[#181311] text-[#181311] pb-[13px] pt-4">
            <p class="text-[#181311] text-sm font-bold leading-normal tracking-[0.015em]">Pages</p>
        </a>
        <a href="#" class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#896b61] pb-[13px] pt-4">
            <p class="text-[#896b61] text-sm font-bold leading-normal tracking-[0.015em]">Images</p>
        </a>
        <a href="#" class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#896b61] pb-[13px] pt-4">
            <p class="text-[#896b61] text-sm font-bold leading-normal tracking-[0.015em]">Testimonials</p>
        </a>
        <a href="#" class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#896b61] pb-[13px] pt-4">
            <p class="text-[#896b61] text-sm font-bold leading-normal tracking-[0.015em]">Blog Posts</p>
        </a>
    </div>
</div>

<h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Pages</h2>
<div class="px-4 py-3 @container">
    <div class="flex overflow-hidden rounded-lg border border-[#e6dedb] bg-white">
        <table class="flex-1">
            <thead>
                <tr class="bg-white">
                    <th class="table-d6bd872d-8e58-4201-bcfc-39fb0445a6a3-column-120 px-4 py-3 text-left text-[#181311] w-[400px] text-sm font-medium leading-normal">
                        Page Title
                    </th>
                    <th class="table-d6bd872d-8e58-4201-bcfc-39fb0445a6a3-column-240 px-4 py-3 text-left text-[#181311] w-[400px] text-sm font-medium leading-normal">
                        Last Updated
                    </th>
                    <th class="table-d6bd872d-8e58-4201-bcfc-39fb0445a6a3-column-360 px-4 py-3 text-left text-[#181311] w-60 text-[#896b61] text-sm font-medium leading-normal">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t border-t-[#e6dedb]">
                    <td class="table-d6bd872d-8e58-4201-bcfc-39fb0445a6a3-column-120 h-[72px] px-4 py-2 w-[400px] text-[#181311] text-sm font-normal leading-normal">About Us</td>
                    <td class="table-d6bd872d-8e58-4201-bcfc-39fb0445a6a3-column-240 h-[72px] px-4 py-2 w-[400px] text-[#896b61] text-sm font-normal leading-normal">
                        2024-08-15
                    </td>
                    <td class="table-d6bd872d-8e58-4201-bcfc-39fb0445a6a3-column-360 h-[72px] px-4 py-2 w-60 text-[#896b61] text-sm font-bold leading-normal tracking-[0.015em]">
                        <a href="#" class="hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="border-t border-t-[#e6dedb]">
                    <td class="table-d6bd872d-8e58-4201-bcfc-39fb0445a6a3-column-120 h-[72px] px-4 py-2 w-[400px] text-[#181311] text-sm font-normal leading-normal">Classes</td>
                    <td class="table-d6bd872d-8e58-4201-bcfc-39fb0445a6a3-column-240 h-[72px] px-4 py-2 w-[400px] text-[#896b61] text-sm font-normal leading-normal">
                        2024-08-10
                    </td>
                    <td class="table-d6bd872d-8e58-4201-bcfc-39fb0445a6a3-column-360 h-[72px] px-4 py-2 w-60 text-[#896b61] text-sm font-bold leading-normal tracking-[0.015em]">
                        <a href="#" class="hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <style>
        @container(max-width:120px){.table-d6bd872d-8e58-4201-bcfc-39fb0445a6a3-column-120{display: none;}}
        @container(max-width:240px){.table-d6bd872d-8e58-4201-bcfc-39fb0445a6a3-column-240{display: none;}}
        @container(max-width:360px){.table-d6bd872d-8e58-4201-bcfc-39fb0445a6a3-column-360{display: none;}}
    </style>
</div>

<h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Images</h2>
<div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
    <div class="flex flex-col gap-3">
        <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB_ZDOcwShuAchHpmSfyti38AZCAxvCf9aqLVy_SBKj048FHZasZBGcFh9sjN9Nt99WujPNjH8AtZjEfXqgXOGRmYCxEUrQwZmew-_Pmp4h7WryHDPTj3oRxBU-rGKx5miy_tAEo2bWQGSb_ouTkT-oj22hw3sOchvCZ1w1Qf1VfheXuym3pwRyJ-YWCdRvDMu35xH-wGDdyixmCj-A6gXa59jaxP4SI-XDM7hI0XesqkrtiwMf7vUNEMB7qTazx1WsBrPmSM5EbM_5");'></div>
    </div>
    <div class="flex flex-col gap-3">
        <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBr6DiJ9RT4ZRp-xIZb5Pwb0ObOhNHgqsNeBpEY9hKbZMCApSKTm5TQWkqlKFODkS75sorTcipMUgUTyXptaFjd2BHYntDPJ_MvCBPw889xwwOaOIozmCwi9K1GBIjp0u9neIEjXKph0K0qAtFwaXYgAgKtYs16NR_Rd9cnAwrEt2CSWU59L0_pExw6tGr7Qmj7M11Vz-B0xS0TUEXpDUQvpYudoHlqHSgWo_awXghqXZ1_hfX35TbBI-JzAeZZgdwBY7OB-_d-6he0");'></div>
    </div>
    <div class="flex flex-col gap-3">
        <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCC87kuGdUqFyKVj1HYe5xEu1uX3iK837uT3tUR8BNwXd7fTh4iJHoACwaXs4fhUI5fFcK0qc4ciLV9SyIwSe__w95mN60im8HucRa25Xl0SfixsQEhjuxyNdQQWw7WRtXu1I6M519DthnGQS9yAVvBDwrKw-Io-ZLMXETmpKzJlDX3Rujn9EhBjXy7BMJu5wQptuDgM4LxVGJeSIUNSOBDAIF59nC3ygzXFs8qIbvRw2mHJu6qnptFrUztw8GL1_Gwx-M1_Co4FrQK");'></div>
    </div>
    <div class="flex flex-col gap-3">
        <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDrk4f8mG3OpZDMWppjfSAj9SSQ_sJvwAwKv8ZyHQDo6abvfFEX1x7Ad61u_-l5wLybq_U0iDs7nCxTDdMy8cXbzZSGbqIqoI_3oyloHqrzhF2uX75AMzhfOiHQ9CsD04--jupxn_0knRkOxeRjM8kmUcKkkuUbjZTRgSmC8WhbzHevuQt4tAk1BBQl2wbngD2vXhKqCDFmH6GMIofqAjGEQoOwyxVtJZ54khb99HyMAoHzhJy4Jahks7o3vaJL3-sf0HjSv-yEPjN8");'></div>
    </div>
</div>

<h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Testimonials</h2>
<div class="flex flex-col gap-8 overflow-x-hidden bg-white p-4">
    <div class="flex flex-col gap-3 bg-white">
        <div class="flex items-center gap-3">
            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBA2q0YV5jI5ONOWqfgywMx3ppXU6UP6iYC66OI9Mm9MQC_F-T37BFUV2VIAwE8u9tCdtQ2AVl2YrE5SHtVhjzFo-n98JRmM8t3AHq2IHatLAgYu2DojCo6SeqO6-Krys6rtOBNQuTjKAK6IAPhWfxIsVTUSoenxdC72Qf5JYus-KEEVQC_bJBX1mtE7mmKNl4QOTka87SgKS3BZyAwgVeYTO0OxfmuBpFwtwpOPDvHEhjHTMIjtx55wHihLAfcFE2sLd-CI2y7mubJ");'></div>
            <div class="flex-1">
                <p class="text-[#181311] text-base font-medium leading-normal">Maria Rossi</p>
                <p class="text-[#896b61] text-sm font-normal leading-normal">2024-07-20</p>
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
            "The Elite Pizza Class was an incredible experience! I learned so much and the pizzas were delicious."
        </p>
    </div>
    <div class="flex flex-col gap-3 bg-white">
        <div class="flex items-center gap-3">
            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB16k2GYYQYtxkNQOwRj2-h6hNpc26GfoNc-t6-97X4ZZNOVkMr69_RXv7X0ua72RL2WLEXO3P9wtBcfDrSVs63qEvAUP4JI6VnNShJd07fKOBgdNmbOmfcUyhwCiH_Lfb-z1i_kpZkKBn1wFVa--C86GVXkPeOE_Z3nvrxeRjLpP-WFx5snGIwzx6daHFbKzH8nYKxD6tfumURrY_ueL1aBxRmCacvDoaNmdADLA59IlljTNN7A5UcGBotHbHj592wGcCofZRGszqe");'></div>
            <div class="flex-1">
                <p class="text-[#181311] text-base font-medium leading-normal">Giovanni Esposito</p>
                <p class="text-[#896b61] text-sm font-normal leading-normal">2024-07-18</p>
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
            <div class="text-[#cebfba]" data-icon="Star" data-size="20px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M239.2,97.29a16,16,0,0,0-13.81-11L166,81.17,142.72,25.81h0a15.95,15.95,0,0,0-29.44,0L90.07,81.17,30.61,86.32a16,16,0,0,0-9.11,28.06L66.61,153.8,53.09,212.34a16,16,0,0,0,23.84,17.34l51-31,51.11,31a16,16,0,0,0,23.84-17.34l-13.51-58.6,45.1-39.36A16,16,0,0,0,239.2,97.29Zm-15.22,5-45.1,39.36a16,16,0,0,0-5.08,15.71L187.35,216v0l-51.07-31a15.9,15.9,0,0,0-16.54,0l-51,31h0L82.2,157.4a16,16,0,0,0-5.08-15.71L32,102.35a.37.37,0,0,1,0-.09l59.44-5.14a16,16,0,0,0,13.35-9.75L128,32.08l23.2,55.29a16,16,0,0,0,13.35,9.75L224,102.26S224,102.32,224,102.33Z"></path>
                </svg>
            </div>
        </div>
        <p class="text-[#181311] text-base font-normal leading-normal">"Great class, but could have used more hands-on practice."</p>
    </div>
</div>

<h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Blog Posts</h2>
<div class="px-4 py-3 @container">
    <div class="flex overflow-hidden rounded-lg border border-[#e6dedb] bg-white">
        <table class="flex-1">
            <thead>
                <tr class="bg-white">
                    <th class="table-ce31296c-a63d-4b71-829a-fdebb234b76f-column-120 px-4 py-3 text-left text-[#181311] w-[400px] text-sm font-medium leading-normal">Title</th>
                    <th class="table-ce31296c-a63d-4b71-829a-fdebb234b76f-column-240 px-4 py-3 text-left text-[#181311] w-[400px] text-sm font-medium leading-normal">Date</th>
                    <th class="table-ce31296c-a63d-4b71-829a-fdebb234b76f-column-360 px-4 py-3 text-left text-[#181311] w-[400px] text-sm font-medium leading-normal">Author</th>
                    <th class="table-ce31296c-a63d-4b71-829a-fdebb234b76f-column-480 px-4 py-3 text-left text-[#181311] w-60 text-[#896b61] text-sm font-medium leading-normal">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t border-t-[#e6dedb]">
                    <td class="table-ce31296c-a63d-4b71-829a-fdebb234b76f-column-120 h-[72px] px-4 py-2 w-[400px] text-[#181311] text-sm font-normal leading-normal">
                        Top Pizza Making Tips
                    </td>
                    <td class="table-ce31296c-a63d-4b71-829a-fdebb234b76f-column-240 h-[72px] px-4 py-2 w-[400px] text-[#896b61] text-sm font-normal leading-normal">
                        2024-08-05
                    </td>
                    <td class="table-ce31296c-a63d-4b71-829a-fdebb234b76f-column-360 h-[72px] px-4 py-2 w-[400px] text-[#896b61] text-sm font-normal leading-normal">
                        Chef Antonio
                    </td>
                    <td class="table-ce31296c-a63d-4b71-829a-fdebb234b76f-column-480 h-[72px] px-4 py-2 w-60 text-[#896b61] text-sm font-bold leading-normal tracking-[0.015em]">
                        <a href="#" class="hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="border-t border-t-[#e6dedb]">
                    <td class="table-ce31296c-a63d-4b71-829a-fdebb234b76f-column-120 h-[72px] px-4 py-2 w-[400px] text-[#181311] text-sm font-normal leading-normal">
                        Behind the Scenes at Elite Pizza Class
                    </td>
                    <td class="table-ce31296c-a63d-4b71-829a-fdebb234b76f-column-240 h-[72px] px-4 py-2 w-[400px] text-[#896b61] text-sm font-normal leading-normal">
                        2024-07-25
                    </td>
                    <td class="table-ce31296c-a63d-4b71-829a-fdebb234b76f-column-360 h-[72px] px-4 py-2 w-[400px] text-[#896b61] text-sm font-normal leading-normal">
                        Chef Antonio
                    </td>
                    <td class="table-ce31296c-a63d-4b71-829a-fdebb234b76f-column-480 h-[72px] px-4 py-2 w-60 text-[#896b61] text-sm font-bold leading-normal tracking-[0.015em]">
                        <a href="#" class="hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <style>
        @container(max-width:120px){.table-ce31296c-a63d-4b71-829a-fdebb234b76f-column-120{display: none;}}
        @container(max-width:240px){.table-ce31296c-a63d-4b71-829a-fdebb234b76f-column-240{display: none;}}
        @container(max-width:360px){.table-ce31296c-a63d-4b71-829a-fdebb234b76f-column-360{display: none;}}
        @container(max-width:480px){.table-ce31296c-a63d-4b71-829a-fdebb234b76f-column-480{display: none;}}
    </style>
</div>
@endsection
