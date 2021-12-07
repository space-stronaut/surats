@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Ajukan Berita Acara
        </div>
        <div class="card-body">
            <form action="{{ route('berita_acara.store') }}" method="POST">
                <input type="hidden" name="pengirim_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="status" value="proses">
                <input type="hidden" name="jenis_surat" value="berita acara">
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="judul" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tema</label>
                    <input type="text" name="tema" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" name="tanggal_pelaksanaan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Ruang</label>
                    <input type="text" name="ruang" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama Tamu</label>
                    <input type="text" name="nama_tamu" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
        $('.select2').select2();
        $(document).ready(function() {
            // alert('halo')
        });
    </script>
@endsection