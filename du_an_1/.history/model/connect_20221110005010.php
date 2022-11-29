<?php
    
    function connect($x){
        $connect = new PDO("mysql:host=localhost;dbname=dkqt_shop;charset=utf8","root","");
        $query = $connect -> prepare($x);
        $query -> execute();
        return $query;
    }
    function getAll($x){
        $query = connect($x) -> fetchAll(); 
        return $query; 
    }
    function getOne($x){
        $query = connect($x) -> fetch(); 
        return $query;  
    }
    function add_type(){
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $sql = "INSERT INTO type (`type_name`) VALUES (N'$name')";
            connect($sql);
        }
    }
?>