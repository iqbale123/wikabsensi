@extends('dashboard.layouts.master')

@section('content')
    
@include('dashboard.partials.navbar')

<div class="container-fluid pb-5">
    <div class="card">
        <div class="card-body p-4">
            <h4 class="mb-4">Keterangan Tidak/Berhalangan Hadir</h4>
            <form action="/dashboard/absen/tidak-hadir" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="keterangan" value="Izin" id="customRadio1">
                    <label class="custom-control-label" for="customRadio1">Izin</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="keterangan" value="Sakit" id="customRadio1">
                    <label class="custom-control-label" for="customRadio1">Sakit</label>
                </div>
                <input type="hidden" name="nis" value="{{ Auth::guard('students')->user()->nis }}">
                <input type="hidden" name="jam_kedatangan" value="-">
                <input type="hidden" name="jam_kepulangan" value="-">
                <input type="file" class="custom-file-input" name="image" accept="image/*"><br>
                <button type="submit" class="btn bg-gradient-success mt-4">Kirim</button>
            </form>
        </div>
    </div>
</div>

@endsection