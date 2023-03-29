<div class="grid grid-cols-12 gap-6 mt-8">

    <div class="col-span-12 2xl:col-span-10">
        <!-- BEGIN: File Manager Filter -->
        <div class="intro-y flex flex-col-reverse sm:flex-row items-center">

            <div class="w-full sm:w-auto flex">
                <a href="{{ route('admin.add.feature') }}" class="btn btn-primary shadow-md mr-2">Add Feature</a>

            </div>
        </div>
        <!-- END: File Manager Filter -->
        <!-- BEGIN: Directory & Files -->
        <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">

            @forelse ($features as $feature)
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">

                        <img src="{{ asset('public/storage/' . $feature->icon) }}" class="w-3/5  mx-auto"></img> <a
                            href="" class="block font-medium mt-4 text-center truncate">{{ $feature->name }}</a>

                        <div class="absolute top-0 right-0 mr-2 mt-3 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"
                                data-tw-toggle="dropdown"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    icon-name="more-vertical" data-lucide="more-vertical"
                                    class="lucide lucide-more-vertical w-5 h-5 text-slate-500">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg> </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">

                                    <li>
                                        <a href="" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" icon-name="trash" data-lucide="trash"
                                                class="lucide lucide-trash w-4 h-4 mr-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                                </path>
                                            </svg> Delete </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>No features available</p>
            @endforelse
        </div>

    </div>
</div>
