<div class="flex justify-center mt-8 md:mt-24">
    <div class="intro-y box p-12 w-[100%] md:w-[50%]">

        <div class="box p-5 intro-y">
            <a href="{{ route('admin.add.brand') }}" type="button" class="btn btn-primary bg-green-800 w-full mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="edit-3" class="lucide lucide-edit-3 w-4 h-4 mr-2" data-lucide="edit-3">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                </svg> Add New Brand </a>
            <div class="border-t border-b border-slate-200/60 dark:border-darkmode-400 mt-6 mb-5 py-3"
                id="calendar-events">
                @forelse ($brands as $brand)
                    <div class="relative">
                        <div
                            class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            <div class="w-2 h-2 bg-black rounded-full mr-3"></div>
                            <div class="pr-10">
                                <div class="event__title truncate">{{ $brand->full_name }}</div>

                            </div>
                        </div>
                        <a class="flex items-center absolute top-0 bottom-0 my-auto right-0" href=""> <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2"
                                class="lucide text-red-400 lucide-trash-2 block mx-auto">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                </path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg></a>
                    </div>

                @empty
                    <p class="text-center text-slate-500">Mo register brand</p>
                    <div class="text-slate-500 text-lg p-3 text-center hidden" id="calendar-no-events">No events yet
                    </div>
                @endforelse
            </div>
            {{ $brands->links() }}

        </div>

    </div>
</div>
