<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <form wire:submit.prevent='store'>
        <input type="number" wire:model="pemasukan" placeholder="pemasukan"><br>
        <input type="number" wire:model="pengeluaran" placeholder="pengeluaran"><br>
        <button type="submit">Simpan</button>
    </form>
    <span>saldo : {{ $oldSaldo->saldo }}</span>
</div>
