
<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<!-- Main content -->
   <div class="container-fluid">
      <!-- Info boxes -->
      <?php if(auth()->user()->status == 1): ?>
         <div class="callout callout-info">
            <h4>Selamat datang <?php echo e(auth()->user()->nama_lengkap); ?>!</h4>
            <p>Anda disini sebagai <strong>Administrator</strong>, pada samping laman website, terdapat beberapa menu yang dapat anda telusuri untuk melakukan pengelolaan data. Terima kasih</p>
         </div>
      <?php elseif(auth()->user()->status == 2): ?>
         <div class="callout callout-info">
            <h4>Selamat datang <?php echo e(auth()->user()->nama_lengkap); ?>!</h4>
            <p>Anda disini sebagai <strong>Pimpinan</strong> <?php echo e(auth()->user()->apotik->nama_apotik); ?>. Pada samping laman website, terdapat sebuah menu <strong>Pelaporan</strong>, menu ini berfungsi agar anda dapat melihat pelaporan <strong>Supply</strong> dan <strong>Penjualan</strong> Obat pada <?php echo e(auth()->user()->apotik->nama_apotik); ?> yang anda pimpin. Terima kasih</p>
         </div>
      <?php else: ?>
         <div class="callout callout-info">
            <h4>Selamat datang <?php echo e(auth()->user()->nama_lengkap); ?>!</h4>
            <p>Anda disini sebagai <strong>Karyawan</strong> <?php echo e(auth()->user()->apotik->nama_apotik); ?>, pada samping laman website, terdapat beberapa menu yang dapat anda telusuri untuk melakukan pengelolaan data <strong>Supply</strong> dan <strong>Penjualan</strong> pada <?php echo e(auth()->user()->apotik->nama_apotik); ?>.</p>
         </div>
      <?php endif; ?>
      <div class="row">
         <div class="col-12 col-sm-6 col-md-3" style="text-align: center;">
            <img src="./wel.png" style="max-width: 200%; text-align: center;">   
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
   <!--/. container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\emil\resources\views/dashboard.blade.php ENDPATH**/ ?>