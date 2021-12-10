@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="pull-left">
                <strong>Ajukan Surat Tugas Kelompok</strong>
            </div>
            <div class="pull-right">
                    <a href="{{ route('surat_tugas.index')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"> </i> Back
                    </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('surat_tugas.store') }}" method="POST">
                <input type="hidden" name="pengirim_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="jenis_surat" value="tugas">

                @csrf
                <div class="form-group">
                    <label for="">Penerima</label>
                    <select name="users[]" class="form-control select2" id="select2" multiple>
                        <option value="">Pilih Penerima...</option>
                        @foreach ($users as $item)
                            <option value="{{ $item->id }}">{{ $item->nomor_induk }} - {{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Pelaksanaan</label>
                    <input type="date" name="tanggal_pelaksanaan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Lokasi Pelaksanaan</label>
                    <input type="text" name="lokasi_pelaksanaan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama Mitra</label>
                    <input type="text" name="nama_mitra" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    {{-- <input type="number" name="nomor_induk" class="form-control"> --}}
                    <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#select2').select2()
        })
    </script>
@endsection
