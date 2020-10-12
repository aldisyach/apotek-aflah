<!-- Aplikasi Persediaan Obat pada Apotek
*******************************************************
* Developer    : Aldi Yansyach
* Release Date : 19 Agustus 2020
* Website      : www.aldi-ysc.xyz
* E-mail       : aldi.yansyachh@gmail.com
* Phone        : +62-857-7420-5404
-->

<!-- // fungsi pengecekan level untuk menampilkan menu sesuai dengan hak akses
// jika hak akses = Super Admin, tampilkan menu -->
<?php if ($_SESSION['hak_akses']=='Super Admin') : ?>
	
  <!-- sidebar menu start -->
  <ul class="sidebar-menu">
    <li class="header">MAIN MENU</li>
  	 <!--  // fungsi untuk pengecekan menu aktif -->
  	 <!-- // jika menu beranda dipilih, menu beranda aktif -->
  	 
     <?php if ($_GET["module"]=="beranda") : ?>
        <li class="active">
          <a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
  	   </li>
       <!-- // jika tidak, menu home tidak aktif  -->
      <?php else : ?>
  		  <li>
  			 <a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
  	  	</li>
  	 <?php endif;?>
  	
      <!-- jika menu data obat dipilih, menu data obat aktif -->
      <?php if ($_GET["module"]=="obat" || $_GET["module"]=="form_obat") : ?>
        <li class="active">
          <a href="?module=obat"><i class="fa fa-folder"></i> Data Obat </a>
        </li>
      <!-- // jika tidak, menu data obat tidak aktif -->
      <?php else : ?>
        <li>
          <a href="?module=obat"><i class="fa fa-folder"></i> Data Obat </a>
        </li>
      <?php endif;?>

      <!-- // jika menu data obat masuk dipilih, menu data obat masuk aktif -->
      <?php if ($_GET["module"]=="obat_masuk" || $_GET["module"]=="form_obat_masuk") : ?>
        <li class="active">
          <a href="?module=obat_masuk"><i class="fa fa-clone"></i> Data Obat Masuk </a>
        </li>
      <!--  // jika tidak, menu data obat masuk tidak aktif -->
      <?php else : ?>
        <li>
          <a href="?module=obat_masuk"><i class="fa fa-clone"></i> Data Obat Masuk </a>
        </li>
      <?php endif;?>

      <!-- // jika menu data obat keluar dipilih, menu data obat keluar aktif -->
      <?php if ($_GET["module"]=="obat_keluar" || $_GET["module"]=="form_obat_keluar") : ?>
        <li class="active">
          <a href="?module=obat_keluar"><i class="fa fa-clone"></i> Data Obat Keluar </a>
        </li>
      <!-- // jika tidak, menu data obat masuk tidak aktif -->
      <?php else:?>
        <li>
          <a href="?module=obat_keluar"><i class="fa fa-clone"></i> Data Obat Keluar </a>
        </li>
      <?php endif;?>


  	 <!--  // jika menu Laporan Stok obat dipilih, menu Laporan Stok obat aktif -->
  	 <?php if ($_GET["module"]=="lap_stok") : ?>
  		  <li class="active treeview">
        	<a href="javascript:void(0);">
          	<i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
        	</a>
        	<ul class="treeview-menu">
            <li class="active"><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Obat </a></li>
          	<li><a href="?module=lap_obat_masuk"><i class="fa fa-circle-o"></i> Obat Masuk </a></li>
            <li><a href="?module=lap_obat_keluar"><i class="fa fa-circle-o"></i> Obat Keluar </a></li>
        	</ul>
      	</li>

  	 <!-- // jika menu Laporan obat Masuk dipilih, menu Laporan obat Masuk aktif -->
      <?php elseif ($_GET["module"]=="lap_obat_masuk"):?>
  		  <li class="active treeview">
        	<a href="javascript:void(0);">
          	<i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
        	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Obat </a></li>
        		<li class="active"><a href="?module=lap_obat_masuk"><i class="fa fa-circle-o"></i> Obat Masuk </a></li>
            <li><a href="?module=lap_obat_keluar"><i class="fa fa-circle-o"></i> Obat Keluar </a></li>
      		</ul>
      	</li>

        <!-- // jika menu Laporan obat Keluar dipilih, menu Laporan obat keluar aktif -->
      <?php elseif ($_GET["module"]=="lap_obat_keluar") : ?>
        <li class="active treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Obat </a></li>
            <li><a href="?module=lap_obat_masuk"><i class="fa fa-circle-o"></i> Obat Masuk </a></li>
            <li class="active"><a href="?module=lap_obat_keluar"><i class="fa fa-circle-o"></i> Obat Keluar </a></li>
          </ul>
        </li>

  	   <!-- // jika menu Laporan tidak dipilih, menu Laporan tidak aktif -->
      <?php else : ?>
  		  <li class="treeview">
        	<a href="javascript:void(0);">
          	<i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
        	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Obat </a></li>
        		<li><a href="?module=lap_obat_masuk"><i class="fa fa-circle-o"></i> Obat Masuk </a></li>
            <li><a href="?module=lap_obat_keluar"><i class="fa fa-circle-o"></i> Obat Keluar </a></li>
      		</ul>
      	</li>
      <?php endif; ?>

  	   <!-- // jika menu user dipilih, menu user aktif -->
      <?php if ($_GET["module"]=="user" || $_GET["module"]=="form_user") : ?>
        <li class="active">
          <a href="?module=user"><i class="fa fa-user"></i> Manajemen User</a>
  	  	</li>
  	   <!-- // jika tidak, menu user tidak aktif -->
      <?php else : ?>
    		<li>
    			<a href="?module=user"><i class="fa fa-user"></i> Manajemen User</a>
        </li>
      <?php endif;?>

  	   <!-- // jika menu ubah password dipilih, menu ubah password aktif -->
  	  <?php if ($_GET["module"]=="password") : ?>
        <li class="active">
  			 <a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
  		  </li>
  	   <!-- // jika tidak, menu ubah password tidak aktif -->
      <?php else : ?>
    		<li>
    			<a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
    		</li>
      <?php endif;?>

  </ul>
	<!--sidebar menu end-->

