<script src='https://www.google.com/recaptcha/api.js'></script>

<span class="border">
                <form class="form-css" action="/feedback/send-feedback" method="post">
                    <h1 class="h3 mb-3 font-weight-normal">Send feedback</h1>

                    <label for="inputName" class="sr-only">Name*</label>
                    <input type="text" id="inputName" class="form-control" placeholder="Name*" name="name" required autofocus>

                    <label for="inputEmail" class="sr-only">Email*</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email*" name="email" required>

                    <label for="inputMessage" class="sr-only">Your message*</label>
                    <textarea id="inputMessage" class="form-control" placeholder="Your message*" name="message" required></textarea>

                     <button class="btn btn-lg btn-primary btn-block" type="submit" name="send-feed">Send</button>

                    <div class="g-recaptcha" data-sitekey="6LeoXoUUAAAAAKKfSE1OTg1J0xRJ8fQHCX4iVq_v"></div>

                    <?php if (isset($result_msg))
                    {
                        echo (array_key_exists('error', $result_msg)) ? "<p class='error-msg'>{$result_msg['error']}</p>" : "<p class='success-msg'>{$result_msg['success']}</p>"; // output query result
                    }
                    ?>
                </form>
        </span>











<!--<div class="container">-->
<!--    <h2 class="text-center">Contac Form</h2>-->
<!--    <div class="row justify-content-center">-->
<!--        <div class="col-12 col-md-8 col-lg-6 pb-5">-->
<!---->
<!---->
            <!--Form with header-->
<!---->
<!--            <form action="mail.php" method="post">-->
<!--                <div class="card border-primary rounded-0">-->
<!--                    <div class="card-header p-0">-->
<!--                        <div class="bg-info text-white text-center py-2">-->
<!--                            <h3><i class="fa fa-envelope"></i> Contactanos</h3>-->
<!--                            <p class="m-0">Con gusto te ayudaremos</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="card-body p-3">-->
<!---->
                        <!--Body-->
<!--                        <div class="form-group">-->
<!--                            <div class="input-group mb-2">-->
<!--                                <input type="text" class="form-control" id="nombre" name="name" placeholder="Name" required>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <div class="input-group mb-2">-->
<!--                                <input type="email" class="form-control" id="nombre" name="email" placeholder="email" required>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <div class="input-group mb-2">-->
<!--                                <textarea class="form-control" placeholder="Message" name="message" required></textarea>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="text-center">-->
<!--                            <input type="submit" value="Send" class="btn btn-info btn-block rounded-0 py-2">-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </form>-->
            <!--Form with header-->
<!---->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->