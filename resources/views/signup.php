<?php include __DIR__.'/layout/header.php' ?>
<form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">First name</label>
      <input type="text" class="form-control " id="validationServer01" placeholder="First name"  required>
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Last name</label>
      <input type="text" class="form-control " id="validationServer02" placeholder="Last name"  required>
     
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServerUsername">Username</label>
      <div class="input-group">
        
        <input type="text" class="form-control " id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
        
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Saisissez votre adresse email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Votre email sera partagé avec nos sites partenaires.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Confirmez votre adresse email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Votre email sera partagé avec nos sites partenaires.</small>
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Entrez votre mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirmez votre mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button class="btn btn-primary" type="submit">Trololo</button>
 <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
</form>
  <div class="trololo">
      <img src="https://media.giphy.com/media/3x1ZGSBZlwXcY/giphy.gif" alt="troll" class="trolo-img">
  </div>

<?php include __DIR__.'/layout/footer.php' ?>