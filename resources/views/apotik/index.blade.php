@extends('layouts.app')
@section('title','Apotik')
@section('content')
  <div class="card">
    <div class="card-header">
          <a href="{{route('apotik.add')}}" class="btn btn-info btn-sm">Tambah Apotik</a>
        </div>
        <div class="card-body">
          <table id="posttable" class="table">
            <thead>
            <tr>
              <td>No</td>
              <td>Code Apotik</td>
              <td>Nama Apotik</td>
              <td>Alamat</td>
              <td>#</td>
            </tr>
            </thead>
            <tbody>
              @foreach($apotik as $apotik)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$apotik->code}}</td>
                  <td>{{$apotik->nama_apotik}}</td>
                  <td>{{$apotik->alamat}} ({{$apotik->no_telp}})</td>
                  <td>
                    <a href="{{ route('apotik').'/'.$apotik->id.'/edit' }}" class="badge bg-info">edit</a>
                    <form method="post" action="{{ route('apotik').'/'.$apotik->id }}" style="display:inline">
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