<?php


// try{
// $db= new PDO("mysql:host=localhost;dbname=person;charset=utf8","root","");
// }catch(PDOException $e){
//     echo $e->getMessage();
// };

// $row=$db->query("SELECT * FROM personel_list", PDO::FETCH_ASSOC);

// foreach ($row as $rows ) {
  
//     echo "Personelin Adi: ". $rows["first_name"]."<br>";
//     echo "Personelin Soyadi: ". $rows["last_name"]."<br>";
//     echo "<hr>";
 
// }

// $id=10;
// $rows=$db -> prepare("SELECT * FROM personel_list where id>:id");
// $rows-> execute(array("id"=>$id));

// $result= $rows->fetchAll(PDO::FETCH_ASSOC);

// print_r($result)



// foreach ($rows as $row ) {

//     print_r($row);
  
//     // echo "Personelin Adi: ". $row["first_name"]."<br>";
//     // echo "Personelin Soyadi: ". $row["last_name"]."<br>";
//     // echo "<hr>";
// }


try{
    $db=new PDO("mysql:host=localhost;dbname=person;charset=utf8","root","");
}catch(PDOException $e){
    echo $e->getMessage();
}

$insert=$db->prepare("INSERT INTO personel_list SET first_name=:first_name,last_name=:last_name");

$data=array(
    "first_name"=> "Ismail",
    "last_name"=> "Türüt"
);

$result=$insert->execute($data);

if($result){
    echo "Erfolg";
}
else{
    echo "unerfolg!";
}
 

?>