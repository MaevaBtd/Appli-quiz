<?php include __DIR__.'/layout/header.php' ?>
<form action="<?=route('signupPost')?>" method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">First name</label>
      <input name='firstname' type="text" class="form-control " id="validationServer01" placeholder="First name"  >
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Last name</label>
      <input name='lastname' type="text" class="form-control " id="validationServer02" placeholder="Last name"  >
     
    </div>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Saisissez votre adresse email</label>
    <input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Votre email sera partagé avec nos sites partenaires.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Confirmez votre adresse email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Votre email sera partagé avec nos sites partenaires.</small>
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Entrez votre mot de passe</label>
    <input name='password' type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirmez votre mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button class="btn btn-primary" type="submit" onmouseenter="playAudio()" onmouseout="stopAudio()">Trololo</button>
  <audio id="audioID">
  <source src="https://ia800700.us.archive.org/27/items/TrololoRingtone/Trololo.mp3" type="audio/mpeg">
</audio>
 <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" >
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

  <!-- //////////////////////////////////// -->
  


  <!-- //////////////////////////////////// -->


  <html>
<head>
  <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
</head>
<body>
  <div id="my-signin2"></div>
  <script>
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>

  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
</body>
</html>

<?php include __DIR__.'/layout/footer.php' ?>