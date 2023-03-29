<div class="intro-y grid grid-cols-11 gap-5 mt-5">
    <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
        <div class="box p-5 rounded-md">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                <div class="font-medium text-base truncate">User Details</div>

            </div>
            <div class="flex items-center"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" icon-name="clipboard" data-lucide="user"
                    class="lucide lucide-clipboard w-4 h-4 text-slate-500 mr-2">
                    <path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"></path>
                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1">
                    </rect>
                </svg> Name: <a href="" class=" capitalize decoration-dotted ml-1">{{ $product->user->name }}</a>
            </div>
            <div class="flex items-center mt-3"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" icon-name="user" data-lucide="mail"
                    class="lucide lucide-user w-4 h-4 text-slate-500 mr-2">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg> Email: <a href=""
                    class=" capitalize decoration-dotted ml-1">{{ $product->user->email }}</a> </div>
            <div class="flex items-center mt-3"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" icon-name="calendar" data-lucide="phone"
                    class="lucide lucide-calendar w-4 h-4 text-slate-500 mr-2">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2">
                    </rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg> Phone Number: {{ $product->user->code }}{{ $product->user->mobile_number }} </div>

        </div>
        <div class="box p-5 rounded-md mt-5">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                <div class="font-medium text-base truncate">Product Details</div>
                <a href="{{ route('admin.inspect.product', $product->id) }}"
                    class="flex items-center ml-auto text-primary"> <svg xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="edit"
                        data-lucide="edit" class="lucide lucide-edit w-4 h-4 mr-2">
                        <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg> Inspection details </a>
            </div>
            <div class="flex items-center"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" icon-name="clipboard" data-lucide="clipboard"
                    class="lucide lucide-clipboard w-4 h-4 text-slate-500 mr-2">
                    <path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"></path>
                    <rect x="8" y="2" width="8" height="4" rx="1"
                        ry="1"></rect>
                </svg> Name: <p href="#" class=" capitalize decoration-dotted ml-1">{{ $product->model }}</p>
            </div>
            <div class="flex items-center mt-3"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" icon-name="shopping-bag"
                    data-lucide="shopping-bag" class="lucide lucide-shopping-bag w-4 h-4 text-slate-500 mr-2">
                    <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"></path>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <path d="M16 10a4 4 0 01-8 0"></path>
                </svg> Gear Type: <p href="#" class=" capitalize decoration-dotted ml-1">
                    {{ $product->gearType }}</p>
            </div>
            <div class="flex capitalize items-center mt-3"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" icon-name="calendar" data-lucide="calendar"
                    class="lucide lucide-calendar w-4 h-4 text-slate-500 mr-2">
                    <rect x="3" y="4" width="18" height="18" rx="2"
                        ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg> Fuel Type: {{ $product->fuelType }} </div>
            <div class="flex items-center mt-3"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" icon-name="map-pin" data-lucide="map-pin"
                    class="lucide lucide-map-pin w-4 h-4 text-slate-500 mr-2">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                </svg> Body Type: {{ $product->bodyType }} </div>
            <div class="flex items-center mt-3"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" icon-name="map-pin" data-lucide="map-pin"
                    class="lucide lucide-map-pin w-4 h-4 text-slate-500 mr-2">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                </svg> Mileage: {{ $product->mileage }} </div>
            <div class="flex items-center mt-3"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" icon-name="map-pin" data-lucide="map-pin"
                    class="lucide lucide-map-pin w-4 h-4 text-slate-500 mr-2">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                </svg> Price: ₦ @convert($product->price) </div>
            <div class="flex items-center mt-3"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" icon-name="map-pin" data-lucide="map-pin"
                    class="lucide lucide-map-pin w-4 h-4 text-slate-500 mr-2">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                </svg> Year: {{ $product->caryear }} </div>
            <div class="flex items-center mt-3"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" icon-name="map-pin" data-lucide="map-pin"
                    class="lucide lucide-map-pin w-4 h-4 text-slate-500 mr-2">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                </svg> Selling Condition: {{ $product->sellingCondition }} </div>
            <div class="flex items-center mt-3"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" icon-name="map-pin" data-lucide="map-pin"
                    class="lucide lucide-map-pin w-4 h-4 text-slate-500 mr-2">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                </svg> Features: <a href="{{ route('admin.product.features', $product->id) }}"
                    class="flex items-center ml-auto text-primary"> <svg xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="edit"
                        data-lucide="edit" class="lucide lucide-edit w-4 h-4 mr-2">
                        <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg> View Features </a> </div>
            <div class="flex items-center mt-3"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" icon-name="calendar" data-lucide="calendar"
                    class="lucide lucide-calendar w-4 h-4 text-slate-500 mr-2">
                    <rect x="3" y="4" width="18" height="18" rx="2"
                        ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg> Status: <span
                    class="bg-{{ $product->status === 'pending' ? 'warning/20' : 'success/20' }} text-{{ $product->status === 'pending' ? 'warning' : 'success' }} rounded px-2 ml-1">{{ $product->status }}</span>
            </div>
            <div class=" border-t border-slate-200/60 mt-6">
                <label for="regular-form-1" class="form-label">Status</label>
                <select wire:model='product.status'
                    class="py-2 form-control border-1 rounded-md border-slate-200 @error('category_id') border-red-300 @enderror">
                    <option selected> Status</option>
                    <option value="active">Active</option>
                    <option value="hot">Hot</option>
                    <option value="featured">Featured</option>

                </select>
                @error('category_id')
                    <div class="text-xs bg-red-100">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex items-center dark:border-darkmode-400 pt-5 mt-5 font-medium">
                <a href="#" wire:click='changeStatus' type="button"
                    class="btn btn-outline-secondary w-full py-1 px-2">Change Status</a>
            </div>
        </div>
        @if ($product->type === 'Dropoff')
            <div class="box p-5 rounded-md mt-5">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Contact Details</div>

                </div>
                <div class="flex items-center mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" icon-name="clipboard" data-lucide="map-pin"
                        class="lucide lucide-map-pin w-4 h-4 text-slate-500 mr-2">
                        <path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"></path>
                        <rect x="8" y="2" width="8" height="4" rx="1"
                            ry="1"></rect>
                    </svg> Address
                    <div class="ml-auto">{{ $product->address }}</div>
                </div>
                <div class="flex items-center mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" icon-name="map-pin" data-lucide="map-pin"
                        class="lucide lucide-map-pin w-4 h-4 text-slate-500 mr-2">
                        <path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"></path>
                        <rect x="8" y="2" width="8" height="4" rx="1"
                            ry="1"></rect>
                    </svg> State:
                    <div class="ml-auto">{{ $product->state }}</div>
                </div>
                <div class="flex items-center mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" icon-name="map-pin" data-lucide="map-pin"
                        class="lucide lucide-clipboard w-4 h-4 text-slate-500 mr-2">
                        <path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"></path>
                        <rect x="8" y="2" width="8" height="4" rx="1"
                            ry="1"></rect>
                    </svg> Area:
                    <div class="ml-auto">{{ $product->area }}</div>
                </div>
                <div class="flex items-center mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" icon-name="star" data-lucide="clock"
                        class="lucide lucide-star w-4 h-4 text-slate-500 mr-2">
                        <polygon
                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                        </polygon>
                    </svg> Date:
                    <div class="ml-auto">{{ \Carbon\Carbon::parse($product->date)->format('d D,M Y') }}</div>
                </div>

            </div>
        @endif
    </div>
    <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
        <div class="grid grid-cols-12 gap-5">
            @foreach ($product->images as $key => $image)
                <div class="intro-y col-span-12 sm:col-span-6 2xl:col-span-4">
                    <div class="box">
                        <div class="p-5">
                            <div
                                class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                                <img alt="MotoringApp " class="rounded-md"
                                    src="{{ asset('public/storage/' . $image) }}">
                            </div>

                        </div>
                        <div
                            class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">

                            <a href="#" wire:click="deleteImage({{ $key }})"
                                class="flex items-center text-danger" data-tw-target="#delete-confirmation-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" icon-name="trash-2"
                                    data-lucide="trash-2" class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg> Delete </a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <div class="mt-8 md:mt-24 bg-red-400">
            <div class="intro-y box p-12 w-[100%]">
                <h1 class="text-center text-3xl font-semibold my-4">Add Image</h1>


                <div class="mt-3">
                    <label for="regular-form-7" class="form-label">Photo</label>
                    <input wire:model='image' id="regular-form-7" type="file"
                        class="form-control border border-slate-200 rounded-md  @error('image') border-red-300 @enderror"
                        placeholder="Process1, Process2, process3">
                    @error('image')
                        <div class="clear-right">
                            <p class="float-right text-red-400">{{ $message }}</p>
                        </div>
                    @enderror
                    <div wire:loading wire:target="image" class="text-yellow-500 my-2">Uploading, Please wait...
                    </div>

                </div>

                <div class="flex justify-center items-center mt-10">
                    <button wire:click='addImage' class="btn btn-primary w-32 mr-2 mb-2">
                        <div>
                            <span wire:loading.remove wire:target='addImage'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" icon-name="plus"
                                    data-lucide="plus" class="lucide lucide-plus w-4 h-4 mr-2">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>

                            </span>
                            <span wire:loading wire:target='addImage' class="text-white">
                                <svg width="20" viewBox="0 0 57 57" xmlns="http://www.w3.org/2000/svg"
                                    class="w-8 h-8">
                                    <g fill="none" fill-rule="evenodd">
                                        <g transform="translate(1 1)">
                                            <circle cx="5" cy="50" r="5" fill="white">
                                                <animate attributeName="cy" begin="0s" dur="2.2s"
                                                    values="50;5;50;50" calcMode="linear" repeatCount="indefinite">
                                                </animate>
                                                <animate attributeName="cx" begin="0s" dur="2.2s"
                                                    values="5;27;49;5" calcMode="linear" repeatCount="indefinite">
                                                </animate>
                                            </circle>
                                            <circle cx="27" cy="5" r="5" fill="white">
                                                <animate attributeName="cy" begin="0s" dur="2.2s"
                                                    from="5" to="5" values="5;50;50;5"
                                                    calcMode="linear" repeatCount="indefinite"></animate>
                                                <animate attributeName="cx" begin="0s" dur="2.2s"
                                                    from="27" to="27" values="27;49;5;27"
                                                    calcMode="linear" repeatCount="indefinite"></animate>
                                            </circle>
                                            <circle cx="49" cy="50" r="5" fill="white">
                                                <animate attributeName="cy" begin="0s" dur="2.2s"
                                                    values="50;50;5;50" calcMode="linear" repeatCount="indefinite">
                                                </animate>
                                                <animate attributeName="cx" from="49" to="49"
                                                    begin="0s" dur="2.2s" values="49;5;27;49"
                                                    calcMode="linear" repeatCount="indefinite"></animate>
                                            </circle>
                                        </g>
                                    </g>
                                </svg>
                            </span>

                        </div>

                        Add
                    </button>
                </div>

            </div>
        </div>

    </div>
</div>
