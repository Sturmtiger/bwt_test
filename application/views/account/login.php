<?php if (!isset($_SESSION['email']) && !isset($_SESSION['name']) && !isset($_SESSION['surname'])):?>
    <span class="border">
    <form class="form-css" action="/account/login" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Authorize</h1>
        <label for="inputEmail" class="sr-only">Email address*</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>
        <label for="inputPassword1" class="sr-only">Password</label>
        <input type="password" id="inputPassword1" class="form-control" placeholder="Password" name="password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="authorize">Sign in</button>
        <?php if (isset($result_msg)) echo "<p class='error-msg'>$result_msg</p>";?>
    </form>
</span>
<?php
else:
    echo '<h2 class="no-access mt-4">You have already logged in!</h2>';
endif;
?>
