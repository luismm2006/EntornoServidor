<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
    $color = "";
    $genero = "";
    $errores = [];
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["select"])) {
            $errores["color"] = "Selecciona un color";
        } else {
        $color = $_POST["select"];
        }
        if (empty($_POST["radio"])) {
            $errores["genero"] = "Selecciona un género";
        } else {
            $genero = $_POST["radio"];
        }
        if (empty($errores)) {
            echo "Resumen:" . "<br>";
            echo "Color favorito: $color"  . "<br>";
            echo "Género: $genero"  . "<br>";
        }
    }
?>
<form class="p-5" method="POST">
  <div class="form-group row">
    <label class="col-4 col-form-label" for="select">Color favorito</label> 
    <div class="col-5">
      <select id="select" name="select" class="custom-select">
        <option value=""></option>
        <option value="Rojo" <?php ($color == "Rojo")?"selected":""?>>Rojo</option>
        <option value="Verde" <?php ($color == "Verde")?"selected":""?>>Verde</option>
        <option value="Azul" <?php ($color == "Azul")?"selected":""?>>Azul</option>
        <option value="Amarillo" <?php ($color == "Amarillo")?"selected":""?>>Amarillo</option>
      </select>
        <?php if(isset($errores["color"])) echo $errores["color"]?>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Género</label> 
    <div class="col-8">
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="Hombre" <?php ($genero == "Hombre")?"checked":""?>> 
          <label for="radio_0" class="custom-control-label">Hombre</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Mujer" <?php ($genero == "Mujer")?"checked":""?>> 
          <label for="radio_1" class="custom-control-label">Mujer</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="Otro" <?php ($genero == "Otro")?"checked":""?>> 
          <label for="radio_2" class="custom-control-label">Otro</label>
        </div>
      </div>
        <?php if(isset($errores["genero"])) echo $errores["genero"]?>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
