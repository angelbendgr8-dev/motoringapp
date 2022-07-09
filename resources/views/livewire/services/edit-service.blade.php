<div class="flex justify-center mt-8 md:mt-24">
    <div class="intro-y box p-12 w-[100%] md:w-[50%]">
        <h1 class="text-center text-3xl font-semibold my-4">Edit Service</h1>

        <div> <label for="regular-form-1" class="form-label">Service Name</label>
            <input wire:model='service.name' type="text"
                class="form-control border border-slate-200 rounded-md  @error('service.name') border-red-300 @enderror"
                placeholder="Service Name">
            @error('service.name')
                <div class="clear-right">
                    <p class="float-right text-red-400">{{$message}}</p>
                </div>
            @enderror
        </div>
        <div class="mt-3">
            <label for="regular-form-2" class="form-label">Description</label>
            <textarea wire:model='service.description' id="regular-form-2" type="text"
                class="form-control border border-slate-200 rounded-md  @error('service.description') border-red-300 @enderror"
                cols="4" rows="2"></textarea>
            @error('service.description')
                <div class="clear-right">
                    <p class="float-right text-red-400">{{$message}}</p>
                </div>
            @enderror
        </div>
        <div class="mt-3">
            <label for="regular-form-3" class="form-label">Process</label>
            <input wire:model='process' id="regular-form-3" type="text"
                class="form-control border border-slate-200 rounded-md " placeholder="Process1, Process2, process3">
            <div class="form-help">Write each process and separate it by comma</div>
        </div>
        <div class="mt-3">
            <label for="regular-form-7" class="form-label">Photo</label>
            <input wire:model='picture' id="regular-form-7" type="file"
                class="form-control border border-slate-200 rounded-md  @error('description') border-red-300 @enderror" placeholder="Process1, Process2, process3">
             @error('picture')
                <div class="clear-right">
                    <p class="float-right text-red-400">{{$message}}</p>
                </div>
            @enderror

        </div>
        <div class="mt-3">
            <label for="regular-form-2" class="form-label">Assurance (optional)</label>
            <input wire:model='assurance' id="regular-form-1" type="text"
                class="form-control border border-slate-200 rounded-md" placeholder="Assurance">
        </div>
        <div class="mt-3">
            <label for="regular-form-2" class="form-label">Others (optional)</label>
            <input wire:model='others' id="regular-form-1" type="text"
                class="form-control border border-slate-200 rounded-md" placeholder="Assurance">
        </div>
        <div class="flex justify-center items-center mt-10">
            <button wire:click='updateService' class="btn btn-primary w-32 mr-2 mb-2">
                <div >
                    <span wire:loading.remove wire:target='addService' >
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="edit" data-lucide="edit" class="lucide lucide-edit block mx-auto"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>

                    </span>
                    <span wire:loading wire:target='addService' class="text-white">
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
