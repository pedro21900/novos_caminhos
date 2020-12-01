<?php
//phpinfo();

$pdo = null;

try {
    $pdo = new PDO('mysql:host=mysql;dbname=novos_caminhos', 'root', 'root');
    $dados = $pdo->query("Select * from CUSTOMERS where id=2");
    foreach ($dados as $key){
         //print_r($key);
        echo "<br /> O aluno ".$key[1]." Tem ".$key[5]." na conta <br />";
    }
        //print_r($key);
    
} catch (PDOException $e) {
    print $e->getMessage();
    die();
}

var_dump($pdo);