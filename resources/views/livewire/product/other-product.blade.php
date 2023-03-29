<div class=" box p-5 mt-5">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Status</label>
                <select id="tabulator-html-filter-field"
                    class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="name">Name</option>
                    <option value="category">Category</option>
                    <option value="remaining_stock">Remaining Stock</option>
                </select>
            </div>
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Type</label>
                <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="like" selected="">like</option>
                    <option value="=">=</option>
                    <option value="<">&lt;</option>
                    <option value="<=">&lt;=</option>
                    <option value=">">&gt;</option>
                    <option value=">=">&gt;=</option>
                    <option value="!=">!=</option>
                </select>
            </div>
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">filter</label>
                <input id="tabulator-html-filter-value" type="text"
                    class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search...">
            </div>
            <div class="mt-2 xl:mt-0 ml-auto">
                <button id="tabulator-html-filter-go" type="button" class="btn btn-primary w-full sm:w-16">Go</button>

            </div>
        </form>

    </div>
    <div class="overflow-x-auto scrollbar-hidden">
        <div id="" class="mt-5 table-report table-report--tabulator tabulator" role="grid"
            tabulator-layout="fitColumns">
            <div class="tabulator-header" style="padding-right: 0px; margin-left: 0px;">
                <div class="tabulator-headers" style="margin-left: 0px;">
                    <div class="tabulator-col" role="columnheader" aria-sort="none"
                        style="min-width: 30px; width: 40px; height: 44px;" title="">
                        <div class="tabulator-col-content">
                            <div class="tabulator-col-title-holder">
                                <div class="tabulator-col-title">&nbsp;</div>
                            </div>
                        </div>
                        <div class="tabulator-col-resize-handle"></div>
                        <div class="tabulator-col-resize-handle prev"></div>
                    </div>
                    <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                        tabulator-field="name" style="min-width: 200px; height: 44px; width: 200px;" title="">
                        <div class="tabulator-col-content">
                            <div class="tabulator-col-title-holder">
                                <div class="tabulator-col-title">PRODUCT NAME</div>

                            </div>
                        </div>
                        <div class="tabulator-col-resize-handle"></div>
                        <div class="tabulator-col-resize-handle prev"></div>
                    </div>
                    <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                        tabulator-field="images" style="min-width: 200px; height: 44px; width: 238px;" title="">
                        <div class="tabulator-col-content">
                            <div class="tabulator-col-title-holder">
                                <div class="tabulator-col-title">IMAGES</div>

                            </div>
                        </div>
                        <div class="tabulator-col-resize-handle"></div>
                        <div class="tabulator-col-resize-handle prev"></div>
                    </div>
                    <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                        tabulator-field="remaining_stock" style="min-width: 200px; height: 44px; width: 238px;"
                        title="">
                        <div class="tabulator-col-content">
                            <div class="tabulator-col-title-holder">
                                <div class="tabulator-col-title">Price</div>

                            </div>
                        </div>
                        <div class="tabulator-col-resize-handle"></div>
                        <div class="tabulator-col-resize-handle prev"></div>
                    </div>
                    <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                        tabulator-field="status" style="min-width: 200px; height: 44px; width: 241px;" title="">
                        <div class="tabulator-col-content">
                            <div class="tabulator-col-title-holder">
                                <div class="tabulator-col-title">STATUS</div>

                            </div>
                        </div>
                        <div class="tabulator-col-resize-handle"></div>
                        <div class="tabulator-col-resize-handle prev"></div>
                    </div>
                    <div class="tabulator-col tabulator-sortable" role="columnheader" aria-sort="none"
                        tabulator-field="actions" style="min-width: 200px; width: 201px; display: none; height: 44px;"
                        title="">
                        <div class="tabulator-col-content">
                            <div class="tabulator-col-title-holder">
                                <div class="tabulator-col-title">ACTIONS</div>

                            </div>
                        </div>
                        <div class="tabulator-col-resize-handle"></div>
                        <div class="tabulator-col-resize-handle prev"></div>
                    </div>

                </div>
                <div class="tabulator-frozen-rows-holder"></div>
            </div>
            <div class="tabulator-tableHolder" tabindex="0">
                <div class="tabulator-table" style="padding-top: 0px; padding-bottom: 0px;">
                    @foreach ($products as $index => $product)
                        <div class="tabulator-row tabulator-selectable tabulator-row-{{ $index % 2 === 1 ? 'odd' : 'even' }}"
                            role="row" style="padding-left: 0px;">
                            <div class="tabulator-cell tabulator-row-handle" role="gridcell"
                                style="width: 40px; text-align: center; height: 64px;" title="">
                                <div class="tabulator-responsive-collapse-toggle open"><span
                                        class="tabulator-responsive-collapse-toggle-open">+</span><span
                                        class="tabulator-responsive-collapse-toggle-close">-</span></div>
                                <div class="tabulator-col-resize-handle"></div>
                                <div class="tabulator-col-resize-handle prev"></div>
                            </div>
                            <div class="tabulator-cell" role="gridcell"
                                style="width: 200px; display: inline-flex; align-items: center; height: 64px;"
                                tabulator-field="name" title="">
                                <div>
                                    <div class="font-medium whitespace-nowrap capitalize">{{ $product->name }}</div>
                                    {{--  <div class="text-slate-500 text-xs whitespace-nowrap">{{ $car->bodyType }}</div>  --}}
                                </div>
                                <div class="tabulator-col-resize-handle"></div>
                                <div class="tabulator-col-resize-handle prev"></div>
                            </div>
                            <div class="tabulator-cell" role="gridcell"
                                style="width: 238px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                tabulator-field="images" title="">
                                <div class="flex lg:justify-center">
                                    @foreach ($product->images as $image)
                                        <div class="intro-x w-10 h-10 image-fit">
                                            <img alt="MotoringApp " class="rounded-full"
                                                src="{{ asset('public/storage/' . $image) }}">
                                        </div>
                                    @endforeach

                                </div>
                                <div class="tabulator-col-resize-handle"></div>
                                <div class="tabulator-col-resize-handle prev"></div>
                            </div>
                            <div class="tabulator-cell" role="gridcell"
                                style="width: 238px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                tabulator-field="remaining_stock" title="">@convert($product->price)<div
                                    class="tabulator-col-resize-handle"></div>
                                <div class="tabulator-col-resize-handle prev"></div>
                            </div>
                            <div class="tabulator-cell" role="gridcell"
                                style="width: 241px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                tabulator-field="status" title="">
                                <div class="flex items-center lg:justify-center text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="check-square"
                                        data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-2">
                                        <polyline points="9 11 12 14 22 4"></polyline>
                                        <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                    </svg> Inactive
                                </div>
                                <div class="tabulator-col-resize-handle"></div>
                                <div class="tabulator-col-resize-handle prev"></div>
                            </div>
                            <div class="tabulator-cell" role="gridcell"
                                style="width: 201px; text-align: center; display: none; align-items: center; justify-content: center; height: 64px;"
                                tabulator-field="actions" title="">
                                <div class="flex lg:justify-center items-center">
                                    <a href="{{ route('admin.edit.other_product', $product->id) }}"
                                        class="edit flex items-center mr-3" href="javascript:;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            icon-name="check-square" data-lucide="check-square"
                                            class="lucide lucide-check-square w-4 h-4 mr-1">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                        </svg> Edit
                                    </a>
                                    <a class="delete flex items-center text-danger" href="javascript:;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
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
                                        </svg> Delete
                                    </a>
                                </div>
                                <div class="tabulator-col-resize-handle"></div>
                                <div class="tabulator-col-resize-handle prev"></div>
                            </div>

                            <div class="tabulator-responsive-collapse">
                                <table>
                                    <tr>
                                        <td><strong>ACTIONS</strong></td>
                                        <td>
                                            <div>
                                                <div class="flex lg:justify-center items-center">
                                                    <a href="{{ route('admin.edit.other_product', $product->id) }}"
                                                        class="edit flex items-center mr-3" href="javascript:;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            icon-name="check-square" data-lucide="check-square"
                                                            class="lucide lucide-check-square w-4 h-4 mr-1">
                                                            <polyline points="9 11 12 14 22 4"></polyline>
                                                            <path
                                                                d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                            </path>
                                                        </svg> Edit
                                                    </a>
                                                    <a class="delete flex items-center text-danger"
                                                        href="javascript:;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            icon-name="trash-2" data-lucide="trash-2"
                                                            class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg> Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
