<?php

function faktorialial ($x) {
    $angka = 1;
    $faktorial = 1;
   
     while($angka <= $x) {
         $faktorial = $faktorial * $angka;
         $angka = $angka + 1;
        
     };

     
     return $faktorial;
};

echo faktorialial(5);

?>

<form method="post">
	<input type="number" name="faktorialial" required />
	<button type="submit" name="hitung">Hitung Angka</button>
</form>

<?php
if(isset($_POST["hitung"])) {
	$x = $_POST["faktorialial"];
	echo "Hasilnya adalah ".faktorialial($x);
};
?>