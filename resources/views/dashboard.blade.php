@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<!-- Main content -->
   <div class="container-fluid">
      <!-- Info boxes -->
      @if(auth()->user()->status == 1)
         <div class="callout callout-info">
            <h4>Selamat datang {{auth()->user()->nama_lengkap}}!</h4>
            <p>Anda disini sebagai <strong>Administrator</strong>, pada samping laman website, terdapat beberapa menu yang dapat anda telusuri untuk melakukan pengelolaan data. Terima kasih</p>
         </div>
      @elseif(auth()->user()->status == 2)
         <div class="callout callout-info">
            <h4>Selamat datang {{auth()->user()->nama_lengkap}}!</h4>
            <p>Anda disini sebagai <strong>Pimpinan</strong> {{auth()->user()->apotik->nama_apotik}}. Pada samping laman website, terdapat sebuah menu <strong>Pelaporan</strong>, menu ini berfungsi agar anda dapat melihat pelaporan <strong>Supply</strong> dan <strong>Penjualan</strong> Obat pada {{auth()->user()->apotik->nama_apotik}} yang anda pimpin. Terima kasih</p>
         </div>
      @else
         <div class="callout callout-info">
            <h4>Selamat datang {{auth()->user()->nama_lengkap}}!</h4>
            <p>Anda disini sebagai <strong>Karyawan</strong> {{auth()->user()->apotik->nama_apotik}}, pada samping laman website, terdapat beberapa menu yang dapat anda telusuri untuk melakukan pengelolaan data <strong>Supply</strong> dan <strong>Penjualan</strong> pada {{auth()->user()->apotik->nama_apotik}}.</p>
         </div>
      @endif
      <div class="row">
         <div class="col-12 col-sm-6 col-md-3" style="text-align: center;">
            <img src="./wel.png" style="max-width: 200%; text-align: center;">   
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
   <!--/. container-fluid -->
@endsection