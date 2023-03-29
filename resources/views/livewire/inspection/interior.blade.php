<div>
    <div class="intro-y box mt-5">
        <div class="flex flex-col sm:flex-row items-center  p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base ">
                Interior
            </h2>
            <div class="preview ">
                <div class="ml-4">

                    <div class="flex flex-col sm:flex-row ">
                        <div class="form-check mr-2">
                            <input id="radio-switch-4" class="form-check-input" type="radio" wire:model="attributes.value"
                                value="Passed">
                            <label class="form-check-label" for="radio-switch-4">Passed</label>
                        </div>
                        <div class="form-check mr-2 mt-2 sm:mt-0">
                            <input id="radio-switch-5" class="form-check-input" type="radio" wire:model="attributes.value"
                                value="Failed">
                            <label class="form-check-label" for="radio-switch-5">Failed</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="radio" class=" grid grid-cols-2 md:grid-cols-3 gap-x-4 gap-y-6 border-b border-1 border-slate-400 p-5">
            @foreach ($attributes as $key=> $attribute )
            <div class="preview ">
                <div class="mt-3">
                    <label>{!!str_replace('_',' ',$key)!!}</label>
                    <div class="flex flex-col sm:flex-row mt-2">
                        <div class="form-check mr-2">
                            <input id="radio-switch-4" class="form-check-input" type="radio" wire:model='attributes.{{$key}}'
                                value="Passed">
                            <label class="form-check-label" for="radio-switch-4">Passed</label>
                        </div>
                        <div class="form-check mr-2 mt-2 sm:mt-0">
                            <input id="radio-switch-5" class="form-check-input" type="radio" wire:model="attributes.{{$key}}"
                                value="Failed">
                            <label class="form-check-label" for="radio-switch-5">Failed</label>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
        <div class="w-[100%] flex items-center justify-center px-auto sm:p-5 mt-5">
            <button wire:click='updateInspect' class=" mx-auto w-[10%] btn btn-primary">Update</button>
        </div>
    </div>
</div>
