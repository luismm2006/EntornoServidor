<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_GET["name"]) && !empty($_GET["name"])){
            echo "<div><label class=\"custom-control-label\"> Tu nombre es: " . $_GET["name"] . "</label></div>";
        }
        if (isset($_GET["checkbox"])) {
            foreach ($_GET["checkbox"] as $ele) {
                echo $ele . "<br>";
            }
        }
        
    }
    //if($_SERVER["REQUEST_METHOD"] == "POST"){
    //    if(isset($_POST["name"]) && !empty($_POST["name"]))
    //    echo "<div><label class=\"custom-control-label\"> Tu nombre es: " . $_POST["name"] . "</label></div>";
    //}
?>
<form>
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Name</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="name" name="name" placeholder="Introduce tu nombre" type="text" class="form-control" value="<?php if(isset($_GET["name"])) echo $_GET["name"] ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Checkboxes</label> 
    <div class="col-8">
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="checkbox[]" id="checkbox_0" type="checkbox" class="custom-control-input" value="Informática" <?php if(isset($_GET["checkbox"]) && in_array("Informática", $_GET["checkbox"])) echo "checked"; ?>> 
          <label for="checkbox_0" class="custom-control-label">Informática</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="checkbox[]" id="checkbox_1" type="checkbox" class="custom-control-input" value="Juegos" <?php if(isset($_GET["checkbox"]) && in_array("Juegos", $_GET["checkbox"])) echo "checked"; ?>> 
          <label for="checkbox_1" class="custom-control-label">Juegos</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="checkbox[]" id="checkbox_2" type="checkbox" class="custom-control-input" value="Deportes" <?php if(isset($_GET["checkbox"]) && in_array("Deportes", $_GET["checkbox"])) echo "checked"; ?>> 
          <label for="checkbox_2" class="custom-control-label">Deportes</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="checkbox[]" id="checkbox_3" type="checkbox" class="custom-control-input" value="Bailes" <?php if(isset($_GET["checkbox"]) && in_array("Bailes", $_GET["checkbox"])) echo "checked"; ?>> 
          <label for="checkbox_3" class="custom-control-label">Bailes</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="checkbox[]" id="checkbox_4" type="checkbox" class="custom-control-input" value="Alcohol" <?php if(isset($_GET["checkbox"]) && in_array("Alcohol", $_GET["checkbox"])) echo "checked"; ?>> 
          <label for="checkbox_4" class="custom-control-label">Alcohol</label>
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>