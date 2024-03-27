<?php

namespace App\Livewire\Leads;

use App\Models\Lead;
use Livewire\Component;

class Leads extends Component
{
    public function render()
    {
        return view('livewire.leads.leads',[
            'leads'=>Lead::all()
        ]);
    }
}
