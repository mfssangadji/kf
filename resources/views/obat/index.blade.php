@extends('layouts.app')
@section('title','Obat')
@section('content')
  <div class="card">
    <div class="card-header">
          <a href="{{route('obat.add')}}" class="btn btn-info btn-sm">Tambah Obat</a>
        </div>
        <div class="card-body">
          <table id="posttable" class="table">
            <thead>
            <tr>
              <td>No</td>
              <td>Code Obat</td>
              <td>Nama Obat</td>
              <td>Jenis</td>
              <td>Harga</td>
              <td>#</td>
            </tr>
            </thead>
            <tbody>
              @foreach($obat as $obat)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$obat->code}}</td>
                  <td>{{$obat->nama_obat}}</td>
                  <td>{{$obat->jenis}}</td>
                  <td>Rp. {{number_format($obat->harga)}}</td>
                  <td>
                    <a href="{{ route('obat').'/'.$obat->id.'/edit' }}" class="badge bg-info">edit</a>
                    <form method="post" action="{{ route('obat').'/'.$obat->id }}" style="display:inline">
                      @method('DELETE')
                      @csrf
                    <button type="submit" class="badge bg-red" onclick="return confirm('are you sure?')" style="border: none;">hapus</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
@endsection
@section('scripts')
<script>
  $(function () {
    $("#posttable").DataTable({
      "paging": true,
      "lengtdChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidtd": true,
      "responsive": true,
    });
  });
</script>
@endsection