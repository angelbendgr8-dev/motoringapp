<div class="flex justify-center mt-8 md:mt-24">
    <div class="intro-y box p-12 w-[100%] md:w-[50%]">

        <div class="p-5 box intro-y">
            <a href="{{ route('admin.add.brand') }}" type="button" class="w-full mt-2 bg-green-800 btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="edit-3" class="w-4 h-4 mr-2 lucide lucide-edit-3" data-lucide="edit-3">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                </svg> Add New Brand </a>
            <div class="py-3 mt-6 mb-5 border-t border-b border-slate-200/60 dark:border-darkmode-400"
                id="calendar-events">
                @forelse ($brands as $brand)
                    <div class="relative">
                        <div
                            class="flex items-center p-3 -mx-3 transition duration-300 ease-in-out rounded-md cursor-pointer event hover:bg-slate-100 dark:hover:bg-darkmode-400">
                            <div class="w-2 h-2 mr-3 bg-black rounded-full"></div>
                            <div class="pr-10">
                                <div class="truncate event__title">{{ $brand->full_name }}</div>

                            </div>
                        </div>
                        <a wire:click="deleteBrand({{$brand->id}})" class="absolute top-0 bottom-0 right-0 flex items-center my-auto" href="#"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2"
                                class="block mx-auto text-red-400 lucide lucide-trash-2">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                </path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg></a>
                    </div>

                @empty
                    <p class="text-center text-slate-500">Mo register brand</p>
                    <div class="hidden p-3 text-lg text-center text-slate-500" id="calendar-no-events">No events yet
                    </div>
                @endforelse
            </div>
            {{ $brands->links() }}

        </div>

    </div>
</div>
