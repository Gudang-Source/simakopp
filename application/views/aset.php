<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="main">
<div class="container">



    <div class="title">
        <h3>Daftar Aset</h3>
    </div>
    <div class="row">
        <div class="col-md-12 ml-auto mr-auto">
            <a href="<?=base_URL()?>dashboard/tambah/"><button class="btn btn-primary">Tambah Aset</button></a>     
        </div>
    </div> 


<table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Kode Aset</th>
            <th>Nama</th>
            <th>Merek</th>
            <th class="text-center">Lokasi</th>
            <th class="text-center">Kelurahan</th>
            <th class="text-center">Kecamatan</th>
            <th class="text-center">Tanggal</th>
            <th class="text-center">Kapasitas</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php							
        foreach($ast as $a) :
    ?>	
        <tr>
            <td class="text-center"></td>
            <td><?=$a->kode_aset?></td>
            <td><?=$a->nama_aset?></td>
            <td><?=$a->merk?></td>
            <td class="text-right"><?=$a->lokasi?></td>
            <td class="text-right"><?=$a->kelurahan?></td>
            <td class="text-right"><?=$a->kecamatan?></td>
            <td class="text-right"><?=$a->tanggal?></td>
            <td class="text-right"><?=$a->kapasitas?></td>            
            <td class="td-actions text-right">                
                <button type="button" rel="tooltip" class="btn btn-success btn-sm">
                    <i class="material-icons">edit</i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger btn-sm">
                    <i class="material-icons">close</i>
                </button>
            </td>
            <?php endforeach; ?>
        </tr>       
        
    </tbody>
</table>
</div>
</div>

<footer class="footer">
  <div class="container">
  <div class="copyright float-right">
    &copy;
    <script>
      document.write(new Date().getFullYear())
    </script>, by<a href="#" target="_blank">Simakopp.
  </div>
  </div>
</footer>