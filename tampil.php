<?php

include 'koneksi.php';


$sql = "SELECT * FROM beasiswa";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Prodi</th>
            <th>Jenis Kelamin</th>
            <th>Jarak Tempat Tinggal Ke Kampus</th>
            <th>Asal Sekolah</th>
            <th>Tahun Lulus</th>
            <th>SKS</th>
            <th>Ikut Organisasi</th>
            <th>Ikut UKM</th>
            <th>IPK</th>
            <th>Pekerjaan Orang Tua</th>
            <th>Penghasilan</th>
            <th>Tanggungan</th>
            <th>Status Beasiswa</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['no'] . "</td>";
        echo "<td>" . $row['nama_lengkap'] . "</td>";
        echo "<td>" . $row['prodi'] . "</td>";
        echo "<td>" . $row['jenis_kelamin'] . "</td>";
        echo "<td>" . $row['jarak_ke_kampus'] . "</td>";
        echo "<td>" . $row['asal_sekolah'] . "</td>";
        echo "<td>" . $row['tahun_lulus'] . "</td>";
        echo "<td>" . $row['sks'] . "</td>";
        echo "<td>" . $row['ikut_organisasi'] . "</td>";
        echo "<td>" . $row['ikut_ukm'] . "</td>";
        echo "<td>" . $row['ipk'] . "</td>";
        echo "<td>" . $row['pekerjaan_orang_tua'] . "</td>";
        echo "<td>" . $row['penghasilan'] . "</td>";
        echo "<td>" . $row['tanggungan'] . "</td>";
        echo "<td>" . $row['status_beasiswa'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data yang ditemukan.";
}

mysqli_close($conn);
?>