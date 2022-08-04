<div class="flex justify-center mt-8 md:mt-24">
    <div class="intro-y box p-12 w-[100%] md:w-[50%]">
        <h1 class="my-4 text-3xl font-semibold text-center">Edit Category</h1>

        <div> <label for="regular-form-1" class="form-label">Category Name</label>
            <input wire:model='category.name' type="text"
                class="form-control border border-slate-200 rounded-md  @error('name') border-red-300 @enderror"
                placeholder="Category Name">
            @error('category.name')
                <div class="clear-right">
                    <p class="float-right text-red-400">{{$message}}</p>
                </div>
            @enderror
        </div>
        <div class="mt-3">
            <label for="regular-form-2" class="form-label">Description</label>
            <textarea wire:model='category.description' id="regular-form-2" type="text"
                class="form-control border border-slate-200 rounded-md  @error('category.description') border-red-300 @enderror"
                cols="4" rows="2"></textarea>
            @error('category.description')
                <div class="clear-right">
                    <p class="float-right text-red-400">{{$message}}</p>
                </div>
            @enderror
        </div>

        <div class="mt-3">
            <label for="regular-form-7" class="form-label">Photo</label>
            <input wire:model='picture' id="regular-form-7" type="file"
                class="form-control border border-slate-200 rounded-md  @error('picture') border-red-300 @enderror" >
             @error('picture')
                <div class="clear-right">
                    <p class="float-right text-red-400">{{$message}}</p>
                </div>
            @enderror

        </div>

        <div class="flex items-center justify-center mt-10">
            <button wire:click='updateCategory' class="w-32 mb-2 mr-2 btn btn-primary">
                <div >
                    <span wire:loading.remove wire:target='updateCategory' >
                        <svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            icon-name="plus" data-lucide="plus" class="w-4 h-4 mr-2 lucide lucide-plus">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>

                    </span>
                    <span wire:loading wire:target='updateCategory' class="text-white">
                        <svg width="20" viewBox="0 0 57 57" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">
                            <g fill="none" fill-rule="evenodd">
                                <g transform="translate(1 1)">
                                    <circle cx="5" cy="50" r="5" fill="white">
                                        <animate attributeName="cy" begin="0s" dur="2.2s" values="50;5;50;50" calcMode="linear" repeatCount="indefinite"></animate>
                                        <animate attributeName="cx" begin="0s" dur="2.2s" values="5;27;49;5" calcMode="linear" repeatCount="indefinite"></animate>
                                    </circle>
                                    <circle cx="27" cy="5" r="5" fill="white">
                                        <animate attributeName="cy" begin="0s" dur="2.2s" from="5" to="5" values="5;50;50;5" calcMode="linear" repeatCount="indefinite"></animate>
                                        <animate attributeName="cx" begin="0s" dur="2.2s" from="27" to="27" values="27;49;5;27" calcMode="linear" repeatCount="indefinite"></animate>
                                    </circle>
                                    <circle cx="49" cy="50" r="5" fill="white">
                                        <animate attributeName="cy" begin="0s" dur="2.2s" values="50;50;5;50" calcMode="linear" repeatCount="indefinite"></animate>
                                        <animate attributeName="cx" from="49" to="49" begin="0s" dur="2.2s" values="49;5;27;49" calcMode="linear" repeatCount="indefinite"></animate>
                                    </circle>
                                </g>
                            </g>
                        </svg>
                    </span>

                </div>

                 Update </button>
        </div>

    </div>
</div>
