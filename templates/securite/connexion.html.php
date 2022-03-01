<?php
if (isset($_SESSION[KEY_ERRORS])) {
    $errors = $_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
}
?>
<div class="con-body">
    <div class="con-container">
        <div class="con-div-header">
            <div class="con-form-header">
                <h3>Login form</h3>
                <div></div> <!-- croix blan -->
            </div>
        </div>
        <form action="<?= WEBROOT ?>" class="con-form" id="con-form" method="POST">
            <input type="hidden" name="action" value="connexion">
            <input type="hidden" name="controller  " value="securite">
            <?php if (isset($errors['connexion'])) : ?>
                <p class="error"><?= $errors['connexion']  ?></p>
            <?php endif ?>

            <div class="form-control">
                <input type="text" id="login" name="login" placeholder="login">
                <i class="con-i-login"></i>
                <!-- <small style="color: red;">Error message</small> -->
                <?php if (isset($errors['login'])) : ?>
                    <p class="error"><?= $errors['login']  ?></p>
                <?php endif ?>
            </div>

            <div class="form-control">
                <input type="password" id="password" name="password" placeholder="password">
                <!-- <small style="color: red;">Error message</small> -->
                <i class="con-i-pwd"></i>
            </div>

            <?php if (isset($errors['password'])) : ?>
                <p class="error"><?= $errors['password']  ?></p>
            <?php endif ?>

            <div class="con-link">
                <button>Connexion</button>
                <a href="">S’inscrire pour jouer?</a>
            </div>
        </form>
    </div>