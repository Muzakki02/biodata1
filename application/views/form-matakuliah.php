<!DOCTYPE html>
<html>
<head>
	<title>Membuat form validation dengan Codeigniter</title>
</head>
<body>
	<center>
	<h1>Membuat Form Validation dengan CodeIgniter</h1>
	<?php echo validation_errors(); ?>
	<?php echo form_open('Matakuliah/cetak'); ?>
		<label>Kode Matakuliah</label><br/>
		<input type="text" name="kode"><br/>
		<label>Nama Matakuliah</label><br/>
		<input type="text" name="namaMTK"><br/>
		<label>Kelas</label><br/>
		<input type="text" name="kelas"><br/>
		<label>Nama</label><br/>
		<input type="text" name="nama"><br/>
		<input type="submit" value="Simpan">
	</form>
</body>
</html>