<div>
    <h2 class="intro-y text-lg font-medium mt-10">
        Requests
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            {{--  <a href="{{route('admin.add.category')}}" class="btn btn-primary shadow-md mr-2">Add New Category</a>  --}}
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center"> <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="plus"
                            class="lucide lucide-plus w-4 h-4" data-lucide="plus">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg> </span>
                </button>
                {{--  <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" icon-name="printer" data-lucide="printer"
                                    class="lucide lucide-printer w-4 h-4 mr-2">
                                    <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                    <path d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2">
                                    </path>
                                    <rect x="6" y="14" width="12" height="8"></rect>
                                </svg> Print </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" icon-name="file-text" data-lucide="file-text"
                                    class="lucide lucide-file-text w-4 h-4 mr-2">
                                    <path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <line x1="10" y1="9" x2="8" y2="9"></line>
                                </svg> Export to Excel </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" icon-name="file-text" data-lucide="file-text"
                                    class="lucide lucide-file-text w-4 h-4 mr-2">
                                    <path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <line x1="10" y1="9" x2="8" y2="9"></line>
                                </svg> Export to PDF </a>
                        </li>
                    </ul>
                </div>  --}}
            </div>

        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">Name</th>
                        <th class="whitespace-nowrap">Email</th>
                        <th class="whitespace-nowrap">Mobile Number</th>
                        <th class="whitespace-nowrap">Type</th>
                        <th class="whitespace-nowrap">Service</th>
                        <th class="whitespace-nowrap">Date</th>

                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($requests as $request)
                        <tr class="intro-x">
                            <td class="w-40">

                                    <a href="" class="font-medium whitespace-nowrap">{{ $request->name }}</a>


                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{ $request->email }}</a>

                            </td>
                            <td>
                                <a class="text-slate-500 flex items-center mr-3" href="javascript:;">
                                    {{$request->phone_number }} </a>
                            </td>
                            <td>
                                <a class="text-slate-500 flex items-center mr-3" href="javascript:;">
                                    {{$request->type }} </a>
                            </td>
                            <td>
                                <a class="text-slate-500 flex items-center mr-3" href="javascript:;">
                                    {{$request->service->name }} </a>
                            </td>
                            <td>
                                <a class="text-slate-500 flex items-center mr-3" href="javascript:;">
                                    {{ \Carbon\Carbon::parse($request->date)->format('d D,M Y') }} </a>
                            </td>

                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3"
                                        href="{{ route('admin.edit.request', $request->id) }}"> <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            icon-name="check-square" data-lucide="check-square"
                                            class="lucide lucide-check-square w-4 h-4 mr-1">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                        </svg>Edit </a>

                                        {{--  <a class="flex items-center text-danger" href="#"
                                        wire:click='deleteCategory({{ $category->id }})'> <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            icon-name="trash-2" data-lucide="trash-2"
                                            class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17">
                                            </line>
                                            <line x1="14" y1="11" x2="14" y2="17">
                                            </line>
                                        </svg> Delete </a>  --}}

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="intro-x" >
                            <td class="  " colspan="4">
                                <div class="flex text-center justify-center">
                                    <p class="text-center">There no requests listed</p>

                                </div>
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        {{-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevrons-left" class="lucide lucide-chevrons-left w-4 h-4" data-lucide="chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-left" class="lucide lucide-chevron-left w-4 h-4" data-lucide="chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> </a>
                    </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                    <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-right" class="lucide lucide-chevron-right w-4 h-4" data-lucide="chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevrons-right" class="lucide lucide-chevrons-right w-4 h-4" data-lucide="chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> </a>
                    </li>
                </ul>
            </nav>
            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div> --}}
        <!-- END: Pagination -->
    </div>
</div>
