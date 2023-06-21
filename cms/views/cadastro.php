<?php include("blades/header.php"); 
include("../models/conexao.php"); ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<div class="container pt-2 mt-5 p-3 rounded-2 shadow" id="main">

<form action="../controllers/cadastrar.php"  enctype="multipart/form-data" method="post">
<h3 class="p-3 tt" > Cadastrar</h3>

    <label class="form-label tt">Título Da Noticia</label>
    <input class="form-control" type="text" name="blogTitulo"> <br>

    <label class="form-label tt ">Conteúdo</label>
    <textarea name="blogCorpo" class="form-control" cols="30" rows="10"></textarea>

    <label class="form-date tt" >Data</label> <br>
    <input type="date" name="blogData"> <br>
    
    <input class="mt-3"type="file" name="arquivo[]" multiple="multiple"/>
    <br>
    <input class="btn mt-3 ms-1" type="submit" value="Cadastrar">
    
</form>
</div>
<?php include("blades/footer.php"); ?>