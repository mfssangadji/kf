@extends('layouts.app')
@section('title','Ubah Obat')
@section('content')
<div class="card card-default">
   	<form method="post" action="{{route('obat').'/'.$obat->id}}">
   		@csrf
         @method('PATCH')
      	<div class="card-body">
         	<div class="row">
            	<div class="col-md-12">
            		<div class="form-group">
                     @error('code')
                        <span class="field-error">code is empty</span>
                     @enderror
                     <input type="text" placeholder="Code obat" value="{{$obat->code}}" name="code" id="code" class="form-control @error('code') is-invalid @enderror">
                  </div>
                  <div class="form-group">
                     @error('nama_obat')
                        <span class="field-error">nama is empty</span>
                     @enderror
                     <input type="text" placeholder="Nama obat" value="{{$obat->nama_obat}}" name="nama_obat" id="nama_obat" class="form-control @error('nama_obat') is-invalid @enderror">
                  </div>
                  <div class="form-group">
                     @error('jenis')
                        <span class="field-error">jenis is empty</span>
                     @enderror
                     <input type="text" placeholder="Jenis obat" value="{{$obat->jenis}}" name="jenis" id="jenis" class="form-control @error('jenis') is-invalid @enderror">
                  </div>
                  <div class="form-group">
                     @error('harga')
                        <span class="field-error">harga is empty</span>
                     @enderror
                     <input type="text" placeholder="Harga obat" value="{{$obat->harga}}" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror">
                  </div>
            	</div>
         	</div>
      	</div>
      	<div class="card-footer">
         	<button type="submit" class="btn btn-info btn-sm">Process</button>
         	<button type="button" onclick="self.history.back()" class="btn btn-default btn-sm">Cancel</button>
      	</div>
   	</form>
</div>
@endsection
@section('scripts')
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2({
      width: 'resolve',
      theme: "classic",
      maximumSelectionLength: 1
    })
  })
</script>
@endsection
