<?php
/** @var string $message */
?>
<div class="container">
    <div class="text-center">
        <?= $message ?><br>
    </div>


    <form class="form-signup" action="/user/signup" method="post" role="form">
        <h2 class="form-signup-heading">Please sign up</h2>
        <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <input name="login" class="form-control" placeholder="Login" required>
        <button class="btn btn-lg btn-primary btn-block" name="signUpAction" value="start" type="submit">Sign up
        </button>
    </form>

</div> <!-- /container -->
