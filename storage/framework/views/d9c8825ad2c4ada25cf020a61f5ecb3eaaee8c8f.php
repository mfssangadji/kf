
<?php $__env->startSection('title','Pengguna'); ?>
<?php $__env->startSection('content'); ?>
  <div class="card">
    <div class="card-header">
          <a href="<?php echo e(route('users.add')); ?>" class="btn btn-info btn-sm">Tambah Pengguna</a>
        </div>
        <div class="card-body">
          <table id="posttable" class="table">
            <thead>
            <tr>
              <td>No</td>
              <td>Nama Lengkap</td>
              <td>Apotik</td>
              <td>Status</td>
              <td>#</td>
            </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($loop->iteration); ?></td>
                  <td><a href="mainto:<?php echo e($user->email); ?>"><?php echo e($user->nama_lengkap); ?></a> <sup>(<?php echo e($user->no_telp); ?>)</sup></td>
                  <td>
                      <?php if(empty($user->apotik->nama_apotik)): ?>
                        Seluruhnya
                      <?php else: ?>
                        <?php echo e($user->apotik->nama_apotik); ?>

                      <?php endif; ?>
                  </td>
                  <td><?php echo e($pengguna[$user->status]); ?></td>
                  <td>
                    <a href="<?php echo e(route('users').'/'.$user->id.'/edit'); ?>" class="badge bg-info">edit</a>
                    <form method="post" action="<?php echo e(route('users').'/'.$user->id); ?>" style="display:inline">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\emil\resources\views/users/index.blade.php ENDPATH**/ ?>