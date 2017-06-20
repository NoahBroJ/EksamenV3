<?php if (!isset($_GET['e'])) {$_GET['e'] = "";} ?>
<form id="login-form" action="../backend/session.php" method="POST">
    <input name="username" type="text" placeholder="Brugernavn">
    <input name="password" type="password" placeholder="Adgangskode">
    <input class="submit" type="submit" value="Log ind">
</form>

<?php if ($_GET['e'] == "l") {echo "<small class='error'>De indtastede oplysninger er forkerte.</small>";} ?>