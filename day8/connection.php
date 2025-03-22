<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=ariana", "root", "");

    
    $username = "TESTI123";
    $password = password_hash("mypassword", PASSWORD_DEFAULT);
  //     $email = "test@gmail.com";
   // $sql = "INSERT INTO user(username, password) VALUES ('$username', '$password')";

//     $sql= "ALTER table usrs ADD emali VARCHAR(255)"; 

//     $sql = "ALTER TABLE uesrs DROP COLUMN email"; 

     $sql = "DROP TABLE PRODUCTS"; 

        $pdo->exec($sql);

    echo "new record created succsessefully";
}catch(DOExection $e){
    echo $e->getMessage();
}




?>