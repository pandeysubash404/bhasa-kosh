<?php include("header.php"); ?>

<form class="p-5">
  <div class="form-row cl-1">
    <div class="form-group col-md-4">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="First Name">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Last Name</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress">
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress2">Phone number</label>
    <input type="text" class="form-control" id="inputAddress2">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Email</label>
      <input type="email" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Language</label>
      <select id="inputState" class="form-control">
               <option value="en">English</option>
                <option value="ne">Maithali</option>
                <option value="mn">Nepali</option>
                <option value="newa">Nepal Bhasa (Newar)</option>
                <option value="magar">Magar</option>
                <option value="limbu">Limbu</option>
                <option value="tmg">Tamang</option>
                <option value="rai">Rai(Kiranti)</option>
                <option value="sherapa">Sherpa</option>
                <!-- Add more language options as needed -->
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Share your short expriences</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include("footer.php"); ?>