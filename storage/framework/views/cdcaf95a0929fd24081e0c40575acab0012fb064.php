
<?php $__env->startSection('title','Penjualan'); ?>
<?php $__env->startSection('content'); ?>
  <div class="card">
    <div class="card-header">
        <div class="card-body">
          <div id="form">
              <form method="post" action="<?php echo e(route('penjualan.store')); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" value="<?php echo e(auth()->user()->status); ?>" name="apotik_id">
                <small>Code/Nama Obat:</small>
                <select class="form-control select2" required name="obat_id" multiple="multiple">
                  <?php $__currentLoopData = $obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($obat->id); ?>">(<?php echo e($obat->code); ?>) <?php echo e($obat->nama_obat); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
              <?php $__currentLoopData = $penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penjualan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($loop->iteration); ?></td>
                  <td><?php echo e($penjualan->obat->nama_obat); ?></td>
                  <td>Rp. <?php echo e(number_format($penjualan->obat->harga)); ?></td>
                  <td><?php echo e($penjualan->jumlah); ?></td>
                  <td><?php echo e($penjualan->created_at->format("d F Y")); ?></td>
                  <td><?php echo e($penjualan->created_at->format("h:i:s")); ?></td>
                  <td>
                    <form method="post" action="<?php echo e(route('penjualan').'/'.$penjualan->id); ?>" style="display:inline">
                      <?php echo method_field('DELETE'); ?>
                      <?php echo csrf_field(); ?>
                    <button type="submit" class="badge bg-red" onclick="return confirm('are you sure?')" style="border: none;">hapus</button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\emil\resources\views/penjualan/index.blade.php ENDPATH**/ ?>