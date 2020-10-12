

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1><i class="fa fa-home icon-title"></i> Beranda</h1>
  <ol class="breadcrumb">
    <li>
      <a href="?module=beranda"><i class="fa fa-home"></i>Beranda</a>
    </li>
  </ol>
</section>
  
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-xs-12">
      <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p style="font-size:15px">
          <i class="icon fa fa-user"></i> Selamat datang <strong><?php echo $_SESSION['nama_user']; ?></strong> di Aplikasi Persediaan Obat.
        </p>        
      </div>
    </div>
  </div>
 
  <!-- Small boxes (Stat box) -->
  <div class="row">

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div style="background-color:#00c0ef;color:#fff" class="small-box">
        
        <div class="inner">
          <?php  
            // fungsi query untuk menampilkan data dari tabel obat
            $query = mysqli_query($mysqli,"SELECT COUNT(kode_obat) as jumlah FROM is_obat") 
                    or die('Ada kesalahan pada query tampil Data Obat: '.mysqli_error($mysqli));

            // tampilkan data
            $data = mysqli_fetch_assoc($query);
          ?>
          <h3><?php echo $data['jumlah']; ?></h3>
          <p>Data Obat</p>
        </div>

        <div class="icon">
          <i class="fa fa-folder"></i>
        </div>
        <?php  
          if ($_SESSION['hak_akses']!='Manajer') { ?>
            <a href="?module=form_obat&form=add" class="small-box-footer" title="Tambah Data" data-toggle="tooltip">
              <i class="fa fa-plus"></i>
            </a>
        <?php } else { ?>
          <a class="small-box-footer"><i class="fa"></i></a>
        <?php } ?>
      </div>

    </div><!-- ./col -->

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div style="background-color:#00a65a;color:#fff" class="small-box">
        
        <div class="inner">
          <?php   
            // fungsi query untuk menampilkan data dari tabel obat masuk
            $query = mysqli_query($mysqli, 
                    "SELECT COUNT(kode_transaksi) as jumlah FROM is_obat_masuk") 
                     or die('Ada kesalahan pada query tampil Data obat Masuk: '.mysqli_error($mysqli));
            // tampilkan data
            $data = mysqli_fetch_assoc($query);
          ?>
          <h3><?php echo $data['jumlah']; ?></h3>
          <p>Data Obat Masuk</p>
        </div>
        <!-- Icon -->
        <div class="icon">
          <i class="fa fa-sign-in"></i>
        </div>
        <!-- End Icon -->
        <?php  
          if ($_SESSION['hak_akses']!='Manajer') { ?>
            <a href="?module=form_obat_masuk&form=add" class="small-box-footer" title="Tambah Data" data-toggle="tooltip">
              <i class="fa fa-plus"></i>
            </a>
        <?php } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
        <?php } ?>
      </div>
    </div><!-- ./col -->

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div style="background-color:#f39c12;color:#fff" class="small-box">
        <div class="inner">
          <?php  
            // fungsi query untuk menampilkan data dari tabel obat
            $query = mysqli_query($mysqli, 
                      "SELECT COUNT(kode_obat) as jumlah FROM is_obat")
                      or die('Ada kesalahan pada query tampil Data Obat: '.mysqli_error($mysqli));
            // tampilkan data
            $data = mysqli_fetch_assoc($query);
          ?>
          <h3><?php echo $data['jumlah']; ?></h3>
          <p>Laporan Stok Obat</p>
        </div>
        <!-- Icon -->
        <div class="icon">
          <i class="fa fa-file-text-o"></i>
        </div>
        <!-- End Icon -->
        <a href="?module=lap_stok" class="small-box-footer" title="Cetak Laporan" data-toggle="tooltip"><i class="fa fa-print"></i></a>
      </div>
    </div><!-- ./col -->

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div style="background-color:#dd4b39;color:#fff" class="small-box">
        <div class="inner">
          <?php   
          // fungsi query untuk menampilkan data dari tabel obat masuk
          $query = mysqli_query($mysqli, "SELECT COUNT(kode_transaksi) as jumlah FROM is_obat_masuk")
                                          or die('Ada kesalahan pada query tampil Data obat Masuk: '.mysqli_error($mysqli));

          // tampilkan data
          $data = mysqli_fetch_assoc($query);
          ?>
          <h3><?php echo $data['jumlah']; ?></h3>
          <p>Laporan Obat Masuk</p>
        </div>
        <div class="icon">
          <i class="fa fa-clone"></i>
        </div>
        <a href="?module=lap_obat_masuk" class="small-box-footer" title="Cetak Laporan" data-toggle="tooltip"><i class="fa fa-print"></i></a>
      </div>
    </div><!-- ./col -->
  </div><!-- /.row -->


  <div class="row">

    <div class="container col-lg">
    <div class="card">
        <h3 class="card-header center" id="monthAndYear"></h3>
        <table class="table table-bordered table-responsive-sm" id="calendar">
            <thead>
            <tr style="background: #3C8DBC;color: white;text-align: center;">
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
            </thead>

            <tbody id="calendar-body" class="text-center">

            </tbody>
        </table>

        <div class="form-inline">

            <button class="btn btn-primary col-sm-6" id="previous" onclick="previous()">Previous</button>

            <button class="btn btn-primary col-sm-6" id="next" onclick="next()">Next</button>
        </div>
        <br/>
        <br>
        <label class="lead mr-2 ml-2" for="month">Jump To: </label>
        <form class="form-inline">
            <select class="form-control col-sm-4" name="month" id="month" onchange="jump()">
                <option value=0>Jan</option>
                <option value=1>Feb</option>
                <option value=2>Mar</option>
                <option value=3>Apr</option>
                <option value=4>May</option>
                <option value=5>Jun</option>
                <option value=6>Jul</option>
                <option value=7>Aug</option>
                <option value=8>Sep</option>
                <option value=9>Oct</option>
                <option value=10>Nov</option>
                <option value=11>Dec</option>
            </select>


            <label for="year"></label><select class="form-control col-sm-4" name="year" id="year" onchange="jump()">
            <option value=1990>1990</option>
            <option value=1991>1991</option>
            <option value=1992>1992</option>
            <option value=1993>1993</option>
            <option value=1994>1994</option>
            <option value=1995>1995</option>
            <option value=1996>1996</option>
            <option value=1997>1997</option>
            <option value=1998>1998</option>
            <option value=1999>1999</option>
            <option value=2000>2000</option>
            <option value=2001>2001</option>
            <option value=2002>2002</option>
            <option value=2003>2003</option>
            <option value=2004>2004</option>
            <option value=2005>2005</option>
            <option value=2006>2006</option>
            <option value=2007>2007</option>
            <option value=2008>2008</option>
            <option value=2009>2009</option>
            <option value=2010>2010</option>
            <option value=2011>2011</option>
            <option value=2012>2012</option>
            <option value=2013>2013</option>
            <option value=2014>2014</option>
            <option value=2015>2015</option>
            <option value=2016>2016</option>
            <option value=2017>2017</option>
            <option value=2018>2018</option>
            <option value=2019>2019</option>
            <option value=2020>2020</option>
            <option value=2021>2021</option>
            <option value=2022>2022</option>
            <option value=2023>2023</option>
            <option value=2024>2024</option>
            <option value=2025>2025</option>
            <option value=2026>2026</option>
            <option value=2027>2027</option>
            <option value=2028>2028</option>
            <option value=2029>2029</option>
            <option value=2030>2030</option>
        </select></form>
    </div>
</div>

    
  </div>
</section><!-- /.content-->

<!--<button name="jump" onclick="jump()">Go</button>-->
<script src="scripts.js"></script>

<!-- Optional JavaScript for bootstrap -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>