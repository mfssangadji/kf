@extends('layouts.app')
@section('title','Tambah Pengguna')
@section('content')
<div class="card card-default">
   	<form method="post" action="{{route('users.store')}}">
   		@csrf
      	<div class="card-body">
         	<div class="row">
            	<div class="col-md-12">
                  <div class="form-group">
                     @error('email')
                        <span class="field-error">email is empty</span>
                     @enderror
                     <input type="email" name="email" placeholder="Email pengguna" id="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror">
                  </div>
                  <div class="form-group">
                     @error('password')
                        <span class="field-error">password is empty</span>
                     @enderror
                     <input type="password" placeholder="Password pengguna" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                  </div>
                  <div class="form-group">
                     @error('nama_lengkap')
                        <span class="field-error">nama lengkap is empty</span>
                     @enderror
                     <input type="text" placeholder="Nama lengkap pengguna" name="nama_lengkap" id="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror">
                  </div>
                  <div class="form-group">
                     @error('no_telp')
                        <span class="field-error">no telp is empty</span>
                     @enderror
                     <input type="text" placeholder="No telp pengguna" name="no_telp" id="no_telp" class="form-control @error('no_telp') is-invalid @enderror">
                  </div>
                  <div class="form-group">
                     @error('apotik_id')
                        <span class="field-error">apotik is empty</span>
                     @enderror
                     <select class="form-control" name="apotik_id">
                        <option value="" selected="" disabled="">Pilih Apotik Pengguna</option>
                        <option value="">Seluruhnya</option>
                        @foreach($apotik as $apotik)
                           @if(old('apotik_id') == $apotik->id)
                              <option value="{{$apotik->id}}" selected>{{$apotik->nama_apotik}}</option>
                           @else
                              <option value="{{$apotik->id}}">{{$apotik->nama_apotik}}</option>
                           @endif
                        @endforeach
                     </select>
                  </div>
                  <div class="form-group">
                     @error('status')
                        <span class="field-error">status is empty</span>
                     @enderror
                     <select class="form-control" name="status">
                        <option value="" selected="" disabled="">Pilih Status Pengguna</option>
                        @foreach($pengguna as $key => $val)
                           @if(old('status') == $key)
                              <option value="{{$key}}" selected>{{$val}}</option>
                           @else
                              <option value="{{$key}}">{{$val}}</option>
                           @endif
                        @endforeach
                     </select>
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
