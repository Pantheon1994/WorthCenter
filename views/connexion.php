<div class="page-intro indigo white-text">
    <div class="container">
        <div class="row">
            <div class="col m12 s12">

                <h2>Connexion</h2>
                <h5>Connexion à votre espace privée !</h5>
            </div>
        </div>
    </div>
</div>
<?php
session_start();
if (isset($_SESSION['session'])) {
    ?>
<div class="card-panel red darken-3"><?php echo $_SESSION['session']; ?></div>
<?php
};
session_unset();
?>
<div class="container">
    <div class="row separator">
        <div class="row">
            <div class="col m12 s12">
                <p class="center-align">Utilisez le formulaire ci-dessous pour vous connecter au site.</p>

                <p class="center-align"><b>Pas encore inscrit ?</b> Créez un compte gratuitement depuis la page <a
                        class="indigo-text" href="inscription"><b>inscription</b></a>.</p>
            </div>
        </div>
        <form method="POST">
            <div class="row">
                <div class="input-field col s12">
                    <i class="mdi-content-mail prefix"></i>
                    <label for="email" class="validate">Email</label>
                    <input type="email" id="email" name="AdresseEmail" required>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="mdi-action-lock prefix"></i>
                    <label for="password" class="validate">Mot de passe</label>
                    <input type="password" id="password" name="Motdepasse" required>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <p class="left">
                        <a href="#" class="indigo-text">Mot de passe oublié?</a>
                    </p>

                    <p class="right">
                        <input type="checkbox" id="test5"/>
                        <label for="test5">Rester connecté(e)</label>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 center">
                    <button class="signup btn-large waves-effect waves-light indigo" name="connexion"><i
                            class="mdi-content-send left"></i>Connexion
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>