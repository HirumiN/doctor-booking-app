<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    @if (session()->has('message'))
    <div class="p-4 mt-2 text-sm text-white bg-teal-500 rounded-lg" role="alert" tabindex="-1" aria-labelledby="hs-solid-color-success-label">
        <span id="hs-solid-color-success-label" class="font-bold">Success</span> {{session('message')}}
      </div>
    @endif
    <!-- Card -->
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden bg-white border border-gray-200 shadow-sm rounded-xl">
                    <!-- Header -->
                    <div
                        class="grid gap-3 px-6 py-4 border-b border-gray-200 md:flex md:justify-between md:items-center">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">
                                Specialities
                            </h2>
                            <p class="text-sm text-gray-600">
                                Our Registered Specialities.
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">

                                <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                    href="{{ route('create-specialities') }}">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                    Create
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="divide-y divide-gray-200 bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 border-gray-200 text-start border-s">
                                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                        Country
                                    </span>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                        Users
                                    </span>
                                </th>

                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">

                            <tr>
                                <td class="w-auto h-px whitespace-nowrap">
                                    <div class="px-6 py-2">
                                        <span class="text-sm text-gray-800">1.64%</span>
                                    </div>
                                </td>
                                <td class="w-auto h-px whitespace-nowrap">
                                    <div class="px-6 py-2">
                                        <span class="text-sm text-gray-800">00:00:55</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Table -->

                    <!-- Footer -->
                    <div
                        class="grid gap-3 px-6 py-4 border-t border-gray-200 md:flex md:justify-between md:items-center">
                        <div>
                            <p class="text-sm text-gray-600">
                                <span class="font-semibold text-gray-800">9</span> results
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m15 18-6-6 6-6" />
                                    </svg>
                                    Prev
                                </button>

                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                    Next
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->
</div>
<!-- End Table Section -->
