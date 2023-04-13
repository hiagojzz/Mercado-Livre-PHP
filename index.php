<?php include('config/database_config.php');?>
<?php include('config/token.php');?>
<?php
    if($code == ''){
        include('config/permissao.php');
    } else{
        echo 'Tudo certo!<br>';
        echo 'ID: '.$id_loja.'<br>';
        echo 'Usuario: '.$first_name.'<br>';
    }
    
?>




