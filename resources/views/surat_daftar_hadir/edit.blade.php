@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="pull-left">
                <strong>Edit Data Surat Daftar Hadir</strong>
            </div>
            <div class="pull-right">
                    <a href="{{ route('surat_daftar_hadir.index')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"> </i> Back
                    </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('surat_daftar_hadir.update', $surat->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="">Nama Kegiatan</label>
                    <input type="text" name="nama_kegiatan" value="{{ $surat->nama_kegiatan }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" name="tanggal" value="{{ $surat->tanggal }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tempat</label>
                    <input type="text" name="tempat" value="{{ $surat->tempat }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama Pembicara</label>
                    <input type="text" name="pembicara" class="form-control" value="{{ $surat->pembicara }}">
                </div>
                <div class="form-group">
                    <label for="">Jumlah Peserta</label>
                    <input type="number" name="jumlah_peserta" value="{{ $surat->jumlah_peserta }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanda Tangan Dosen</label>
                    <select name="sign_id" id="" class="form-control select2">
                        <option value="">Pilih Dosen..</option>
                        @foreach ($signs as $item)
                            <option value="{{ $item->id }}" {{ $surat->sign_id == $item->id ? 'selected' : '' }}>{{ $item->user->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="">Dari Jam</label>
                      <input type="time" class="form-control" value="{{ $surat->start }}" name="start">
                    </div>
                    <div class="col">
                        <label for="">Sampai Jam</label>
                      <input type="time" class="form-control" name="end" value="{{ $surat->end }}">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $('.select2').select2();
    </script>
@endsection