<!-- // jika hak akses = Manajer, tampilkan menu -->
<?php elseif ($_SESSION['hak_akses']=='Manajer') : ?>
  
  <!-- sidebar menu start -->
  <ul class="sidebar-menu">
    <li class="header">MAIN MENU</li>

  	<!-- // fungsi untuk pengecekan menu aktif
  	// jika menu beranda dipilih, menu beranda aktif -->
    <?php if ($_GET["module"]=="beranda") : ?>
      <li class="active">
  			<a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
  	  </li>
    <!-- // jika tidak, menu beranda tidak aktif -->
    <?php else : ?>
		  <li>
        <a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
	  	</li>
    <?php endif;?>

     <!--  // jika menu Laporan Stok obat dipilih, menu Laporan Stok obat aktif -->
   <?php if ($_GET["module"]=="lap_stok") : ?>
      <li class="active treeview">
        <a href="javascript:void(0);">
          <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Obat </a></li>
          <li><a href="?module=lap_obat_masuk"><i class="fa fa-circle-o"></i> Obat Masuk </a></li>
          <li><a href="?module=lap_obat_keluar"><i class="fa fa-circle-o"></i> Obat Keluar </a></li>
        </ul>
      </li>

   <!-- // jika menu Laporan obat Masuk dipilih, menu Laporan obat Masuk aktif -->
    <?php elseif ($_GET["module"]=="lap_obat_masuk") : ?>
      <li class="active treeview">
        <a href="javascript:void(0);">
          <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Obat </a></li>
          <li class="active"><a href="?module=lap_obat_masuk"><i class="fa fa-circle-o"></i> Obat Masuk </a></li>
          <li><a href="?module=lap_obat_keluar"><i class="fa fa-circle-o"></i> Obat Keluar </a></li>
        </ul>
      </li>

      <!-- // jika menu Laporan obat Keluar dipilih, menu Laporan obat keluar aktif -->
    <?php elseif ($_GET["module"]=="lap_obat_keluar") : ?>
      <li class="active treeview">
        <a href="javascript:void(0);">
          <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Obat </a></li>
          <li><a href="?module=lap_obat_masuk"><i class="fa fa-circle-o"></i> Obat Masuk </a></li>
          <li class="active"><a href="?module=lap_obat_keluar"><i class="fa fa-circle-o"></i> Obat Keluar </a></li>
        </ul>
      </li>

     <!-- // jika menu Laporan tidak dipilih, menu Laporan tidak aktif -->
    <?php else : ?>
      <li class="treeview">
        <a href="javascript:void(0);">
          <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Obat </a></li>
          <li><a href="?module=lap_obat_masuk"><i class="fa fa-circle-o"></i> Obat Masuk </a></li>
          <li><a href="?module=lap_obat_keluar"><i class="fa fa-circle-o"></i> Obat Keluar </a></li>
        </ul>
      </li>
    <?php endif; ?>

	  <!-- // jika menu ubah password dipilih, menu ubah password aktif -->
    <?php if ($_GET["module"]=="password") : ?>
      <li class="active">
       <a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
      </li>
     <!-- // jika tidak, menu ubah password tidak aktif -->
    <?php else : ?>
      <li>
        <a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
      </li>
    <?php endif;?>

	</ul>
	<!--sidebar menu end-->

