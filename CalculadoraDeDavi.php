<!DOCTYPE html>
<html lang="en">
<?php
   error_reporting(E_ERROR | E_PARSE);
   if(isset($_POST['peso'])){
    $peso = $_POST['peso'];
    }
    if(isset($_POST['altura'])){
    $altura = $_POST['altura'];
    }
    if(isset($_POST['idade'])){
    $idade = $_POST['idade'];
    }
    if(isset($_POST['sexo'])){
    $sexo = $_POST['sexo'];
    }
    if(isset($_POST['idade'])&&isset($_POST['peso'])&&isset($_POST['altura'])&&isset($_POST['sexo'])){
        $agua= $peso*35;
        $aguaNecessaria = "Água necessária:$agua ML <br>";
    
        switch($sexo){
            case 1:
                $calorias= 655.1 + (9.5*$peso) + (1.8*$altura)-(4.7*$idade);
                    
                    
                $CaloriasNecessarias = "Calorias necessárias:$calorias";
                    break;
            case 0:
                $calorias=  66.5 +(13.8*$peso) + (5*$altura) - (6.8*$idade);       
                $CaloriasNecessarias = "calorias necessárias:$calorias";
                    break;
        }   
    } 
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Saúde</title>
</head>

<div align="center">
<h1>
    Calculadora da Saúde
</h1>
<p>Essa calculadora serve para analisar suas necessidades de água <br>e calorias diarias</p>
</div>
<br>



<body>
<div class="container">
    <div class="row">
        <div class="col">
            <form method="POST">
                <label class="form-label">Idade</label>
                <input type="number" class="form-control" name="idade">
                <label class="form-label">Peso[KG]</label>
                <input type="text" class="form-control" name="peso">
                <label class="form-label">Altura[CM]</label>
                <input type="number" class="form-control" name="altura"><br>
                <label class="form-label">Sexo</label>
                <select name="sexo" id="Sexo" type="number" class="form-control">
                    <option value="">Escolha o Sexo</option>
                    <option value=1 class="form-label">Masculino</option>
                    <option  value=0 class="form-label">Feminino</option>
                </select><br>
                <button type="submit" class="form-control">Calcular</button></br>
                <div class="form-control">
                <p class="m-0  d-flex justify-content-center"><?=$aguaNecessaria?></p>
                <p class="m-0 d-flex justify-content-center"><?=$CaloriasNecessarias?></p>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<style>
  
    body{
        background-image: linear-gradient(45deg,white,gray);
   
    }
</style>