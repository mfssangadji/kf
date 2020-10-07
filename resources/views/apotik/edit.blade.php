@extends('layouts.app')
@section('title','Ubah Apotik')
@section('content')
<div class="card card-default">
   	<form method="post" action="{{route('apotik').'/'.$apotik->id}}">
   		@csrf
         @method('PATCH')
      	<div class="card-body">
         	<div class="row">
            	<div class="col-md-12">
            		<div class="form-group">
                     @error('code')
                        <span class="field-error">code is empty</span>
                     @enderror
                     <input type="text" placeholder="Code apotik" value="{{$apotik->code}}" name="code" id="code" class="form-control @error('code') is-invalid @enderror">
                  </div>
                  <div class="form-group">
                     @error('nama_apotik')
                        <span class="field-error">nama is empty</span>
                     @enderror
                     <input type="text" placeholder="Nama apotik" value="{{$apotik->nama_apotik}}" name="nama_apotik" id="nama_apotik" class="form-control @error('nama_apotik') is-invalid @enderror">
                  </div>
                  <div class="form-group">
                     @error('no_telp')
                        <span class="field-error">no telp is empty</span>
                     @enderror
                     <input type="text" placeholder="No telp apotik" value="{{$apotik->no_telp}}" name="no_telp" id="no_telp" class="form-control @error('no_telp') is-invalid @enderror">
                  </div>
                  <div class="form-group">
                     @error('alamat')
                        <span class="field-error">alamat is empty</span>
                     @enderror
                     <input type="text" placeholder="Alamat apotik" value="{{$apotik->alamat}}" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror">
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
