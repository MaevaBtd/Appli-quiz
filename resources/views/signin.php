<?php include __DIR__.'/layout/header.php' ?>

<form>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Votre email sera partagé avec nos sites partenaires.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary" onmouseenter="playAudio()" onmouseout="stopAudio()">Never Gonna Give You Up</button>
  <audio id="audioID">
  <source src="https://ia800605.us.archive.org/8/items/NeverGonnaGiveYouUp/jocofullinterview41.mp3" type="audio/mpeg">
</audio>
</form>
<div class="rick-roll">
  <img src="https://media.giphy.com/media/Vuw9m5wXviFIQ/giphy.gif" class="ricky">
</div>
<?php include __DIR__.'/layout/footer.php' ?>