<?php
if(isset($_POST['submit'])){

		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/pjpeg"))
		&& ($_FILES["file"]["size"] < 200000000))
		  {
		  if ($_FILES["file"]["error"] > 0)
		    {
		    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		    }
		  else
		    {
		    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		    echo "Type: " . $_FILES["file"]["type"] . "<br />";
		    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

		    if (file_exists("http://www.yourlifeoutdoors.com/images/" . $_FILES["file"]["name"]))
		      {
		      echo $_FILES["file"]["name"] . " already exists. ";
		      }
		    else
		      {
		      move_uploaded_file($_FILES["file"]["tmp_name"],
Line 100:		      "http://www.yourlifeoutdoors.com/images/" . $_FILES["file"]["name"]);
		      echo "Stored in: " . "images/" . $_FILES["file"]["name"];
		      }
		    }
		  }
		else
		  {
		  echo "Invalid file";
		  }?>

<?php
//Include file koneksi ke database
include "../../config/koneksi.php";
include "../../config/config.php";

$folderUpload = "../../assets/img/upload";

# simpan masing-masing file ke dalam array 
# dan casting menjadi objek
$fileFoto = (object) @$_FILES['foto'];
$fileKtp = (object) @$_FILES['ktp'];
$fileNpwp = (object)  @$_FILES['npwp'];

//menerima nilai dari kiriman form input-barang 
$nama=$_POST['nama'];
$email=$_POST['email'];
$telepon=$_POST['telepon'];
$jabatan=$_POST['jabatan'];
$diklat=$_POST['diklat'];
$alamat=$_POST['alamat'];
$no_ktp=$_POST['no_ktp'];
$no_npwp=$_POST['no_npwp'];
$cv=$_POST['cv'];

//Apakah wajib dikonversi menjadi objek? Tidak. Tidak wajib. Kita tetap bisa menggunakan tipe data aslinya yaitu array. Saya mengkonversinya ke dalam objek hanya karena saya lebih suka menggunakan tanda panah -> dari pada tanda kurung siku [] untuk mengakses data

// echo $nama;
// echo $email;
// echo $telepon;
// echo $jabatan;
// echo $diklat;
// echo $alamat;
// echo $no_ktp;
// echo $no_npwp;
// echo $cv;
 
//Query input menginput data kedalam tabel barang
  $query="INSERT INTO tb_instruktur(nama,email,telepon,jabatan,id_diklat,no_ktp,no_npwp,alamat,cv) 
  		  VALUES('$nama','$email','$telepon','$jabatan','$diklat','$no_ktp','$no_npwp','$alamat','$cv')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
  	// echo "berhasil";

  	# mulai upload file
	$uploadFotoSukses = move_uploaded_file(
		$fileFoto->tmp_name, "{$folderUpload}/{$fileFoto->name}"
	);

	$uploadKtpSukses = move_uploaded_file(
		$fileKtp->tmp_name, "{$folderUpload}/{$fileKtp->name}"	
	);

	$uploadNpwpSukses = move_uploaded_file(
		$fileNpwp->tmp_name, "{$folderUpload}/{$fileNpwp->name}"
	);

	// if ($uploadFotoSukses) {
	// 	$link = "{$folderUpload}/{$fileFoto->name}";
	// 	echo "Sukses Upload Foto: <a href='{$link}'>{$fileFoto->name}</a>";
	// 	echo "<br>";
	// }

	// if ($uploadKtpSukses) {
	// 	$link = "{$folderUpload}/{$fileKtp->name}";
	// 	echo "Sukses Upload KTP: <a href='{$link}'>{$fileKtp->name}</a>";
	// 	echo "<br>";
	// }

	// if ($uploadNpwpSukses) {
	// 	$link = "{$folderUpload}/{$fileNpwp->name}";
	// 	echo "Sukses Upload NPWP: <a href='{$link}'>{$fileNpwp->name}</a>";
	// 	echo "<br>";
	// }

	header('location: '.SERVER.'admin/instruktur/tambah?feedback=1');
	exit;
  }
else {
	// echo "gagal";
	header('location: '.SERVER.'admin/instruktur/tambah?feedback=2');	
	exit;
}  

?>