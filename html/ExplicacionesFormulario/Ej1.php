<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
$errorNombre = "";
$errorEdad = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!isset($_POST["name"]) || empty($_POST["name"]) ){
            $errorNombre = "<style> p{ color: red}</style>"."<p>Error con el nombre</p>";
        }
        if(!isset($_POST["age"]) || empty($_POST["age"]) || $_POST["age"]<0 || $_POST["age"]>120){
             $errorEdad = "<style> p{ color: red}</style>"."<p>Error con la edad</p>";
        }
 
        if(empty($errorNombre) && empty($errorEdad)){
            echo "Bienvenido " . $_POST["name"] . " tu edad es " . $_POST["age"];
        }     

        
    }
?>
<form class="p-5" method="POST">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nombre</label> 
    <div class="col-5">
      <input id="name" name="name" placeholder="Introduce tu nombre" type="text" class="form-control" value = "<?php if(!empty($errorNombre) || !empty($errorEdad)) echo $_POST["name"]?>">
      <?php echo $errorNombre ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="age" class="col-4 col-form-label">Edad</label> 
    <div class="col-5">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="age" name="age" placeholder="Introduce tu edad" type="number" class="form-control" value = "<?php if(!empty($errorNombre) || !empty($errorEdad)) echo $_POST["age"]?>">
      </div>
        <?php echo $errorEdad?>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>