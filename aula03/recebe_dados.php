<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recebe dados</title>
</head>
<body>
    <?php
       $nome = htmlspecialchars($_POST['nome']);
       $email = $_POST['email'];
       $idade = $_POST['idade'];

        $ano_atual = date('Y');
        $ano = $ano_atual - $idade;

    ?>

    <p>o nome e:  <?php echo $nome?> </p>
    <p>o email e:  <?php echo $email?> </p>
    <p>o idade e:  <?php echo $idade?> </p>
    
    
    <p>  entao vc nasceu em  <?php echo $ano?></p>

              
    <?php    
    if ($idade >= 18 ) {
       echo"<p style='color: green'>vc e de maior   </p>";
    } else {
        echo "<p style='color: red'> vc e de menor </p>";
    }
    
    ?>

</body>
</html>