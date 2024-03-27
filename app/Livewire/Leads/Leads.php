<?php

namespace App\Livewire\Leads;

use App\Models\Lead;
use Livewire\Attributes\On;
use Livewire\Component;

class Leads extends Component
{
    public $changesId;
    public function getDataForEdit($id)
    {
        $this->dispatch('get-lead', $id);
    }

    #[On('lead-updated')]
    public function updatedLead($id)
    {
        $this->changesId = $id;
    }

    public function render()
    {
        return view('livewire.leads.leads',[
            'leads'=>Lead::all()
        ]);
    }
}
