<script src="/application/views/layouts/js/feedback.js"></script> <!-- js validation -->
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

                     <button class="btn btn-lg btn-primary btn-block" type="submit" name="send-feed" onclick="return feedback_valid(this.form);">Send</button>

                    <div class="g-recaptcha" data-sitekey="6LeoXoUUAAAAAKKfSE1OTg1J0xRJ8fQHCX4iVq_v"></div>

                    <?php if (isset($result_msg))
                    {
                        echo (array_key_exists('error', $result_msg)) ? "<p class='error-msg'>{$result_msg['error']}</p>" : "<p class='success-msg'>{$result_msg['success']}</p>"; // output query result
                    }
                    ?>
                </form>
        </span>