<?php
require "fungsi.php";
$qmhs = "SELECT * FROM mahasiswa";
$mahasiswas = tampildata($qmhs);
?>


<!DOCTYPE html>
<html>
     <head>
            <meta charset="utf-8">
            <title>
                Data Mahasiswa | INFORMATIKA 2026
            </title>
            <link rel="stylesheet" href="style.css">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
     </head>
     <body >
         <h1>
            INFORMATIKA 2026
        </h1>
        <table class="nav-table" border="1" cellspacing="0" cellpadding="3">
          <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profile.php">Profil</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
          </tr>
        </table>
        <br>
         <hr/>
         <h2>Data Mahasiswa</h2>
         <a href="tambahdata.php">
            <button>Tambah data</button>
         </a>
         <table border="1" cellpadding="10">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>

            <?php
            $i = 1;
            foreach ($mahasiswas as $mhs) {
                echo "<tr>";
                echo "<td>" . $i++ . "</td>";
                echo "<td>" . $mhs["nama"] . "</td>";
                echo "<td>" . $mhs["nim"] . "</td>";
                echo "<td>" . $mhs["jurusan"] . "</td>";
                echo "<td>" . $mhs["email"] . "</td>";
                echo "<td>" . $mhs["no_hp"] . "</td>";
                echo "<td><img src='asset/img/" . $mhs["foto"] . "' alt='Foto " . $mhs["nama"] . "' width='60px'/></td>";
                echo "<td>
                        <a href='editdata.php?id=" . $mhs["id"] . "'><button>Edit</button></a> |
                        <a href='hapusdata.php?id=" . $mhs["id"] . "' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?')\"><button>Hapus</button></a>
                      </td>";
                echo "</tr>";
            }
            ?>
        
            <!-- <tr>
                <td>1</td>
                <td>Radit</td>
                <td>111100001</td>
                <td>Informatika</td>
                <td>radit@example.com</td>
                <td>08123456789</td>
                <td><img src="asset/img/Radit.png" alt="Foto Radit" width="60px"/></td>
                <td>
                    <a href="editdata.php?id=1"><button>Edit</button></a> |
                    <a href="hapusdata.php?id=1" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><button>Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rizky</td>
                <td>111100002</td>
                <td>Informatika</td>
                <td>rizky@example.com</td>
                <td>08123456780</td>
                <td><img src="asset/img/Rizky.png" alt="Foto Rizky" width="60px"/></td>
                <td>
                    <a href="editdata.php?id=2"><button>Edit</button></a> |
                    <a href="hapusdata.php?id=2" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><button>Hapus</button></a>
                </td>
            </tr>
            <tr>        
                <td>3</td>
                <td>Nikko</td>
                <td>111100003</td>
                <td>Informatika</td>
                <td>nikko@example.com</td>
                <td>08123456781</td>
                <td><img src="asset/img/Nikko.png" alt="Foto Nikko" width="60px"/></td>
                <td>
                    <a href="editdata.php?id=3"><button>Edit</button></a> |
                    <a href="hapusdata.php?id=3" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><button>Hapus</button></a>
                </td>
            </tr> -->
         </table>
         <br>
         <hr>
         <!-- <table border="1" cellpadding="50" cellspacing="2">
            <tr>
                <th align="center">1,1</th>
                <th align="center">1,2</th>
                <th align="center">1,3</th>        
                <th align="center">1,4</th>
            </tr>
            <tr>
                <th align="center">2,1</th>
                <th colspan="2" rowspan="2"></th>        
                <th align="center">2,4</th>
            </tr>
            <tr>
                <th align="center">3,1</th>       
                <th align="center">3,4</th>
            </tr>
            <tr>
                <th align="center">4,1</th>
                <th align="center">4,2</th>
                <th align="center">4,3</th>        
                <th align="center">4,4</th>
            </tr>
         </table> -->
     </body>
</html>