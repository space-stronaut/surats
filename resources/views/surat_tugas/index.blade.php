@extends('layouts.app')

@section('content')
<style>
</style>
       <div class="card">
           <div class="card-header d-flex justify-content-between">
               <span>
                   Surat Tugas
               </span>
               <div>
                   <a href="{{ route('surat_tugas.create') }}" class="btn btn-primary">Tambah Surat Tugas</a>
               </div>
           </div>
           <div class="card-body">
               <table class="table">
                   <thead class="thead-dark">
                       <tr>
                        <th scope="col">#</th>
                        <th scope="col">No Surat</th>
                        <th scope="col">Pengirim</th>
                        <th scope="col">Tanggal Pelaksanaan</th>
                        <th scope="col">Lokasi Pelaksanaan</th>
                        <th scope="col">Nama Mitra</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Penerima</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($surats as $item)
                           <tr>
                               <th>{{ $loop->iteration }}</th>
                               <td>
                                   {{ $item->no_surat }}
                               </td>
                               <td>
                                   {{$item->pengirim->nama}}
                               </td>
                               <td>
                                    {{  Carbon\Carbon::parse($item->tanggal_pelaksanaan)->format('d M Y') }}
                                </td>
                                <td>
                                    {{$item->lokasi_pelaksanaan}}
                                </td>
                                <td>
                                    {{$item->nama_mitra}}
                                </td>
                                <td>
                                    {{$item->keterangan}}
                                </td>
                                <td>
                                    @foreach ($item->users as $user)
                                        <li>{{ $user->nama }}</li>
                                    @endforeach
                                </td>
                                <td>
                                    <div class="badge badge-info text-uppercase">{{ $item->status }}</div>
                                </td>
                               <td class="d-flex">
                                   <a href="{{ route('ppa.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                   <form action="{{ route('ppa.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapusnya??')">Hapus</button>
                                    </form>
                                    <!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
    Validasi
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Validasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
              <div class="form-group">
                  <label for="">Status</label>
                  <select name="status" id="" class="form-control">
                      <option value="proses" {{ $item->status == 'proses' ? 'selected' : '' }}>Proses</option>
                      <option value="alamat kurang jelas" {{ $item->status == 'alamat kurang jelas' ? 'selected' : '' }}>Alamat Kurang Jelas</option>
                      <option value="perihal kurang jelas" {{ $item->status == 'perihal kurang jelas' ? 'selected' : '' }}>Perihal Kurang Jelas</option>
                      <option value="disetujui" {{ $item->status == 'disetujui' ? 'selected' : '' }}>Disetujui</option>
                  </select>
              </div>
              <div class="form-group hilang">
                  <label for="">Tanda Tangan</label>
                  <div id="sig">
                      {{-- <canvas></canvas> --}}
                  </div>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                               </td>
                           </tr>
                       @endforeach
                   </tbody>
               </table>
           </div>
       </div>

       <script>
           var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
       </script>
@endsection