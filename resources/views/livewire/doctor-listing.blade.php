<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    @if (session()->has('message'))
        <div class="p-4 mt-2 text-sm text-white bg-teal-500 rounded-lg" role="alert" tabindex="-1"
            aria-labelledby="hs-solid-color-success-label">
            <span id="hs-solid-color-success-label" class="font-bold">Success</span> {{ session('message') }}
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
                                Doctors
                            </h2>
                            <p class="text-sm text-gray-600">
                                Our Registered Doctors.
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">

                                <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                    href="{{ route('create-doctor') }}">
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
                                    S/N
                                </span>
                            </th>

                            <th scope="col" class="px-6 py-3 border-gray-200 text-start border-s">
                                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                    Doctor Name
                                </span>
                            </th>

                            <th scope="col" class="px-6 py-3 border-gray-200 text-start border-s">
                                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                    Email
                                </span>
                            </th>

                            <th scope="col" class="px-6 py-3 border-gray-200 text-start border-s">
                                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                    Bio
                                </span>
                            </th>

                            <th scope="col" class="px-6 py-3 border-gray-200 text-start border-s">
                                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                    Specialty Name
                                </span>
                            </th>

                            <th scope="col" class="px-6 py-3 border-gray-200 text-start border-s">
                                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                    Hospital
                                </span>
                            </th>


                            <th scope="col" class="px-6 py-3 border-gray-200 text-start border-s">
                                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                    Experience
                                </span>
                            </th>





                            <th scope="col" colspan="2" class="px-6 py-3 border-gray-200 text-start border-s">
                                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                    Actions
                                </span>
                            </th>

                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @if (count($doctors) > 0)
                            @foreach ($doctors as $doctor)
                                <tr>
                                    <td class="w-auto h-px whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <span class="text-sm text-gray-800">{{ $loop->iteration }}</span>
                                        </div>
                                    </td>
                                    <td class="w-auto h-px whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <span class="text-sm text-gray-800">{{ $doctor->user->name }}</span>
                                        </div>
                                    </td>
                                    <td class="w-auto h-px whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <span class="text-sm text-gray-800">{{ $doctor->user->email }}</span>
                                        </div>
                                    </td>
                                    <td class="w-auto h-px whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <span class="text-sm text-gray-800">{{ $doctor->bio }}</span>
                                        </div>
                                    </td>
                                    <td class="w-auto h-px whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <span class="text-sm text-gray-800">{{ $doctor->speciality->name }}</span>
                                        </div>
                                    </td>
                                    <td class="w-auto h-px whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <span class="text-sm text-gray-800">{{ $doctor->hospital }}</span>
                                        </div>
                                    </td>
                                    <td class="w-auto h-px whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <span class="text-sm text-gray-800">{{ $doctor->experience }}</span>
                                        </div>
                                    </td>


                                    <td class="w-auto h-px text-center align-middle whitespace-nowrap">
                                        <div class="inline-flex space-x-9">
                                            <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                            href="/edit/doctor/{{$doctor->id}}">
                                            Edit
                                        </a>
                                        <button wire:confirm.prevent='Are you sure?' wire:click='delete({{$doctor->id}})' class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-lg gap-x-2 hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none"
                                            >
                                            Cancel
                                        </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="h-20 font-semibold tracking-wide text-center text-gray-800 align-middle" colspan="3">No data found!</td>
                            </tr>
                        @endif

                    </tbody>
                </table>
                <!-- End Table -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->
</div>
<!-- End Table Section -->
