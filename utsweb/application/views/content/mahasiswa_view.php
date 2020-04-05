 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"> Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Data of Polinema Students</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th style="text-align: center;">NO</th>
                  <th style="text-align: center;">NAMA</th>
                  <th style="text-align: center;">NIM</th>
                  <th style="text-align: center;">EMAIL</th>
                  <th style="text-align: center;">JURUSAN</th>
                </tr>
              </thead>
              <tbody>
                    <?php 
                        $no = 1;
                        foreach($mahasiswa as $mhs){
                    ?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $mhs->nama;?></td>
                            <td><?php echo $mhs->nim;?></td>
                            <td><?php echo $mhs->email;?></td>
                            <td><?php echo $mhs->jurusan;?></td>
                        </tr>
                    <?php }?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    </div>