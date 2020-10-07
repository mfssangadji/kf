@extends('layouts.app')
@section('title','Supply')
@section('content')
  <div class="card">
    <div class="card-header">
        <div class="card-body">
          <div id="form">
              <form method="post" action="{{route('supply.store')}}">
                @csrf
                <input type="hidden" value="{{auth()->user()->status}}" name="apotik_id">
                <small>Code/Nama Obat:</small>
                <select class="form-control select2" required name="obat_id" multiple="multiple">
                  @foreach($obat as $obat)
                      <option value="{{$obat->id}}">({{$obat->code}}) {{$obat->nama_obat}}</option>
                  @endforeach
                </select>
                <input type="text" required style="margin-top: 2px; margin-bottom: 2px;" name="stok" class="form-control" placeholder="Stok" >
                <input type="submit" style="margin-bottom: 2px;" name="btn_p" value="Input Supply" class="form-control btn btn-info btn-sm">
              </form>
          </div>
          <table id="posttable" class="table">
            <thead>
            <tr>
              <td>No</td>
              <td>Nama Obat</td>
              <td>Harga</td>
              <td>Stok</td>
              <td>Bulan</td>
              <td>#</td>
            </tr>
            </thead>
            <tbody>
              @foreach($supply as $supply)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$supply->obat->nama_obat}}</td>
                  <td>Rp. {{number_format($supply->obat->harga)}}</td>
                  <td>{{$supply->stok}}</td>
                  <td>{{$supply->created_at->format("F")}} ({{$supply->created_at->format("Y")}})</td>
                  <td>
                    <form method="post" action="{{ route('supply').'/'.$supply->id }}" style="display:inline">
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