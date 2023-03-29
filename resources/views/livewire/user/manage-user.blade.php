<div>
    <h2 class="intro-y text-lg font-medium mt-10">
        Users
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{route('admin.add.user')}}" class="btn btn-primary shadow-md mr-2">Add User</a>
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

            </div>
            <div class="ml-8 sm:flex items-center sm:mr-4 mt-2 xl:mt-0">

                <input wire:model='search' id="tabulator-html-filter-value" type="text" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search...">
            </div>

        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">Name</th>
                        <th class="whitespace-nowrap">Email</th>
                        <th class="whitespace-nowrap">Phone Number</th>
                        <th class="whitespace-nowrap">Type</th>

                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr class="intro-x">
                            <td class="w-40">
                                <div class="flex">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                       <p>{{$user->name}}</p>
                                    </div>

                                </div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{ $user->email }}</a>

                            </td>
                            <td>
                                <a class="text-slate-500 flex items-center mr-3" href="javascript:;">
                                    {{$user->phone_number??'' }} </a>
                            </td>
                            <td>
                                <a class="text-slate-500 flex items-center mr-3" href="javascript:;">
                                    {{$user->type }} </a>
                            </td>

                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">

                                    <a class="flex items-center text-danger" href="#"
                                        wire:click='deleteCategory({{ $user->id }})'> <svg
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
                                        </svg> Delete </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="intro-x" >
                            <td class="  " colspan="4">
                                <div class="flex text-center justify-center">
                                    <p class="text-center">There no categories listed</p>

                                </div>
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>
</div>
