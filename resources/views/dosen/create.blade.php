@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Dosen
        </div>
        <div class="card-body">
            <form action="{{ route('dosen.store') }}" method="POST">
                <input type="hidden" name="role" value="dosen">
                @csrf
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">No HP</label>
                    <input type="number" name="np_hp" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nomor Induk</label>
                    <input type="number" name="nomor_induk" class="form-control">
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