<div class="grid grid-cols-12 gap-6 mt-8">

    <div class="col-span-12 2xl:col-span-10">
        <!-- BEGIN: File Manager Filter -->
        <div class="intro-y flex flex-col-reverse sm:flex-row items-center">

            <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="search"
                    class="lucide lucide-search w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-slate-500"
                    data-lucide="search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="text" class="form-control w-full sm:w-64 box px-10" placeholder="Select features">
                <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center"
                    data-tw-placement="bottom-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" icon-name="chevron-down"
                        class="lucide lucide-chevron-down dropdown-toggle w-4 h-4 cursor-pointer text-slate-500"
                        role="button" aria-expanded="false" data-tw-toggle="dropdown" data-lucide="chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                    <div class="inbox-filter__dropdown-menu dropdown-menu pt-2" id="_st5pmpolj">
                        <div class="dropdown-content">
                            <div class="intro-y box mt-5">
                                <div
                                    class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                    <h2 class="font-medium text-base mr-auto">
                                        Features
                                    </h2>

                                </div>
                                <div id="header" class="p-5">
                                    <div class="preview">
                                        <select wire:model='selected' data-placeholder="Select your favorite actors"
                                            data-header="Actors" class="tom-select w-full tomselected"
                                            multiple="multiple" id="tomselect-4" tabindex="-1" hidden="hidden">
                                            @foreach ($optionsFeatures as $key => $feature)
                                                <option value="{{ $feature['name'] }}">{{ $feature['name'] }}</option>
                                            @endforeach

                                        </select>

                                    </div>

                                </div>
                                <button wire:click='addFeature' class="btn btn-primary w-[100%] mr-1 mb-2"> Saving
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: File Manager Filter -->
        <!-- BEGIN: Directory & Files -->
        <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">

            @forelse ($product->features as $key=> $feature)
                <div class="intro-y col-span-6 sm:col-span-3 md:col-span-3 2xl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">

                        <img src="{{ asset('public/storage/' . $feature['icon']) }}" class="w-1/5  mx-auto"></img> <a
                            href=""
                            class="block font-medium mt-4 text-center truncate">{{ $feature['name'] }}</a>

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
                                        <a wire:click='deleteFeature({{ $key }})' href="#"
                                            class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg"
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
                <div class=" self-center block w-[100vh] text-center  mt-5">
                    <p>No features available</p>
                </div>
            @endforelse
        </div>

    </div>
</div>
