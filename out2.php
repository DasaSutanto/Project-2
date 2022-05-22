<html>
	<head>
		<style>
			div{
				background-color:#333;
				border-style:solid;
				border-color:white;
				border-width:5px;
				padding:8px;
				margin:auto;
				margin-top:150px;
				width:450px;
				text-align:center;
			} 
		</style>
	<title>Tabel Matematika</title></head>
	<body background = "c7.jpg">
	<font face = "Lucida Handwriting" size ="6" color="white">
	<div>
		<?php
			if (isset($_POST['Pilih'])){
				$operasi = $_POST['operasi'];
				echo "Tabel $operasi<br><br>";	
			}	
		?>
		</font>
		<font face = "Bedrock" size ="4" color="white">
		<FORM ACTION="out3.php" METHOD="POST">
			Baris : <input type="number" name="baris"><br><br>
			Kolom : <input type="number" name="kolom"><br><br>
			<input type="submit" name="Tampilkan" value="Tampilkan">
			<input type="hidden" name="proses" value="<?php echo $operasi;?>">
		</FORM>	
		</font>	
	</div>
	</body>
</html>