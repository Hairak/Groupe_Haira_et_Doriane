<?php
?>

<!DOCTYPE html>
<html lang= "fr">
<head>
    <meta charset = "UTF-8">
    <title> Idiomas. </title>
    <link rel= "stylesheet" href= "style.css"> 
</head>
<body>
    <div class= "full-page">
        <div class= "navbar">
          <div> 
            <a href= 'index.html'> <b> Idiomas. </b></a>
          </div>
          <nav>
              <ul id= 'MenuItems'>
                  <li><a href='#'> Nouveautés</a></li>
                  <li><a href='#'> Streamer </a></li>
                  <li><button class= 'loginbtn' onclick="document.getElementById('login-form').style.display='block'" style= "width:auto;"> Me connecter </button>
                  </li>
              </ul>
          </nav>
        </div>
      <div id='login-form'class='login-page'>
<br>
        <p class='textpresent'> Bienvenue sur <b> Idiomas</b>! </p>
        <br> 
          <div class="form-box">
              <div class='button-box'>
                  <div id='btn'></div>
                  <button type='button'onclick='login()'class='toggle-btn'> Connexion </button>
                  <button type='button'onclick='register()'class='toggle-btn'> Inscription </button>
              </div>
              <form id='login' class='input-group-login'>
                  <input type='text'class='input-field'placeholder='Votre e-mail'required >
      <input type='password'class='input-field'placeholder='Votre mot de passe' required>
      <input type='checkbox'class='check-box'><span> Sauvegarder le mot de passe </span>
      <button type='submit'class='submit-btn'>Se connecter</button>
   </form>
   <form id='register' class='input-group-register'>
       <input type='text'class='input-field'placeholder=' Votre prénom' required>
       <input type='text'class='input-field'placeholder=' Votre nom ' required>
       <input type='email'class='input-field'placeholder='Votre e-mail' required>
       <input type='password'class='input-field'placeholder='Votre mot de passe' required>
       <input type='password'class='input-field'placeholder='Confirmation de votre mot de passe'  required>
       <input type='checkbox'class='check-box'><span>J'accepte les conditions générales d'utilisation</span>
                  <button type='submit'class='submit-btn'>S'inscrire</button>
         </form>
          </div>
      </div>
    </div>
    <script>
      var x=document.getElementById('login');
  var y=document.getElementById('register');
  var z=document.getElementById('btn');
  function register()
  {
    x.style.left='-400px';
    y.style.left='50px';
    z.style.left='110px';
  }
  function login()
  {
    x.style.left='50px';
    y.style.left='450px';
    z.style.left='0px';
  }
</script>
<script>
      var modal = document.getElementById('login-form');
      window.onclick = function(event) 
      {
          if (event.target == modal) 
          {
              modal.style.display = "none";
          }
      }
  </script>
</body>
</html>
