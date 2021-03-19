
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Array Siswa</title>
    <style>
        footer{
            background : black;
            color : white;
        }
    </style>
  </head>
  <body>
<?php
$proses = $_GET['proses__'];
$nama_siswa = $_GET['nama__lengkap']; 
$mata_kuliah = $_GET['mata__kuliah'];
$nilai_uts = $_GET['nilai__uts'];
$nilai_uas = $_GET['nilai__uas'];
$nilai_tugas = $_GET['nilai__tugas'];
$nim = $_GET['nim__'];
$total = $nilai_uts + $nilai_uas + $nilai_tugas;
        $alphabet = $total / 3;
        if ($alphabet >= 90){
            $grade = "A (Sangat Memuaskan)";
        }elseif ($alphabet >= 85)
        {   $grade = "B (Memuaskan)";
        }elseif ($alphabet >= 70)
        {   $grade = "C (Cukup)";
        }elseif ($alphabet >= 56)
        {   $grade = "D (Kurang)";
        }elseif ($alphabet >= 36)
        {   $grade = "E (Kurang)";
        }else{
            $grade = "I (Tidak Ada)";
        }

        if ($alphabet <= 55){
            $lulus = "Tidak Lulus";
        }else {
            $lulus = "Lulus";
        }

$ns1 = ['id'=>1,'nama'=>'kevin','nim'=>'01101','matkul'=>'DDP','uts'=>80,'uas'=>84,'tugas'=>78,'total'=>242,'grade'=>'B','keterangan'=>'Cukup'];
$ns2 = ['id'=>2,'nama'=>'julio','nim'=>'01121','matkul'=>'Basis Data','uts'=>70,'uas'=>50,'tugas'=>68,'total'=>188,'grade'=>'C','keterangan'=>'Kurang'];
$ns3 = ['id'=>3,'nama'=>'ivuel','nim'=>'01130','matkul'=>'Basis Data','uts'=>60,'uas'=>86,'tugas'=>80,'total'=>146,'grade'=>'B','keterangan'=>'Cukup'];
$ns4 = ['id'=>4,'nama'=>'yoga','nim'=>'01134','matkul'=>'PWL','uts'=>90,'uas'=>91,'tugas'=>82,'total'=>263,'grade'=>'A','keterangan'=>'Lulus'];
$ns5 = ['id'=>5,'nama'=>$nama_siswa,'nim'=> $nim,'matkul'=> $mata_kuliah,'uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas,'total'=>$total,'grade'=>$grade,'keterangan'=>$lulus];
$ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];
?>
                <div class="card ml-5" style="width: 100%;">
                    <div class="card-header bg-danger text-white" style="font-weight: bold; text-align: center; font-size: 20px;"">Range Nilai</div>
                    <ul class="list-group list-group-flush" style="text-align: center;">
                        <li class="list-group-item">A : 85 - 100</li>
                        <li class="list-group-item">B : 70 -84</li>
                        <li class="list-group-item">C : 56-69</li>
                        <li class="list-group-item">D : 36 - 55 </li>
                        <li class="list-group-item">E : Kurang dari 35 </li>
                        <li class="list-group-item">I : Tidak Ada </li>
                    </ul>
                </div>
            </div> 
                <div class="card" style="width: 100%;">
                    <div class="card-header bg-danger text-white" style="font-weight:  bold; text-align: center; font-size: 20px;"">Keterangan</div>
                        <ul class="list-group list-group-flush" style="text-align: center;">
                            <li class="list-group-item">Sangat Memuaskan</li>
                            <li class="list-group-item">Memuaskan</li>
                            <li class="list-group-item">Cukup</li>
                            <li class="list-group-item">Kurang</li>
                            <li class="list-group-item">Sangat Kurang</li>
                            <li class="list-group-item">Tidak Ada</li>
                        </ul>
                    </div>
                </div>  
<h3 style = "text-align : center; color : orange;" >Daftar Nilai Siswa</h3>
<table border="1" width="100%">
<thead>
<tr style = "text-align : center;">
<th>No</th><th>Nama</th><th>NIM</th><th>Mata Kuliah</th><th>UTS</th>
<th>UAS</th><th>Tugas</th><th>Nilai Akhir</th><th>Total Nilai</th><th>Grade</th><th>Keterangan</th>
</tr>
</thead>
<tbody>
<?php
$nomor = 1;
foreach($ar_nilai as $ns){
echo '<tr style = "text-align : center;"><td>'.$nomor.'</td>';
echo '<td>'.$ns['nama'].'</td>';
echo '<td>'.$ns['nim'].'</td>';
echo '<td>'.$ns['matkul'].'</td>';
echo '<td>'.$ns['uts'].'</td>';
echo '<td>'.$ns['uas'].'</td>';
echo '<td>'.$ns['tugas'].'</td>';
$nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
echo '<td>'.$ns['total'].'</td>';
echo '<td>'.$ns['grade'].'</td>';
echo '<td>'.$ns['keterangan'].'</td>';
echo '<tr/>';
$nomor++;
}
?>
</tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  </body>
  <footer>Develop By @Hannn @2021</footer>
  <button name="kembali" class="btn btn-danger"><a href="form_nilai.php" style = "text-decoration : none; color : white;">Kembali</a></button>
</html>