<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <?php
            if (isset($data)) echo $data;
            else echo '<h2 class="no-access">No access rights! You should <a href="/account/login">Log in</a> or <a href="/account/register">Sign up</a>.</h2>';
            ?>
        </div>
    </div>
</div>
