
<?php $__env->startSection('title','Supply'); ?>
<?php $__env->startSection('content'); ?>
  <div class="card">
    <div class="card-header">
        <div class="card-body">
          <div id="form">
              <form method="post" action="<?php echo e(route('supply.store')); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" value="<?php echo e(auth()->user()->status); ?>" name="apotik_id">
                <small>Code/Nama Obat:</small>
                <select class="form-control select2" required name="obat_id" multiple="multiple">
                  <?php $__currentLoopData = $obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($obat->id); ?>">(<?php echo e($obat->code); ?>) <?php echo e($obat->nama_obat); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
              <?php $__currentLoopData = $supply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($loop->iteration); ?></td>
                  <td><?php echo e($supply->obat->nama_obat); ?></td>
                  <td>Rp. <?php echo e(number_format($supply->obat->harga)); ?></td>
                  <td><?php echo e($supply->stok); ?></td>
                  <td><?php echo e($supply->created_at->format("F")); ?> (<?php echo e($supply->created_at->format("Y")); ?>)</td>
                  <td>
                    <form method="post" action="<?php echo e(route('supply').'/'.$supply->id); ?>" style="display:inline">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\emil\resources\views/supply/index.blade.php ENDPATH**/ ?>