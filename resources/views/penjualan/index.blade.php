@extends('layouts.app')
@section('title','Penjualan')
@section('content')
  <div class="card">
    <div class="card-header">
        <div class="card-body">
          <div id="form">
              <form method="post" action="{{route('penjualan.store')}}">
                @csrf
                <input type="hidden" value="{{auth()->user()->status}}" name="apotik_id">
                <small>Code/Nama Obat:</small>
                <select class="form-control select2" required name="obat_id" multiple="multiple">
                  @foreach($obat as $obat)
                      <option value="{{$obat->id}}">({{$obat->code}}) {{$obat->nama_obat}}</option>
                  @endforeach
                </select>
                <input type="text" required style="margin-top: 2px; margin-bottom: 2px;" name="jumlah" class="form-control" placeholder="Jumlah" >
                <input type="submit" style="margin-bottom: 2px;" name="btn_p" value="Input Penjualan" class="form-control btn btn-info btn-sm">
              </form>
          </div>
          <table id="posttable" class="table">
            <thead>
            <tr>
              <td>No</td>
              <td>Nama Obat</td>
              <td>Harga</td>
              <td>Jumlah</td>
              <td>Tanggal</td>
              <td>Jam</td>
              <td>#</td>
            </tr>
            </thead>
            <tbody>
              @foreach($penjualan as $penjualan)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$penjualan->obat->nama_obat}}</td>
                  <td>Rp. {{number_format($penjualan->obat->harga)}}</td>
                  <td>{{$penjualan->jumlah}}</td>
                  <td>{{$penjualan->created_at->format("d F Y")}}</td>
                  <td>{{$penjualan->created_at->format("h:i:s")}}</td>
                  <td>
                    <form method="post" action="{{ route('penjualan').'/'.$penjualan->id }}" style="display:inline">
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

    $('.select2').select2({
      theme: "classic",
      maximumSelectionLength: 1
    })
  });
</script>
@endsection