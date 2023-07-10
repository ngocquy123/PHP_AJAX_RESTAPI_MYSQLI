<?php
     $emp = [
        [1,"Krishana","Manager",50000],
        [2,"Salman","Salesman",20000],
        [3,"Mohan","Computer Operator",12000],
        [4,"Amir","Driver",5000]
        ];
        foreach($emp as list($id,$name,$desginer,$price)){
            echo "$id $name $desginer $price".'<br>' ; 
        }
?>