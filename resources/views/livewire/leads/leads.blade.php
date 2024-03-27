<div>
    {{-- In work, do what you enjoy. --}}
    <div class="grid grid-cols-6 gap-1 px-4 py-4">
        @foreach($leads as $lead)
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
            <div class="col-span-1 px-2 py-3">
                <button class="btn btn-purple">
                    Изменить
                </button>
            </div>
        @endforeach
    </div>

</div>
