<?php
include("header.php");
?>
 <h1 class="subpage">Inscription</h1>
<form id="inscription">
    <div class="form">
    <label for="email" "> Mail:</label>
    <input type="email" name="email" class="text" "></div>
    <br>
    <div class="form">
    <label for="pseudo">Pseudo:</label>
    <input type="text" name="pseudo" class="text" >
    </div>
    <br>
    <div class="form">
    <label for="mot de passe">Mot de passe:</label>
    <input type="password" name="password" class="text" >
    </div>
    <br>
    <div class="form">
    <label for="confirm mot passe">Confirmation de mot de passe:</label>
    <input type="password" class="text" >

    </div>
    <input type="submit" class="submit">
</form>