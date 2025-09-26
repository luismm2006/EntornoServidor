<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
$errorVacio = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!isset($_POST["checkbox"]) && empty($_POST["checkbox"])){
            $errorVacio = "Selecciona alguna opción";
        }
        else {
            foreach ($_POST["checkbox"] as $ele) {
                echo $ele . "<br>";
            }
        }
        
    }
?>
<form class="p-5" method="POST">
  <div class="form-group row">
    <label class="col-4 col-form-label">Checkboxes</label> 
    <div class="col-8">
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="checkbox[]" id="checkbox_0" type="checkbox" class="custom-control-input" value="Lectura" <?php if(isset($_POST["checkbox"]) && in_array("Lectura", $_POST["checkbox"])) echo "checked"; ?>> 
          <label for="checkbox_0" class="custom-control-label">Lectura</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="checkbox[]" id="checkbox_1" type="checkbox" class="custom-control-input" value="Deporte" <?php if(isset($_POST["checkbox"]) && in_array("Deporte", $_POST["checkbox"])) echo "checked"; ?>> 
          <label for="checkbox_1" class="custom-control-label">Deporte</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="checkbox[]" id="checkbox_2" type="checkbox" class="custom-control-input" value="Música" <?php if(isset($_POST["checkbox"]) && in_array("Música", $_POST["checkbox"])) echo "checked"; ?>> 
          <label for="checkbox_2" class="custom-control-label">Música</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="checkbox[]" id="checkbox_3" type="checkbox" class="custom-control-input" value="Viajar" <?php if(isset($_POST["checkbox"]) && in_array("Viajar", $_POST["checkbox"])) echo "checked"; ?>> 
          <label for="checkbox_3" class="custom-control-label">Viajar</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="checkbox[]" id="checkbox_4" type="checkbox" class="custom-control-input" value="Cocina" <?php if(isset($_POST["checkbox"]) && in_array("Cocina", $_POST["checkbox"])) echo "checked"; ?>> 
          <label for="checkbox_4" class="custom-control-label">Cocina</label>
        </div>
      </div>
      <?php echo $errorVacio ?>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>