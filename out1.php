<html>
	<head>
		<style>
			div{
				background-color:white;
				border-style:solid;
				border-color:grey;
				border-width:5px;
				padding:8px;
				margin:auto;
				margin-top:150px;
				width:350px;
				text-align:center;
			} 
		</style>

	<title> Tabel Matematika </title></head>
	<body background = "c7.jpg">
		<div>
		<FORM ACTION="out2.php" METHOD="POST" NAME="Pilih">
			<font face = "Gabriola" size = "7" color="black">Selamat Datang<br></font>
			<font face = "Gabriola" size = "5" color="black"><b>TABEL MATEMATIKA</b><br></font>
			<font face = "WildWest" size = "3" color="black">
			<input type="radio" name="operasi" value="Penjumlahan" >Tabel Penjumlahan<br>
			<input type="radio" name="operasi" value="Pengurangan" >Tabel Pengurangan<br>
			<input type="radio" name="operasi" value="Perkalian" >Tabel Perkalian<br>
			<input type="radio" name="operasi" value="Pembagian" >Tabel Pembagian<br><br>
			<input type="submit" name="Pilih" value="Pilih">
			</font>
		</FORM>
		</div>
	</body>
</html>