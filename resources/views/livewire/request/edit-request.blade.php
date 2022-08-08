<div class="intro-y  ">
    <div class="mx-auto py-12 w-[100%] md:w-[50%] ">



        <div class="box p-5 rounded-md mt-5">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                <div class="font-medium text-base truncate">Service Details</div>

            </div>
            <div class="flex items-center mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="clipboard" data-lucide="map-pin"
                    class="lucide lucide-map-pin w-4 h-4 text-slate-500 mr-2">
                    <path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"></path>
                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1">
                    </rect>
                </svg> Address
                <div class="ml-auto">{{ $request->address }}</div>
            </div>
            <div class="flex items-center mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="map-pin" data-lucide="map-pin" class="lucide lucide-map-pin w-4 h-4 text-slate-500 mr-2">
                    <path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"></path>
                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1">
                    </rect>
                </svg> State:
                <div class="ml-auto">{{ $request->state }}</div>
            </div>
            <div class="flex items-center mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="map-pin" data-lucide="map-pin"
                    class="lucide lucide-clipboard w-4 h-4 text-slate-500 mr-2">
                    <path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"></path>
                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1">
                    </rect>
                </svg> Area:
                <div class="ml-auto">{{ $request->area }}</div>
            </div>
            <div class="flex items-center mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="map-pin" data-lucide="mail" class="lucide lucide-clipboard w-4 h-4 text-slate-500 mr-2">
                    <path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"></path>
                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1">
                    </rect>
                </svg> Contact Email:
                <div class="ml-auto">{{ $request->email }}</div>
            </div>
            <div class="flex items-center mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="map-pin" data-lucide="phone"
                    class="lucide lucide-clipboard w-4 h-4 text-slate-500 mr-2">
                    <path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"></path>
                    <rect x="8" y="2" width="8" height="4" rx="1"
                        ry="1">
                    </rect>
                </svg> Mobile Number:
                <div class="ml-auto">{{ $request->phone_number }}</div>
            </div>
            <div class="flex items-center mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" icon-name="map-pin" data-lucide="cog"
                    class="lucide lucide-clipboard w-4 h-4 text-slate-500 mr-2">
                    <path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"></path>
                    <rect x="8" y="2" width="8" height="4" rx="1"
                        ry="1">
                    </rect>
                </svg> Service Name:
                <div class="ml-auto">{{ $request->service->name }}</div>
            </div>
            <div class="flex items-center mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" icon-name="map-pin" data-lucide="cpu"
                    class="lucide lucide-clipboard w-4 h-4 text-slate-500 mr-2">
                    <path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"></path>
                    <rect x="8" y="2" width="8" height="4" rx="1"
                        ry="1">
                    </rect>
                </svg> Delivery Mode:
                <div class="ml-auto">{{ $request->type }}</div>
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
                <div class="ml-auto">{{ \Carbon\Carbon::parse($request->date)->format('d D,M Y') }}</div>
            </div>
            <div class="flex items-center mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" icon-name="star" data-lucide="info"
                    class="lucide lucide-star w-4 h-4 text-slate-500 mr-2">
                    <polygon
                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                    </polygon>
                </svg> Status:
                {{--  @dd($request->status)  --}}
                @if ($request->status === 'pending')
                    <div class="bg-warning/20 text-warning rounded px-2 ml-1">
                        {{ $request->status }}</div>
                @elseif ($request->status === 'cancelled')
                    <div class="bg-red-100 text-red-300 rounded px-2 ml-1">
                        {{ $request->status }}</div>
                @elseif ($request->status === 'inprogress')
                    <div class="bg-blue-600  text-blue-200 rounded px-2 ml-1">
                        {{ $request->status }}</div>
                @else
                    <div class="bg-success/20 text-successrounded px-2 ml-1">
                        {{ $request->status }}</div>
                @endif





            </div>

            <div class=" border-t border-slate-200/60 mt-6">
                <label for="regular-form-1" class="form-label">Status</label>
                <select wire:model='request.status'
                    class="py-2 form-control border-1 rounded-md border-slate-200 @error('request') border-red-300 @enderror">
                    <option selected> Status</option>
                    <option value="completed">Completed</option>
                    <option value="inprogress">Inprogress</option>
                    <option value="cancelled">Cancelle</option>

                </select>
                @error('request')
                    <div class="text-xs bg-red-100">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex items-center dark:border-darkmode-400 pt-5 mt-5 font-medium">
                <a href="#" wire:click='changeStatus' type="button"
                    class="btn btn-outline-secondary w-full py-1 px-2">Change Status</a>
            </div>

        </div>

    </div>


</div>
