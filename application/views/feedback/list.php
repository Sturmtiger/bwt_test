<div class="container">
    <?php // TESTING
    if (isset($data)):
    foreach ($data as $item):?>
    <div class="row">
        <div class="offset-3 col-md-5 mt-5">
                <div class="feedlist">
                    <div><b>Message-ID:</b> <?= $item['id'] ;?></div>
                    <div><b>Name:</b> <?= $item['name'] ;?></div>
                    <div><b>Email:</b> <?= $item['email'] ;?></div>
                    <textarea readonly><?= $item['message'] ;?></textarea>
                </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php else:?>
                <h2 class="no-access mt-4">No access rights! You should <a href="/account/login">Log in</a> or <a href="/account/register">Sign up</a>.</h2>
        <?php endif; ?>
</div>