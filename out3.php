<html>
	<head>
		<style>
			div{
				background-color:#333;
				border-style:solid;
				border-color:grey;
				padding:3px;
				margin:auto;
				margin-top:30px;
				text-align:center;
				width:650px;
				padding-align:center;
			} 
		</style>
	<title> Tabel Matematika </title></head>
	<body background = "c7.jpg">
		<div>
		<font face = "Lucida Handwriting" size ="6" color="white">
		<?php 
			if (isset($_POST['proses'])){
				$proses = $_POST['proses'];
				echo "Tabel $proses<br>";
				$ba=$_POST['baris'];
				$ko=$_POST['kolom'];
				if (($ba<0)||($ko<0)){
					echo "tidak dapat ditampilkan<br><br>";
					echo "^.^ baris dan kolom minimal 0 ^.^";
				}
		?>
		</div>
		<?php
				echo"<br>";
				echo '<table border = 5 cellpadding = 10 cellspacing = 3 align=center>';
				echo '<tr bgcolor="black" style="color: grey;">';
				switch ($proses) :
					case 'Penjumlahan' :{ echo '<th style="background:white;"> + </th>';break;}
					case 'Pengurangan' :{ echo '<th style="background:white;"> - </th>';break;}
					case 'Perkalian' :{ echo '<th style="background:white;"> X </th>';break;}
					case 'Pembagian' :{ echo '<th style="background:white;"> / </th>';break;}
				endswitch;
				for($j = 0; $j <=$ko; $j++){echo '<th><font color="white">'.$j.'</font></th>';}
				echo '</tr>';
				for($i = 0; $i <= $ba; $i++){
					echo '<tr>';
					echo '<th bgcolor=black style="color: white;">'.$i.'</th>';
					for($j = 0; $j <=$ko; $j++){
						switch ($proses) :
								case 'Penjumlahan' :$hasil = $j + $i; break;
								case 'Pengurangan' :$hasil = $j - $i; break;
								case 'Perkalian' :$hasil = $j * $i; break;
								case 'Pembagian' :$hasil = @($j / $i); break;
						endswitch;		
						if($i==$j){	
							echo '<td align = center style="background:white;">'.number_format($hasil, 2).'</td>';
						}else{
								echo '<td align = center style="background:grey;">'.number_format($hasil, 2).'</td>';
						}
					}
					echo '</tr>';
				}	
				echo '</table>';
			}
		?>
		<div>
		<a href="out1.php"><button><font face = "Lucida Handwriting" size ="4" color="#696969"> Kembali </button></a>
		<a href="TY.php"><button> Selesai </font></button></a>
		</font>
		</div>
</body>
</html>