@extends('layouts/main')
@section('titles', 'eMaha - Form')
@section('content')
    <div class="card mt-4">
        <div class="card-header"><strong>Form Data</strong></div>
        <div class="card-body">
            <form action="/home/save" method="POST">
                @csrf
                <div class="form-group w-50">
                    <label>NIK</label>
                    <input type="number" name="nik" class="form-control" placeholder="Masukan NIK"
                        aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama"
                        aria-describedby="helpId">
                </div>

                <label>Gender</label>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value= "Pria">
                    <label>Pria</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value= "Wanita">
                    <label>Wanita</label>
                </div>

                <label>Tingkat Pendidikan</label>
                <div class="form-group">
                    <select name="tingkat_pendidikan" class="form-control">
                        <option value="0">=== Pilih Tingkat Pendidikan ===</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>

                <label>Bidang Keahlian</label>
                <div class="form-check">
                    <input type="checkbox" name="bidang_keahlian[]" class="form-check-input" value= "UI/UX">
                    <label>UI/UX</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="bidang_keahlian[]" class="form-check-input" value= "Front End">
                    <label>Front End Developer</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="bidang_keahlian[]" class="form-check-input" value= "WEB">
                    <label>Web Engineering</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="bidang_keahlian[]" class="form-check-input" value= "DMBS">
                    <label>Data Base Engineer</label>
                </div>
                <div class="form-group mt-4">
                    <button type="submit" role="button" class="btn btn-primary float-right">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
