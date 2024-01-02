
<?php

require_once '../includes/DbOperations.php';

if(isset($_GET['Pass'])){
    if($_GET['Pass'] == "Password"){
        echo("Password verified\n");
        echo ("START\n");
        echo ("Points Added\n");
        $db = new DbOperations();
        $result = $db->resetTokens("100");
        $result1 = $db->resetLogin("0");
        
    }else{
        echo("wrong Password\n");
    }
}else{
    echo("INVALID OPERATION");
}

?>
