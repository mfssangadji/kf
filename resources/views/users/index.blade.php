@extends('layouts.app')
@section('title','Pengguna')
@section('content')
  <div class="card">
    <div class="card-header">
          <a href="{{route('users.add')}}" class="btn btn-info btn-sm">Tambah Pengguna</a>
        </div>
        <div class="card-body">
          <table id="posttable" class="table">
            <thead>
            <tr>
              <td>No</td>
              <td>Nama Lengkap</td>
              <td>Apotik</td>
              <td>Status</td>
              <td>#</td>
            </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td><a href="mainto:{{$user->email}}">{{$user->nama_lengkap}}</a> <sup>({{$user->no_telp}})</sup></td>
                  <td>
                      @if(empty($user->apotik->nama_apotik))
                        Seluruhnya
                      @else
                        {{$user->apotik->nama_apotik}}
                      @endif
                  </td>
                  <td>{{$pengguna[$user->status]}}</td>
                  <td>
                    <a href="{{ route('users').'/'.$user->id.'/edit' }}" class="badge bg-info">edit</a>
                    <form method="post" action="{{ route('users').'/'.$user->id }}" style="display:inline">
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