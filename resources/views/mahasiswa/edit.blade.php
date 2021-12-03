@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Mahasiswa
        </div>
        <div class="card-body">
            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                <input type="hidden" name="role" value="mahasiswa">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" value="{{ $mahasiswa->username }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="{{ $mahasiswa->email }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">No HP</label>
                    <input type="number" name="np_hp" value="{{ $mahasiswa->np_hp }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nomor Induk</label>
                    <input type="number" name="nomor_induk" value="{{ $mahasiswa->nomor_induk }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection