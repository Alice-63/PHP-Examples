<?php


try{
$db= new PDO("mysql:host=localhost;dbname=personel;charset=utf8","root","");
}catch(PDOException $e){
    echo $e->getMessage();
};

$row=$db->query("SELECT * FROM personel", PDO::FETCH_ASSOC);

foreach ($row as $rows ) {
  
    echo "Personelin Adi: ". $rows["personelAdi"]."<br>";
    echo "Personelin Soyadi: ". $rows["personelSoyadi"]."<br>";
 
}


 

?>