<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <div class="" style="padding: 10px;">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="">
               <a href="<?php echo e(route('dashboard')); ?>" class="nav-link active" style="background-color: #17a2b8">
                  <i class="nav-icon fas fa-home" style="float: right; margin-top: 5px"></i>
                  <p>
                  <span class="left badge badge-danger" style="margin-top: 5px;">Cpanel</span> <span>Beranda</span> 
                  </p>
               </a>
             </li>
         </ul>
      </div>
   <!-- Sidebar -->
   <div class="sidebar" style="margin-top: 0px !important">
      <!-- Sidebar user panel (optional) -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <?php if(auth()->user()->status == 1): ?>
               <li class="nav-item">
                  <a href="<?php echo e(route('users')); ?>" class="nav-link">
                     <i class="nav-icon fas fa-user text-yellow"></i>
                     <p>
                        Pengguna
                     </p>
                  </a>
               </li>
               <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-th"></i>
                     <p>
                        Pengelolaan
                        <i class="fas fa-angle-left right"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <!-- <li class="">
                        <a href="#" class="nav-link active" style="background-color: #17a2b8">
                           <i class="nav-icon fas fa-pen" style="float: right; margin-top: 5px"></i>
                           <p>
                           <span class="left badge badge-danger" style="margin-top: 5px;">Buat Berkas</span> <span>Baru</span> 
                           </p>
                        </a>
                     </li> -->
                     <li class="nav-item has-treeview">
                        <a href="<?php echo e(route('apotik')); ?>" class="nav-link">
                           <i class="far fa-circle nav-icon text-red"></i>
                           <p>Data Apotik</p>
                        </a>
                     </li>
                     <li class="nav-item has-treeview">
                        <a href="<?php echo e(route('obat')); ?>" class="nav-link">
                           <i class="far fa-circle nav-icon text-red"></i>
                           <p>Data Obat</p>
                        </a>
                     </li>
                  </ul>
               </li>
               <!-- <li class="nav-item">
                  <a href="<?php echo e(route('supply')); ?>" class="nav-link">
                     <i class="nav-icon fa fa-arrow-circle-up text-blue"></i>
                     <p>
                        Supply
                     </p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="<?php echo e(route('penjualan')); ?>" class="nav-link">
                     <i class="nav-icon fa fa-arrow-circle-down text-green"></i>
                     <p>
                        Penjualan
                     </p>
                  </a>
               </li> -->
               <li class="nav-header">LAINNYA</li>
            <?php endif; ?>
            <?php if(auth()->user()->status == 3): ?>
               <li class="nav-item">
                  <a href="<?php echo e(route('supply')); ?>" class="nav-link">
                     <i class="nav-icon fa fa-arrow-circle-up text-blue"></i>
                     <p>
                        Supply
                     </p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="<?php echo e(route('penjualan')); ?>" class="nav-link">
                     <i class="nav-icon fa fa-arrow-circle-down text-green"></i>
                     <p>
                        Penjualan
                     </p>
                  </a>
               </li>
               <li class="nav-header">LAINNYA</li>
            <?php endif; ?>
            <li class="nav-item">
               <a href="<?php echo e(route('pelaporan')); ?>" class="nav-link">
                  <i class="nav-icon fa fa-map text-yellow"></i>
                  <p>
                     Pelaporan
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php echo e(route('logout')); ?>" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">Logout (<?php echo e(auth()->user()->nama_lengkap); ?>)</p>
               </a>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside><?php /**PATH C:\xampp\htdocs\scripty\emil\resources\views/parts/sidebar.blade.php ENDPATH**/ ?>