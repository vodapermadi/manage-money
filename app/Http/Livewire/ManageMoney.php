<?php

namespace App\Http\Livewire;

use App\Models\Money;
use Livewire\Component;

class ManageMoney extends Component
{
    public $oldSaldo,$pengeluaran,$pemasukan;

    public function render()
    {
        $this->oldSaldo = Money::orderBy('id','desc')->first();
        return view('livewire.manage-money');
    }

    public function store()
    {
        $saldo = Money::orderBy('id','desc')->first();
        Money::create([
                'pengeluaran' => $this->pengeluaran,
                'pemasukan' => $this->pemasukan,
                'saldo' => $saldo->saldo -  intval($this->pengeluaran) + intval($this->pemasukan)
            ]);
        $this->reset();
    }
}
