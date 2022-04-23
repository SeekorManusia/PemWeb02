<?php

 $ns1 = ['id'=>1,'nim'=>'0110221029','uts'=>100,'uas'=>100,'tugas'=>100];
 $ns2 = ['id'=>2,'nim'=>'0110221030','uts'=>100,'uas'=>100,'tugas'=>100];
 $ns3 = ['id'=>3,'nim'=>'0110221031','uts'=>100,'uas'=>100,'tugas'=>100];
 $ns4 = ['id'=>4,'nim'=>'0110221032','uts'=>100,'uas'=>100,'tugas'=>100];

 $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

 ?>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
<center>
<h2>Daftar Nilai Siswa</h2>
</center>
<table class="table table-bordered border-brown table-sm">
 <thead>
 <tr>
 <th>No</th>
 <th>NIM</th>
 <th>UTS</th>
 <th>UAS</th>
 <th>Tugas</th>
 <th>Nilai Akhir</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor = 1;
 foreach($ar_nilai as $ns){
 echo '<tr><td>'.$nomor.'</td>';
 echo '<td>'.$ns['nim'].'</td>';
 echo '<td>'.$ns['uts'].'</td>';
 echo '<td>'.$ns['uas'].'</td>';
 echo '<td>'.$ns['tugas'].'</td>';
          $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/4;
 echo '<td>'.number_format($nilai_akhir,2,).'</td>';
 echo '<tr/>';
 $nomor--;
 }
 ?>
 <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
 </tbody>
 </table>