@extends('layouts/main')
@section('titles', 'eMaha - Form')
@section('content')
    <div class="card mt-4">
        <div class="card-header"><strong>Form Edit</strong></div>
        <div class="card-body">
            @php
                $ahli = explode(", ", $plm -> bidang_keahlian);
            @endphp
            <form action="/home/update/{{ $plm->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group w-50">
                    <label>NIK</label>
                    <input type="number" name="nik" class="form-control" placeholder="Masukan NIK" value="{{ $plm->nik }}"
                        aria-describedby="helpId" readonly>
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="{{ $plm->nama }}"
                        aria-describedby="helpId">
                </div>

                <label>Gender</label>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Pria" {{ ($plm->gender == "Pria") ? 'checked':'' }}>
                    <label>Pria</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Wanita" {{ ($plm->gender == "Wanita") ? 'checked':'' }}>
                    <label>Wanita</label>
                </div>

                <label>Tingkat Pendidikan</label>
                <div class="form-group">
                    <select name="tingkat_pendidikan" class="form-control">
                        <option value="0">=== Pilih Tingkat Pendidikan ===</option>
                        <option value="SMA" {{ ($plm -> tingkat_pendidikan =='SMA') ? 'selected':'' }}>SMA</option>
                        <option value="S1" {{ ($plm -> tingkat_pendidikan =='S1') ? 'selected':'' }}>S1</option>
                        <option value="S2" {{ ($plm -> tingkat_pendidikan =='S2') ? 'selected':'' }}>S2</option>
                        <option value="S3" {{ ($plm -> tingkat_pendidikan =='S3') ? 'selected':'' }}>S3</option>
                    </select>
                </div>

                <label>Bidang Keahlian</label>
                <div class="form-check">
                    <input type="checkbox" name="bidang_keahlian[]" class="form-check-input" value="UI/UX" {{ in_array('UI/UX', $ahli) ? 'checked':'' }}>
                    <label>UI/UX</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="bidang_keahlian[]" class="form-check-input" value="Front End" {{ in_array('Front End', $ahli) ? 'checked':'' }}>
                    <label>Front End Developer</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="bidang_keahlian[]" class="form-check-input" value="WEB" {{ in_array('WEB', $ahli) ? 'checked':'' }}>
                    <label>Web Engineering</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="bidang_keahlian[]" class="form-check-input" value="DMBS" {{ in_array('DBMS', $ahli) ? 'checked':'' }}>
                    <label>Data Base Engineer</label>
                </div>
                <div class="form-group mt-4">
                    <button type="submit" role="button" class="btn btn-primary float-right">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
