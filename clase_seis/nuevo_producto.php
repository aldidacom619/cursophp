<?php include 'cabecera.php'?>
<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
<form>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-8">
     <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group col-md-8">
     <label for="inputAddress">Address</label>
    <input type="number" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
  </div>
  

  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
  <div class="col-lg-2">
</div>
<?php include 'pie.php'?>