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



// try{
//     $db=new PDO("mysql:host=localhost;dbname=person;charset=utf8","root","");
// }catch(PDOException $e){
//     echo $e->getMessage();
// }

// $insert=$db->prepare("INSERT INTO personel_list SET first_name=:first_name,last_name=:last_name");

// $data=array(
//     "first_name"=> "Ismail",
//     "last_name"=> "Türüt"
// );

// $result=$insert->execute($data);

// if($result){
//     echo "Erfolg";
// }
// else{
//     echo "unerfolg!";
// }

// try{
// $db=new PDO("mysql:host=localhost;dbname=person;charset=utf8","root","");
// }catch(PDOExpection $e){

//     echo $e->getMessage();
// }

// $update=$db->prepare("UPDATE personel_list SET first_name=:first_name,last_name=:last_name where id=:id");

// $data=array("first_name"=>"Meryem","last_name"=>"Efe", "id"=>30);

// $result=$update->execute($data);


// try{
//     $db=new PDO("mysql:host=localhost;dbname=person;charset=utf8","root","");
// }catch(PDOException $e){
//     echo $e->getMessage();
// }

// $del=$db->prepare("DELETE FROM personel_list WHERE id=:id");

// $data=array("id"=>$id);

// $result=$del->execute($data);

$db=new PDO("mysql:host=localhost;dbname=person;charset=utf8","root","")



?>
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptates vero, culpa corporis, autem dicta possimus neque, quasi iure quisquam nostrum adipisci eveniet fugit amet commodi. Rerum laboriosam doloribus corrupti!