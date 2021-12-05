@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Validasi
        </div>
        <div class="card-body">
            <form action="{{ route('surat_tugas.validasi', $item->id) }}" method="POST">
                @csrf
                @method('put')
                  <div class="form-group">
                      <label for="">Status</label>
                      <select name="status" id="stats" class="form-control stats">
                          <option value="proses" {{ $item->status == 'proses' ? 'selected' : '' }}>Proses</option>
                          <option value="alamat kurang jelas" {{ $item->status == 'alamat kurang jelas' ? 'selected' : '' }}>Alamat Kurang Jelas</option>
                          <option value="perihal kurang jelas" {{ $item->status == 'perihal kurang jelas' ? 'selected' : '' }}>Perihal Kurang Jelas</option>
                          <option value="disetujui" {{ $item->status == 'disetujui' ? 'selected' : '' }}>Disetujui</option>
                      </select>
                  </div>
                  <div class="form-group hilang" style="display: none">
                      <label for="">Tanda Tangan</label>
                      <select name="sign_id" class="form-control" id="">
                          @foreach ($signs as $item)
                              <option value="{{ $item->id }}">{{ $item->user->nama }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <button class="btn btn-success">Submit</button>
                  </div>
              </form>
        </div>
    </div>

    <script>
        var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});

let stats = document.querySelector('.stats')
 let hilang = document.querySelector('.hilang')

//    stats.addEventListener('change', function(e) {
//        if(e.target.value == 'disetujui'){
//             hilang.style.display == 'none
//             alert('disetujui')
//        }
//    })
 stats.addEventListener('change', (e) => {
 if(e.target.value == 'disetujui'){
     hilang.style.display = 'block'
 }else{
     hilang.style.display = 'none'
 }
})
    </script>
@endsection