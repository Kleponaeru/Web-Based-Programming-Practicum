<div>
    <form wire:submit.prevent="simpan">
        <div class="form-group">
            <label>Nama</label>
            <input wire:model="nama" type="text" name="" placeholder="Masukan Nama" class="form-control">
        </div>
        <div class="form-group">
            <label>Judul</label>
            <input wire:model="judul_task" type="text" name="" placeholder="Masukan Judul" class="form-control">
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <textarea wire:model="deskripsi_task" name=""  cols="20" rows="5" class="form-control" placeholder="Masukan Deskripsi"></textarea>
        </div>

        <div class="form-group text-right">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>
