<div class="container">
    <div class="row">
        <div class="col-lg-12 my-4">

        <?php // TESTING
        if (isset($data)) {
            $i = 0;
            while ($i < count($data)) {
                foreach ($data[$i] as $key => $value) {
                    echo $key . ': ' . $value . '<br>';
                }
                echo '<hr>';
                $i++;
            }
        }
        else echo '<h2 class="no-access">No access rights! You should <a href="/account/login">Log in</a> or <a href="/account/register">Sign up</a>.</h2>';
        ?>



        </div>
    </div>
</div>