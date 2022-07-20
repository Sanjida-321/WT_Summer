<?php

    include("../model/mydb.php");
    session_start();
    $result="";
    $registrationError = "";
    $language="";
   
    if(isset($_REQUEST["java"]) || isset($_REQUEST["php"]) || isset($_REQUEST["cpp"])){

        if(isset($_REQUEST["java"]) && isset($_REQUEST["php"])){

            $language =  $_REQUEST["java"] . "," . $_REQUEST["php"];

        }

        elseif(isset($_REQUEST["php"]) && isset($_REQUEST["cpp"])){

            $language = $_REQUEST["php"] . "," . $_REQUEST["cpp"];

        }

        elseif(isset($_REQUEST["java"]) && isset($_REQUEST["cpp"])){

            $language = $_REQUEST["java"] . "," . $_REQUEST["cpp"];

        }

        elseif(isset($_REQUEST["java"])){

            $language = $_REQUEST["java"];

        }

        elseif(isset($_REQUEST["php"])){

            $language = $_REQUEST["php"];

        }

        else{

            $language = $_REQUEST["cpp"];

        }

    }
    $conn= new db();
    $connectionObject=$conn->openConn();
    $result=$conn->showAll($connectionObject);
if($result->num_rows > 0){
    $results=$result;
}
    if(isset($_POST['registraion'])){
        $conn = new db();
        $connectionObject = $conn->openConn();

        $registerUser = $conn->CheckUser($connectionObject, "employee", $_REQUEST["fname"] , $_REQUEST["lname"] ,$_REQUEST["age"] ,
        $_REQUEST["designation"] ,$language ,$_REQUEST["email"] , $_REQUEST["password"] , $_FILES["myfile"]["name"]);

        if($registerUser){
            $registrationError = 'Registraion Successful'; 
        }
        else{
            $registrationError = 'Registraion Unsuccessful';
        }
       

}
    $conn->closeConnection($connectionObject);
    
?>