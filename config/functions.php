<?php
    require_once "config.php";



    function resultToArray($result){
        $array = array();
        while(($row = $result->fetch_assoc()) != false) //fetch assoc = формировать ассоциативный массив
            $array[] = $row;
        return $array;
    }



    //овощи
    function getVegetables($limit, $id = false, $vegetable = false){
        try{
            global $mysqli;
            connectDB();
            $where = 1;
            if($id)
                $where = "`id` = ".$id;
            if($vegetable == false)
                $vegetable = "Список";
            $result = $mysqli->query("SELECT * FROM `vegetables` WHERE 1 ORDER BY `id` ASC LIMIT $limit");
            if($mysqli->error){
                echo 'Ошибка ' . $mysqli->error;
            }
            closeDB();
            return resultToArray($result);   
        }catch(Exception $a){
            echo 'Ошибка входа в базу данных';
            print_r($a);
        }
    }



?>