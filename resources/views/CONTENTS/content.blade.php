<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
</head>
<body class="dark:bg-neutral-900 dark:border-neutral-700">
    <div class="cards">
        <div class="cards-container grid grid-cols-3 gap-10">
            {{-- ?? CARD 1 --}}
            <div class=" bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70" id="card-1">
                <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                  Attendance Check
                </h3>
                <h1 class="text-5xl font-bold text-blue-500 mt-3">
                    Second Semester
                </h1>
                <p class="mt-3 mb-5 text-l font-normal text-gray-400 dark:text-neutral-400 ">
                    Attended most classes consistently throughout the second semester.
                </p>
                <div class="card1-minicards flex flex-row gap-4">
                    {{-- ! MINI CARD 1 --}}
                <div class="minicard-transform transform transition-transform duration-300 hover:scale-110"> {{-- ! MINI CARD HOVER TRANSFORM --}}
                <div class="flex flex-col cursor-pointer bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-neutral-700 dark:border-neutral-700 dark:shadow-neutral-700/70" id="mini-card1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-check"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/><path d="m9 16 2 2 4-4"/></svg>
                   <p class="mt-4 text-xs font-normal text-gray-500 dark:text-neutral-300">Attendance</p>
                   <h1 class="text-xl font-bold text-gray-800 dark:text-white">90</h1>
                </div>
               </div>

                {{-- ! MINI CARD 2 --}}
                <div class="minicard-transform transform transition-transform duration-300 hover:scale-110"> {{-- ! MINI CARD HOVER TRANSFORM --}}
                <div class="flex flex-col cursor-pointer bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-neutral-700 dark:border-neutral-700 dark:shadow-neutral-700/70" id="mini-card1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-x"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/><path d="m14 14-4 4"/><path d="m10 14 4 4"/></svg>
                   <p class="mt-4 text-xs font-normal text-gray-500 dark:text-neutral-300">Attendance</p>
                   <h1 class="text-xl font-bold text-gray-800 dark:text-white">90</h1>
                </div>
              </div>  

                {{-- ! MINI CARD 3 --}}
                <div class="minicard-transform transform transition-transform duration-300 hover:scale-110"> {{-- ! MINI CARD HOVER TRANSFORM --}}
                <div class="flex flex-col cursor-pointer bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-neutral-700 dark:border-neutral-700 dark:shadow-neutral-700/70" id="mini-card1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-heart"><path d="M3 10h18V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7"/><path d="M8 2v4"/><path d="M16 2v4"/><path d="M21.29 14.7a2.43 2.43 0 0 0-2.65-.52c-.3.12-.57.3-.8.53l-.34.34-.35-.34a2.43 2.43 0 0 0-2.65-.53c-.3.12-.56.3-.79.53-.95.94-1 2.53.2 3.74L17.5 22l3.6-3.55c1.2-1.21 1.14-2.8.19-3.74Z"/></svg>
                   <p class="mt-4 text-xs font-normal text-gray-500 dark:text-neutral-300">Attendance</p>
                   <h1 class="text-xl font-bold text-gray-800 dark:text-white">90</h1>
                </div>
                </div>
            </div>
            <a class="mt-8 inline-flex items-center gap-x-1 text-base float-end text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                View more
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
              </a>
              
        </div>

            {{-- ?? CARD 2 --}}
            <div class=" bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70" id="card-2">
                <div class="p-1">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                      Attendance Control
                    </h3>
                    <p class="mt-2 mb-10 text-gray-500 dark:text-neutral-400">
                        Add new records, mark absences, and update attendance status.
                    </p>
                    <div class="border-b border-gray-200 dark:border-neutral-700">
                        <nav class="-mb-0.5 flex justify-end space-x-6" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                          <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active" id="horizontal-right-alignment-item-1" aria-selected="true" data-hs-tab="#horizontal-right-alignment-1" aria-controls="horizontal-right-alignment-1" role="tab">
                            Add
                          </button>
                          <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="horizontal-right-alignment-item-2" aria-selected="false" data-hs-tab="#horizontal-right-alignment-2" aria-controls="horizontal-right-alignment-2" role="tab">
                            Mark
                          </button>
                          <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="horizontal-right-alignment-item-3" aria-selected="false" data-hs-tab="#horizontal-right-alignment-3" aria-controls="horizontal-right-alignment-3" role="tab">
                            Update
                          </button>
                        </nav>
                      </div>
                      
                      <div class="mt-3">
                        <div id="horizontal-right-alignment-1" role="tabpanel" aria-labelledby="horizontal-right-alignment-item-1">
                          <p class="text-gray-500 dark:text-neutral-400">
                            Click here to <em class="font-semibold text-gray-800 dark:text-neutral-200">mark your attendance </em> for today. Ensure your presence is recorded and stay up to date with your class attendance.
                          </p>
                          <button type="button" class=" float-end m-15 mt-16 py-3 px-10 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Make an Attendance
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-plus"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><line x1="12" x2="12" y1="8" y2="16"/><line x1="8" x2="16" y1="12" y2="12"/></svg>
                          </button>
                        </div>
                        <div id="horizontal-right-alignment-2" class="hidden" role="tabpanel" aria-labelledby="horizontal-right-alignment-item-2">
                          <p class="text-gray-500 dark:text-neutral-400">
                            Click here to <em class="font-semibold text-gray-800 dark:text-neutral-200">mark yourself as absent </em> today. If you're unable to attend, make sure to update your status accordingly.
                          </p>
                          <button type="button" class=" float-end m-15 mt-20 py-3 px-10 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Mark as Absent
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-alert"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>
                          </button>
                        </div>
                        <div id="horizontal-right-alignment-3" class="hidden" role="tabpanel" aria-labelledby="horizontal-right-alignment-item-3">
                          <p class="text-gray-500 dark:text-neutral-400">
                            Click here to <em class="font-semibold text-gray-800 dark:text-neutral-200">update your attendance status.</em> Make changes if there was an error or if you need to adjust your attendance record.
                          </p>
                          <button type="button" class=" float-end m-15 mt-16 py-3 px-10 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Update Attendance
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-info"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><line x1="12" x2="12" y1="16" y2="12"/><line x1="12" x2="12.01" y1="8" y2="8"/></svg>
                          </button>
                        </div>
                      </div>
                  </div>
            </div>

            {{-- ?? CARD 3 --}}
            <div class=" bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70" id="card-3">
                <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                  Your Favorite Apps
                </h3>
                <p class="mt-4 text-base font-normal  text-gray-500 dark:text-neutral-500">
                    Discover and manage your favorite apps in one place.
                </p>
                <div class="card3-container flex flex-row gap-4 mt-5">
                    {{-- ! MINI CARD 4 --}}
                <div class="minicard-transform transform transition-transform duration-300 hover:scale-110"> {{-- ! MINI CARD HOVER TRANSFORM --}}
                    <div class="flex flex-col cursor-pointer bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-neutral-700 dark:border-neutral-700 dark:shadow-neutral-700/70" id="mini-card4">
                       <img src="{{ asset('img/figma.png') }}" alt="" id="mini-card-img1">
                       <p class="flex self-center mt-6 text-xs font-normal text-gray-500 dark:text-neutral-300">Figma</p>
                    </div>
                   </div>

                    {{-- ! MINI CARD 5 --}}
                   <div class="minicard-transform transform transition-transform duration-300 hover:scale-110"> {{-- ! MINI CARD HOVER TRANSFORM --}}
                    <div class="flex flex-col cursor-pointer bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-neutral-700 dark:border-neutral-700 dark:shadow-neutral-700/70" id="mini-card5">
                        <img src="{{ asset('img/spotify (3).png') }}" alt="" id="mini-card-img2">
                        <p class="flex self-center mt-6 text-xs font-normal text-gray-500 dark:text-neutral-300">Spotify</p>
                    </div>
                   </div>

                    {{-- ! MINI CARD 6 --}}
                   <div class="minicard-transform transform transition-transform duration-300 hover:scale-110"> {{-- ! MINI CARD HOVER TRANSFORM --}}
                    <div class="flex flex-col cursor-pointer bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-neutral-700 dark:border-neutral-700 dark:shadow-neutral-700/70" id="mini-card6">
                        <img src="{{ asset('img/discord (2).png') }}" alt="" id="mini-card-img3">
                        <p class="flex self-center mt-6 text-xs font-normal text-gray-500 dark:text-neutral-300">Discord</p>
                    </div>
                   </div>
                </div>

                <div class="card3-container flex flex-row gap-4 mt-5">
                    {{-- ! MINI CARD 7 --}}
                <div class="minicard-transform transform transition-transform duration-300 hover:scale-110"> {{-- ! MINI CARD HOVER TRANSFORM --}}
                    <div class="flex flex-col cursor-pointer bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-neutral-700 dark:border-neutral-700 dark:shadow-neutral-700/70" id="mini-card4">
                       <img src="{{ asset('img/icons8-visual-studio-96.png') }}" alt="" id="mini-card-img1">
                       <p class="flex self-center mt-6 text-xs font-normal text-gray-500 dark:text-neutral-300">Visual Studio 2022</p>
                    </div>
                   </div>

                    {{-- ! MINI CARD 8 --}}
                   <div class="minicard-transform transform transition-transform duration-300 hover:scale-110"> {{-- ! MINI CARD HOVER TRANSFORM --}}
                    <div class="flex flex-col cursor-pointer bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-neutral-700 dark:border-neutral-700 dark:shadow-neutral-700/70" id="mini-card5">
                        <img src="{{ asset('img/icons8-visual-studio-code-96.png') }}" alt="" id="mini-card-img2">
                        <p class="flex self-center mt-6 text-xs font-normal text-gray-500 dark:text-neutral-300">VS Code</p>
                    </div>
                   </div>

                    {{-- ! MINI CARD 9 --}}
                   <div class="minicard-transform transform transition-transform duration-300 hover:scale-110"> {{-- ! MINI CARD HOVER TRANSFORM --}}
                    <div class="flex flex-col cursor-pointer bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-neutral-700 dark:border-neutral-700 dark:shadow-neutral-700/70" id="mini-card6">
                        <img src="{{ asset('img/icons8-pokemmo-100.png') }}" alt="" id="mini-card-img3">
                        <p class="flex self-center mt-6 text-xs font-normal text-gray-500 dark:text-neutral-300">PokeMMO</p>
                    </div>
                   </div>

                </div>
                </div>
            </div>
        </div>
        
         {{-- ?? CARD 4 --}}
         <div class=" bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70" id="card-4">
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                  <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="border rounded-lg divide-y divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                      <div class="py-3 px-4">
                        <div class="relative max-w-xs">
                          <label for="hs-table-search" class="sr-only">Search</label>
                          <input type="text" name="hs-table-search" id="hs-table-search" class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Search for items">
                          <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                            <svg class="size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <circle cx="11" cy="11" r="8"></circle>
                              <path d="m21 21-4.3-4.3"></path>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                          <thead class="bg-gray-50 dark:bg-neutral-700">
                            <tr>
                              <th scope="col" class="py-3 px-4 pe-0">
                                <div class="flex items-center h-5">
                                  <input id="hs-table-search-checkbox-all" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                  <label for="hs-table-search-checkbox-all" class="sr-only">Checkbox</label>
                                </div>
                              </th>
                              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Name</th>
                              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Age</th>
                              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Address</th>
                              <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
                            </tr>
                          </thead>
                          <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr>
                              <td class="py-3 ps-4">
                                <div class="flex items-center h-5">
                                  <input id="hs-table-search-checkbox-1" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                  <label for="hs-table-search-checkbox-1" class="sr-only">Checkbox</label>
                                </div>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">John Brown</td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">45</td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">New York No. 1 Lake Park</td>
                              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                              </td>
                            </tr>
              
                            <tr>
                              <td class="py-3 ps-4">
                                <div class="flex items-center h-5">
                                  <input id="hs-table-search-checkbox-2" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                  <label for="hs-table-search-checkbox-2" class="sr-only">Checkbox</label>
                                </div>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">Jim Green</td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">27</td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">London No. 1 Lake Park</td>
                              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                              </td>
                            </tr>
              
                            <tr>
                              <td class="py-3 ps-4">
                                <div class="flex items-center h-5">
                                  <input id="hs-table-search-checkbox-3" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                  <label for="hs-table-search-checkbox-3" class="sr-only">Checkbox</label>
                                </div>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">Joe Black</td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">31</td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">Sidney No. 1 Lake Park</td>
                              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                              </td>
                            </tr>
              
                            <tr>
                              <td class="py-3 ps-4">
                                <div class="flex items-center h-5">
                                  <input id="hs-table-search-checkbox-4" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                  <label for="hs-table-search-checkbox-4" class="sr-only">Checkbox</label>
                                </div>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">Edward King</td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">16</td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">LA No. 1 Lake Park</td>
                              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                              </td>
                            </tr>
              
                            <tr>
                              <td class="py-3 ps-4">
                                <div class="flex items-center h-5">
                                  <input id="hs-table-search-checkbox-5" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                  <label for="hs-table-search-checkbox-5" class="sr-only">Checkbox</label>
                                </div>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">Jim Red</td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">45</td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">Melbourne No. 1 Lake Park</td>
                              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</body>
<script src="{{ mix('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/preline/dist/preline.js"></script>
</html>
