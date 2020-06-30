<?php 
	include '../db/connection.php';
	include '../db/koneksi.php';
	session_start();
	date_default_timezone_set('Asia/Jakarta');
	if(isset($_SESSION['login']) && $_SESSION['login']==true)
	{
		$user = $_SESSION['username'];
	}
	else
	{
		echo "Anda Harus login untuk mengoplarsikan sistem ini";
		header('Refresh:3;url=auth/signIn.php');
		exit();
	}
	$url = $_SERVER['REQUEST_URI'];

	if ($_GET['action'] == "simpanContact") 
	{
		$aboutconntactsupp = $_POST['kontakSupport'];

		$stmt = $mysqli->prepare("update aboutconntactsupp set conntactsupport=? where id=2");
		$stmt->bind_param("s",$aboutconntactsupp);
		if ($stmt->execute()) 
		{
			echo "Data Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=about");
		}
		else
		{
			echo "Data Tidak Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=about");
		}
	}
	
	else if ($_GET['action'] == "DapatMenjangkauWilayah") 
	{

		$DapatMenjangkauWilayah = $_POST['DapatMenjangkauWilayah'];

		$stmt = $mysqli->prepare("update aboutcontent1 set DapatMenjangkauWilayah=? where id=1");
		$stmt->bind_param("s",$DapatMenjangkauWilayah);
		if ($stmt->execute()) 
		{
			echo "Data Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=about");
		}
		else
		{
			echo "Data Tidak Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=about");
		}
	}
	else if ($_GET['action'] == "pelayananYangBaik") {

		$pelayananYangBaik = $_POST['pelayananYangBaik'];

		$stmt = $mysqli->prepare("update aboutcontent2 set pelayananyangbaik=? where id=1");
		$stmt->bind_param("s",$pelayananYangBaik);
		if ($stmt->execute()) 
		{
			echo "Data Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=about");
		}
		else
		{
			echo "Data Tidak Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=about");
		}
	}
	else if ($_GET['action'] == "isiDataLaporan") {

		$isiDataLaporan = $_POST['isiDataLaporan'];

		$stmt = $mysqli->prepare("update aboutcontent3 set isiDataLaporan=? where id=1");
		$stmt->bind_param("s",$isiDataLaporan);
		if ($stmt->execute()) 
		{
			echo "Data Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=about");
		}
		else
		{
			echo "Data Tidak Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=about");
		}
	}
	else if ($_GET['action'] == "memilihOpsi") 
	{

		$memilihOpsi = $_POST['memilihOpsi'];

		$stmt = $mysqli->prepare("update aboutcontent4 set memilihOpsi=? where id=1");
		$stmt->bind_param("s",$memilihOpsi);
		if ($stmt->execute()) 
		{
			echo "Data Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=about");
		}
		else
		{
			echo "Data Tidak Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=about");
		}
	}
	else if ($_GET['action'] == "berangkat") 
	{

		$berangkat = $_POST['berangkat'];

		$stmt = $mysqli->prepare("update aboutcontent5 set berangkat=? where id=1");
		$stmt->bind_param("s",$berangkat);
		if ($stmt->execute()) 
		{
			echo "Data Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=about");
		}
		else
		{
			echo "Data Tidak Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=about");
		}
	}
	else if ($_GET['action'] == "pelayananTerbaik") 
	{

		$pelayananTerbaik = $_POST['pelayananTerbaik'];

		$stmt = $mysqli->prepare("update aboutcontent6 set pelayananTerbaik=? where id=1");
		$stmt->bind_param("s",$pelayananTerbaik);
		if ($stmt->execute()) 
		{
			echo "Data Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=about");
		}
		else
		{
			echo "Data Tidak Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=about");
		}
	}
	else if ($_GET['action'] == "simpanContactUs") 
	{
		$alamat = $_POST['alamat'];
		$noTelp = $_POST['noTelp'];
		$email = $_POST['email'];

		$stmt = $mysqli->prepare("update contactus set alamat=?, noTelp=?, email=? where id=1");
		$stmt->bind_param("sss",$alamat,$noTelp,$email);
		if ($stmt->execute()) 
		{
			echo "Data Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=contactUs");
		}
		else
		{
			echo "Data Tidak Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=contactUs");
		}
	}
	elseif ($_GET['action'] =="komen" ) 
	{
		$namaKamu = $_POST['namaKamu'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$pesan = $_POST['pesan'];

		//date('D ,d-M-Y: h:i:s');
		$jam = date('h:i:s');
		$tanggal = date('d-M-Y');

		$stmt = $mysqli->prepare("insert into tanya (namaKamu,email,subject,jam,tanggal,pesan) value (?,?,?,?,?,?)");
		$stmt->bind_param("ssssss",$namaKamu,$email,$subject,$jam,$tanggal,$pesan);
		if ($stmt->execute()) 
		{
			header("Refresh:1;url=../frontend/contact.php?notif");
		}
		else
		{
			echo "Data Tidak Berhasil di Simpan";
			header("Refresh:2;url=../frontend/contact.php?notif");
		}
	}
	elseif ($_GET['action'] == "saveNews") 
	{
		$judul = $_POST['judul'];
		$desk = $_POST['desk'];
		$error = $_FILES['file']['error'];

		if ($error == 0) 
		{
			$ukuran_file = $_FILES['file']['size'];

			if ($ukuran_file <= 5000000) 
			{
				$nama_file = $_FILES['file']['name'];
				$format = pathinfo($nama_file, PATHINFO_EXTENSION);

				if (($format == "jpg") or ($format == "png")) 
				{
					$file_asal = $_FILES['file']['tmp_name'];
					$file_tujuan = "upload/".$_FILES['file']['name'];
					$upload = move_uploaded_file($file_asal, $file_tujuan);

					$stmt = $mysqli->prepare("insert into news (judul,image,desk) value (?,?,?)");
					$stmt->bind_param("sss",$judul,$nama_file,$desk);


					if ($upload == true and $stmt->execute()) 
					{
						echo "Upload Berhasil";
						header("Refresh:3;url=index.php?content=news&contentNews=contentNews");
					}
					else
					{
						echo "Upload gagal";
						header("Refresh:3;url=index.php?content=news");
					}
				}
				else
				{
					echo "Format Harus jpg dan png";
					header("Refresh:3;url=index.php?content=news");
				}
			}
			else
			{
				echo "Ukuran Gambar tidak boleh lebih Dari 5MB ";
				header("Refresh:3;url=index.php?content=news");
			}
		}
		else
		{
			echo 'Ada '.$error.' Error Gagal Upload';
			header("Refresh:3;url=index.php?content=news");
		}
	}

	elseif ($_GET['action'] == "hapusNews") 
	{
		$id = $_GET['id'];

		$sel = mysqli_query($koneksi,"select * from news where id='$id'");
		$x = mysqli_fetch_array($sel);

		$file_tujuan = 'upload/'.$x['image'];
		unlink("$file_tujuan");

		$stmt = $mysqli->prepare("delete from news where id=?");
		$stmt->bind_param("s",$id);
		if ($stmt->execute()) 
		{
			echo "Data Berhasil di Hapus";
			header("Refresh:3;url=index.php?content=news&contentNews=contentNews");
		}
		else
		{
			echo "Gagal Hapus Data News";
			header("Refresh:3;url=index.php?content=news&contentNews=contentNews");
		}
	}
	elseif ($_GET['action'] == "updateNews") 
	{
		$judul = $_POST['judul'];
		$desk = $_POST['desk'];
		$error = $_FILES['file']['error'];

		$id = $_POST['id'];

		$sel = mysqli_query($koneksi,"select * from news where id='$id'");
		$x = mysqli_fetch_array($sel);

		if ($error == 0) 
		{
			$ukuran_file = $_FILES['file']['size'];

			if ($ukuran_file <= 5000000) 
			{
				$file_tujuan = 'upload/'.$x['image'];
				unlink("$file_tujuan");


				$nama_file = $_FILES['file']['name'];
				$format = pathinfo($nama_file, PATHINFO_EXTENSION);

				if (($format == "jpg") or ($format == "png")) 
				{
					$file_asal = $_FILES['file']['tmp_name'];
					$file_tujuan = "upload/".$_FILES['file']['name'];
					$upload = move_uploaded_file($file_asal, $file_tujuan);

					$stmt = $mysqli->prepare("update news set judul=?, image=?, desk=? where id=?");
					$stmt->bind_param("ssss",$judul,$nama_file,$desk,$id);


					if ($upload == true and $stmt->execute()) 
					{
						echo "Berhasil Merubah Kontent News";
						header("Refresh:3;url=index.php?content=news&contentNews=contentNews");
					}
					else
					{
						echo "Gagal Merubah Kontent News";
						header("Refresh:3;url=index.php?content=news&contentNews=contentNews");
					}
				}
				else
				{
					echo "Format Harus jpg dan png";
					header("Refresh:3;url=index.php?content=news&contentNews=contentNews");
				}
			}
			else
			{
				echo "Ukuran Gambar tidak boleh lebih Dari 5MB ";
				header("Refresh:3;url=index.php?content=news&contentNews=contentNews");
			}
		}
		else
		{
			echo 'Ada '.$error.' Error Gagal Upload';
			header("Refresh:3;url=index.php?content=news&contentNews=contentNews");
		}
	}
	elseif ($_GET['action'] == "endTanya") 
	{
		$id = $_POST['id'];

		$stmt = $mysqli->prepare("update tanya set status=1 where id=?");
		$stmt->bind_param("s",$id);
		if ($stmt->execute()) 
		{	

			header("Refresh:3;url=index.php?content=contactUs");
		}
		else
		{
			echo "Error";
			header("Refresh:3;url=index.php?content=contactUs");
		}
	}
	elseif ($_GET['action'] == "laporan") 
	{
		$pelapor = $_POST['pelapor'];
		$alamat = $_POST['alamat'];
		$noTelp = $_POST['noTelp'];

		$jam = date('h:i:s');
		$tanggal = date('d-M-Y');

		$error = $_FILES['file']['error'];

		if ($error == 0) 
		{
			$ukuran_file = $_FILES['file']['size'];

			if ($ukuran_file <= 5000000) 
			{
				$nama_file = $_FILES['file']['name'];
				$format = pathinfo($nama_file, PATHINFO_EXTENSION);

				if (($format == "jpg") or ($format == "png")) 
				{
					$file_asal = $_FILES['file']['tmp_name'];
					$file_tujuan = "gambarLaporan/".$_FILES['file']['name'];
					$upload = move_uploaded_file($file_asal, $file_tujuan);

					$stmt = $mysqli->prepare("insert into lapor (namaPelapor,noTelp,alamat,image,jam,tanggal) value (?,?,?,?,?,?)");
					$stmt->bind_param("ssssss",$pelapor,$noTelp,$alamat,$nama_file,$jam,$tanggal);


					if ($upload == true and $stmt->execute()) 
					{
						header("Refresh:1;url=../frontend/index.php");
					}
					else
					{
						echo "Upload gagal";
						header("Refresh:3;url=../frontend/index.php");
					}
				}
				else
				{
					echo "Format Harus jpg dan png";
					header("Refresh:3;url=../frontend/index.php");
				}
			}
			else
			{
				echo "Ukuran Gambar tidak boleh lebih Dari 5MB ";
				header("Refresh:3;url=../frontend/index.php");
			}
		}
		else
		{
			echo 'Ada '.$error.' Error Gagal Upload';
			header("Refresh:3;url=../frontend/index.php");
		}
	}
	elseif ($_GET['action'] == "endLaporan") 
	{
		$id = $_POST['id'];

		$stmt = $mysqli->prepare("update lapor set status=1 where id=?");
		$stmt->bind_param("s",$id);
		if ($stmt->execute()) 
		{	

			header("Refresh:2;url=index.php?content=listPelaporan");
		}
		else
		{
			echo "Error";
			header("Refresh:3;url=index.php?content=listPelaporan");
		}
	}
	else if ($_GET['action'] ="tentangKami") 
	{
		$tentangKami = $_POST['tentangKami'];

		$stmt = $mysqli->prepare("update tentangKami set tentangKami=? where id=1");
		$stmt->bind_param("s",$tentangKami);
		if ($stmt->execute()) 
		{
			echo "Data Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=tentangKami");
		}
		else
		{
			echo "Data Tidak Berhasil di Simpan";
			header("Refresh:2;url=index.php?content=tentangKami");
		}
	}
 ?>