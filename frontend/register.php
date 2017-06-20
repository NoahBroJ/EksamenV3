<?php if (!isset($_GET['e'])) {$_GET['e'] = "";} ?>
<form id="register-form" action="../backend/addUser.php" method="POST">
    <input name="username" type="text" placeholder="Brugernavn">
    <input name="password" type="password" placeholder="Adgangskode">
    <input name="repassword" type="password" placeholder="Bekræft adgangskode">
    <input class="submit" type="submit" value="Registrér">
</form>

<?php if ($_GET['e'] == "rn") {echo "<small class='error'>Det brugernavn er allerede taget.</small>";} ?>
<?php if ($_GET['e'] == "rp") {echo "<small class='error'>De indtastede adganskoder matcher ikke.</small>";} ?>