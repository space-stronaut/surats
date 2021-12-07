@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Berita Acara
        </div>
        <div class="card-body">
            <form action="{{ route('berita_acara.update', $surat->id) }}" method="POST">
                <input type="hidden" name="pengirim_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="status" value="{{ $surat->status }}">
                <input type="hidden" name="jenis_surat" value="berita acara">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="judul" value="{{ $surat->judul }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tema</label>
                    <input type="text" name="tema" value="{{ $surat->tema }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" name="tanggal_pelaksanaan" value="{{ $surat->tanggal_pelaksanaan }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Ruang</label>
                    <input type="text" name="ruang" value="{{ $surat->ruang }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama Tamu</label>
                    <input type="text" name="nama_tamu" value="{{ $surat->nama_tamu }}" class="form-control">
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