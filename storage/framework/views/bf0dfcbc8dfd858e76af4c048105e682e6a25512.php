
<?php $__env->startSection('title','Obat'); ?>
<?php $__env->startSection('content'); ?>
  <div class="card">
    <div class="card-header">
          <a href="<?php echo e(route('obat.add')); ?>" class="btn btn-info btn-sm">Tambah Obat</a>
        </div>
        <div class="card-body">
          <table id="posttable" class="table">
            <thead>
            <tr>
              <td>No</td>
              <td>Code Obat</td>
              <td>Nama Obat</td>
              <td>Jenis</td>
              <td>Harga</td>
              <td>#</td>
            </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($loop->iteration); ?></td>
                  <td><?php echo e($obat->code); ?></td>
                  <td><?php echo e($obat->nama_obat); ?></td>
                  <td><?php echo e($obat->jenis); ?></td>
                  <td>Rp. <?php echo e(number_format($obat->harga)); ?></td>
                  <td>
                    <a href="<?php echo e(route('obat').'/'.$obat->id.'/edit'); ?>" class="badge bg-info">edit</a>
                    <form method="post" action="<?php echo e(route('obat').'/'.$obat->id); ?>" style="display:inline">
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
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\emil\resources\views/obat/index.blade.php ENDPATH**/ ?>