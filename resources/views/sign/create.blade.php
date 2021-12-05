@extends('layouts.app')

@section('content')
<style>
    .kbw-signature { width: 50%; height: 200px;}
        #sig canvas{
            width: 100% !important;
            height: auto;
        }
</style>
    <div class="card">
        <div class="card-header">
            Buat Tanda Tangan
        </div>
        <div class="card-body">
            <form action="{{ route('tanda.store') }}" method="POST">

                @csrf
                <div class="form-group">
                    <label for="">Dosen</label>
                    <select name="user_id" class="form-control select2 @error('user_id') is-valid @enderror" id="select2">
                        <option value="">Pilih Dosen...</option>
                        @foreach ($users as $item)
                            <option value="{{ $item->id }}">{{ $item->nomor_induk }} - {{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    @error('user_id')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="">Tanda Tangan</label>
                    {{-- <label for="">Tanda Tangan</label> --}}
                      <div id="sig">
                          {{-- <canvas></canvas> --}}
                      </div>
                      <textarea id="signature64" name="signed" style="display: none"></textarea>
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
        var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
        // $('.sig').signature({syncField: '.sig64', syncFormat: 'PNG'});
        $(document).ready(function() {
            $('#select2').select2()
            // alert('halo')
        })


    </script>
@endsection