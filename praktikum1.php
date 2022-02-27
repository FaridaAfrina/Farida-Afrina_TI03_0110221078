 <?php
 $ns1 = ['id'=>1,'nim'=>'01101','uts'=>75,'uas'=>92,'tugas'=>88];
 $ns2 = ['id'=>2,'nim'=>'01121','uts'=>80,'uas'=>60,'tugas'=>76];
 $ns3 = ['id'=>3,'nim'=>'01130','uts'=>65,'uas'=>86,'tugas'=>81];
 $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>93];

 $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

 ?>
 <h3>Daftar Nilai Siswa</h3>
 <table border="1" width="100%">
 <thead>
 <tr bgcolor="pink">
 <th>No</th><th>NIM</th><th>UTS</th>
 <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor = 1;
 foreach($ar_nilai as $ns){
 echo '<tr align="center" bgcolor="violet"><td>'.$nomor.'</td>';
 echo '<td>'.$ns['nim'].'</td>';
 echo '<td>'.$ns['uts'].'</td>';
 echo '<td>'.$ns['uas'].'</td>';
 echo '<td>'.$ns['tugas'].'</td>';
 $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
 echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
 echo '<tr/>';
 $nomor++;
 }
 ?>
 </tbody>
 </table>