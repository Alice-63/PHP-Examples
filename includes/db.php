<?php


try{
$db= new PDO("mysql:host=localhost;dbname=personel;charset=utf8","root","");
}catch(PDOException $e){
    echo $e->getMessage();
};

$row=$db->query("SELECT * FROM personel", PDO::FETCH_ASSOC);

 if( $row->rowCount()>0){

    foreach($rows as $row)
    {
        print_r($row);
        echo "<hr>";
    }
 };

?>