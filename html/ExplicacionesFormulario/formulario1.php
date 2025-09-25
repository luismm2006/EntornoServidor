<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        if (isset($_GET["name"]) && isset($_GET["surname"])){
            echo "hola " . $_GET["name"] . " " . $_GET["surname"];
        }
    }
?>
<form method="GET" action="formulario1.php">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Name</label> 
    <div class="col-8">
      <input id="name" name="name" placeholder="Introduce tu nombre" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="surname" class="col-4 col-form-label">Apellidos</label> 
    <div class="col-8">
      <input id="surname" name="surname" placeholder="Apellidos" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
