<div>
    <form wire:submit="update">
        <div class="grid grid-cols-4 gap-1 px-3">
            <div class="col-span-2">
                <input type="text" placeholder="Иван Иванов" wire:model="form.name">
            </div>
            <div class="col-span-2">
                <input type="text" placeholder="email@email.com" wire:model="form.email">
            </div>
            <div class="col-span-4">
                <input type="text" placeholder="79881112255" wire:model="form.phone">
            </div>
            <div class="col-span-4">
                <input type="text" placeholder="Коммент" wire:model="form.comment">
            </div>
            <button class="btn btn-blue" type="submit">
                Обновить
            </button>
        </div>
    </form>
</div>