<!-- // jika hak akses = Gudang, tampilkan menu -->
<?php elseif ($_SESSION['hak_akses']=='Gudang') : ?>
	
  <!-- sidebar menu start -->
  <ul class="sidebar-menu">
    <li class="header">MAIN MENU</li>

  <!-- 	// fungsi untuk pengecekan menu aktif
	// jika menu beranda dipilih, menu beranda aktif -->
	<?php if ($_GET["module"]=="beranda") : ?>
    <li class="active">
      <a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
    </li>
  <!-- // jika tidak, menu home tidak aktif -->
  <?php else : ?>
    <li>
      <a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
    </li>
  <?php endif;?>

   <!-- jika menu data obat dipilih, menu data obat aktif -->
    <?php if ($_GET["module"]=="obat" || $_GET["module"]=="form_obat") : ?>
      <li class="active">
        <a href="?module=obat"><i class="fa fa-folder"></i> Data Obat </a>
      </li>
    <!-- // jika tidak, menu data obat tidak aktif -->
    <?php else : ?>
      <li>
        <a href="?module=obat"><i class="fa fa-folder"></i> Data Obat </a>
      </li>
    <?php endif;?>

    <!-- // jika menu data obat masuk dipilih, menu data obat masuk aktif -->
    <?php if ($_GET["module"]=="obat_masuk" || $_GET["module"]=="form_obat_masuk") : ?>
      <li class="active">
        <a href="?module=obat_masuk"><i class="fa fa-clone"></i> Data Obat Masuk </a>
      </li>
    <!--  // jika tidak, menu data obat masuk tidak aktif -->
    <?php else : ?>
      <li>
        <a href="?module=obat_masuk"><i class="fa fa-clone"></i> Data Obat Masuk </a>
      </li>
    <?php endif;?>

    <!-- // jika menu data obat keluar dipilih, menu data obat keluar aktif -->
    <?php if ($_GET["module"]=="obat_keluar" || $_GET["module"]=="form_obat_keluar") : ?>
      <li class="active">
        <a href="?module=obat_keluar"><i class="fa fa-clone"></i> Data Obat Keluar </a>
      </li>
    <!-- // jika tidak, menu data obat masuk tidak aktif -->
    <?php else :?>
      <li>
        <a href="?module=obat_keluar"><i class="fa fa-clone"></i> Data Obat Keluar </a>
      </li>
    <?php endif;?>

     <!-- // jika menu Laporan stok obat  dipilih, menu Laporan obat Masuk aktif -->
    <?php if ($_GET["module"]=="lap_stok") : ?>
      <li class="active treeview">
        <a href="javascript:void(0);">
          <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Obat </a></li>
          <li><a href="?module=lap_obat_masuk"><i class="fa fa-circle-o"></i> Obat Masuk </a></li>
          <li><a href="?module=lap_obat_keluar"><i class="fa fa-circle-o"></i> Obat Keluar </a></li>
        </ul>
      </li>

    <!-- // jika menu Laporan obat Masuk dipilih, menu Laporan obat Masuk aktif -->
    <?php elseif ($_GET["module"]=="lap_obat_masuk") : ?>
      <li class="active treeview">
        <a href="javascript:void(0);">
          <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Obat </a></li>
          <li class="active"><a href="?module=lap_obat_masuk"><i class="fa fa-circle-o"></i> Obat Masuk </a></li>
          <li><a href="?module=lap_obat_keluar"><i class="fa fa-circle-o"></i> Obat Keluar </a></li>
        </ul>
      </li>

      <!-- // jika menu Laporan obat Keluar dipilih, menu Laporan obat keluar aktif -->
    <?php elseif ($_GET["module"]=="lap_obat_keluar") : ?>
      <li class="active treeview">
        <a href="javascript:void(0);">
          <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Obat </a></li>
          <li><a href="?module=lap_obat_masuk"><i class="fa fa-circle-o"></i> Obat Masuk </a></li>
          <li class="active"><a href="?module=lap_obat_keluar"><i class="fa fa-circle-o"></i> Obat Keluar </a></li>
        </ul>
      </li>

     <!-- // jika menu Laporan tidak dipilih, menu Laporan tidak aktif -->
    <?php else : ?>
      <li class="treeview">
        <a href="javascript:void(0);">
          <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> Stok Obat </a></li>
          <li><a href="?module=lap_obat_masuk"><i class="fa fa-circle-o"></i> Obat Masuk </a></li>
          <li><a href="?module=lap_obat_keluar"><i class="fa fa-circle-o"></i> Obat Keluar </a></li>
        </ul>
      </li>
    <?php endif; ?>

    <!-- // jika menu ubah password dipilih, menu ubah password aktif -->
    <?php if ($_GET["module"]=="password") : ?>
      <li class="active">
       <a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
      </li>
     <!-- // jika tidak, menu ubah password tidak aktif -->
    <?php else : ?>
      <li>
        <a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
      </li>
    <?php endif;?>
    <!-- ----------------------------------------------------------------------------- -->
  
  </ul>
	<!--sidebar menu end-->

<?php endif; ?>