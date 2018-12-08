        <span class="border">
                <form class="form-signin" action="/account/register" method="POST">
                  <h1 class="h3 mb-3 font-weight-normal">Register</h1>

                  <label for="inputName" class="sr-only">Name</label>
                  <input type="text" id="inputName" class="form-control" placeholder="Name*" name="name" required autofocus>

                  <label for="inputSurname" class="sr-only">Surname</label>
                  <input type="text" id="inputSurname" class="form-control" placeholder="Surname*" name="surname" required>

                  <label for="inputEmail" class="sr-only">Email address*</label>
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email*" name="email" required>

                    <select class="custom-select" name="gender">
                        <option value="" selected>Choose gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                   </select>

                    <input class="input-group date text-center" type="date" name="bday" min="1900-01-01" max="2001-01-01">

                  <label for="inputPassword1" class="sr-only">Password</label>
                  <input type="password" id="inputPassword1" class="form-control" placeholder="Password*" name="password1" required>

                  <label for="inputPassword2" class="sr-only">Confirm password</label>
                  <input type="password" id="inputPassword2" class="form-control" placeholder="Confirm password*" name="password2" required>

                  <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Sign up</button>
                </form>
        </span>


    </body>
</html>