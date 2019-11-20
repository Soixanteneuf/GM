<?php
$mysqli = new mysqli('localhost', 'root', '', 'stock');
$link = mysqli_connect("localhost", "root", "", "stock");
$query2 = $mysqli->query("SELECT * FROM `data`");
while ($array2[] = $query2->fetch_object());
array_pop($array2);
$ops = $_POST["ops"];
$ops =explode(" ",$ops);

if($array2[0]->current>$array2[2]->current){
    $x=$array2[0]->storage-1;
    $n=$array2[2]->storage-1;
}else{
    $x=$array2[2]->storage-1;
    $n=$array2[0]->storage-1;
}
if($ops[0]==="-"){
    if($ops[1]<=($array2[1]->current-$array2[1]->minimum)){
        
        $quer = $array2[1]->current-$ops[1];
        $sql = "UPDATE `data` SET `current` = '$quer' WHERE `data`.`storage` = '2'";
        
        if(mysqli_query($link, $sql)){
            echo "Records added successfully.";
        }else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        
    }else if($ops[1]>($array2[1]->current-$array2[1]->minimum)){
        $y=abs($array2[1]->current-$ops[1]);
        $quer = $array2[1]->minimum;
        $quer2 = $array2[$x]->current-($array2[1]->minimum-$y);
        $quer3 = $x+1;
        $sql = "UPDATE `data` SET `current` = '$quer' WHERE `data`.`storage` = '2'";
        $sql2 = "UPDATE `data` SET `current` = '$quer2' WHERE `data`.`storage` = '$quer3'";

        if(mysqli_query($link, $sql)&&mysqli_query($link, $sql2)){
            echo "Records added successfully.";
        }else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }        
    }

}else if($ops[0]==="+"){
    if(($ops[1]+$array2[1]->current)<=$array2[1]->maximum){
        $quer = $ops[1]+$array2[1]->current;
        $sql = "UPDATE `data` SET `current` = '$quer' WHERE `data`.`storage` = '2'";
        
        if(mysqli_query($link, $sql)){
            echo "Records added successfully.";
        }else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

        
    }else if(($ops[1]+$array2[1]->current)>$array2[1]->maximum){
        $y=abs(($array2[1]->current+$ops[1])-$array2[1]->maximum);
        $quer = $array2[1]->maximum;
        $quer2 = $array2[$n]->current+$y;
        $quer3 = $n+1;
        $sql = "UPDATE `data` SET `current` = '$quer' WHERE `data`.`storage` = '2'";
        $sql2 = "UPDATE `data` SET `current` = '$quer2' WHERE `data`.`storage` = '$quer3'";
        
        if(mysqli_query($link, $sql)&&mysqli_query($link, $sql2)){
            echo "Records added successfully.";
        }else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        } 

    }
}else{
    echo "WRONG OPERATION";
}
  header('Location: index.php');     

?>