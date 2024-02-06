<?php include './php/header.php' ?>
<main class="bg-info" style="height: 100vh;">
    <div class="container-fluid h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-4 col-md-8 col-12 bg-white">
                <header class="text-center fs-2">Connexion</header>
                <form action="./php/traitement_connexion.php" method="post">
                    <div class="my-2">
                        <input type="email" name="email" placeholder="Email" required class="form-control rounded">
                    </div>
        
                    <div class="my-2">
                        <input type="password" name="mdp" placeholder="Password" required class="form-control rounded">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
        
                    <div class="my-2">
                        <a href="#" class="forgot-pass">Mot de passe oublié ?</a>
                    </div>
        
                    <div class="my-2">
                        <button type="submit" class="btn-info">Se connecter</button>
                    </div>
                </form>
                <a href="./index.php" class="link-underline-primary">Accueil</a>   
            </div>
        </div>
    </div>
</main>
</body>
</html>
