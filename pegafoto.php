<?php
include('menu.php');
?>
<main>

<div class="container">
<h1>Cadastro de Carros</h1>
<hr>


<form action="upload.php" method="post" enctype="multipart/form-data">
   
    <div class="row">

        <div class="col">

            <div class="mb-3">

                <label for="exampleInputEmail1" class="form-label">Carros</label>

                <input type="text" class="form-control" required name="carro" : null ?><br>

             </div>      

        </div>

    <div class="col">

        <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Foto</label>

            <input type="file" class="form-control" required name="fileToUpload" id="fileToUpload" : null ?><br>

        </div>

    </div>
    
    <div class="row">

        <div class="col">

        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Preço</label>

             <input type="text" class="form-control" required name="preco": null ?><br>

               

        </div>

    </div>

    <div class="col">

        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Quantidade</label>

             <input type="text" class="form-control" required name="qtd": null ?><br>

               
 

        </div>

    </div>    

    <div class="row">

      <div class="col">

        <div class="mb-3">        

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </div>


   

</form>    

    <div class="col">

      <div class="mb-3">

       <a href="listar.php"  class="btn btn-outline-primary">volta</a>

    </div>   




</main>

<?php
include('rodape.php');
?>