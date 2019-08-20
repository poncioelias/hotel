<div class="container">

<form method="post" action="<?=base_url()?>register_guest">

<fieldset><legend><h3><strong>New Guests</strong></h3></legend>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputFirstName">First Name</label>
      <input type="text" class="form-control" id="inputFirstName" name="inputFirstName" required>
    </div>
    <div class="form-group col-md-6">
        <label for="inputLastName">Last Name</label>
      <input type="text" class="form-control" id="inputLastName" name="inputLastName" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputEmail">Email</label>
        <input type="text" class="form-control" id="inputEmail" name="inputEmail" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputPhone">Phone</label>
      <input type="text" class="form-control" id="inputPhone" name="inputPhone" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputSex">Sex</label>
      <select class="form-control" id="inputSex" name="inputSex" required>
        <option value="">Choose...</option>
        <option value="Male">Male</option>
        <option value="Famale">Female</option>
      </select>    


    </div>
  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
       <label for="inputCountry">Country</label>
      <input type="text" class="form-control" id="inputCountry" name="inputCountry" required>
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="inputCity" required>
    </div>

  </div>

  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Apartment, studio, or floor" required>
  </div>

  <div class="form-group">
    <label for="inputGroup">Group</label>
    <select class="form-control" id="inputGroup" name="inputGroup" required>
        <option value="">Choose...</option>
        <option value="1">Trusted</option>
        <option value="2">Previledged</option>
        <option value="3">New</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
  </fieldset>
</form>

</div>