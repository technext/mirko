<?php
// start a session
session_start();
  
// manipulate session variables
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: SignIn.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/styles/stepBar.css">
    <title>S'inscrire</title>
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6144c787d326717cb682075e/1ffqamr0s';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<body>
    <h2>Rejoingnez-nous</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="connection.php" method="post" >
			<h1>Créer un compte</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>Enregistrez-vous avec votre address email</span>
			<input type="email" name="username" placeholder="Email" required/>
			<input type="password" name="u_password" placeholder="Mot de passe" required/>
			<button type="submit" name="submit" value="submit">S'enregistrer</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="connection1.php" method="post" >
			<h1>Se connecter</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>Utiliser son compte</span>
			<input type="name" name="username" placeholder="Email" required/>
			<input type="password" name="u_password"  placeholder="Mot de passe" required/>
			<a href="#">J'ai oublier mon mot de passe ?</a>
			<button type="submit" name="submit" value="submit" >Se connecter</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bon retour !</h1>
				<p> Heureux de vous compter parmis nous!!!
                </p>
				<button class="ghost" id="signIn">Se connecter</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Bonjour!</h1>
				<p>Pour bénéficier de tout les avantages que nous proposons Utiliser vos informations pour 
                    vous enregistrer.</p>
				<button class="ghost" id="signUp">S'inscrire</button>
			</div>
		</div>
	</div>
</div>
 
    
 <script>
     const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
 </script>
</body>
</html>



