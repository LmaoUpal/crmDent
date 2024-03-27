<div>
    <div>
        {{-- In work, do what you enjoy. --}}
            @foreach($leads as $lead)
                <div class="@if($this->changesId == $lead->id) bg-green-500 @endif grid grid-cols-6 gap-1 px-4 py-4">
                    <div class="col-span-1 px-2 py-3">
                        {{$lead->id}}
                    </div>
                    <div class="col-span-1 px-2 py-3">
                        {{$lead->name}}
                    </div>
                    <div class="col-span-1 px-2 py-3">
                        {{$lead->email}}
                    </div>
                    <div class="col-span-1 px-2 py-3">
                        {{$lead->phone}}
                    </div>
                    <div class="col-span-1 px-2 py-3">
                        {{$lead->comment}}
                    </div>
                    <div class="col-span-1 grid grid-cols-1 grid-rows-2 gap-2 px-2 py-3">
                        <button class="btn btn-purple" wire:click="getDataForEdit({{$lead->id}})">
                            Изменить
                        </button>
                        <button class="btn btn-red" wire:click="tryDelete({{$lead->id}})">
                            Удалить
                        </button>
                    </div>
                </div>
            @endforeach
    </div>
    @if($displayPanel)
        @livewire('leads.delete-lead', ["id"=>$currentLeadId])
    @endif

</div>
