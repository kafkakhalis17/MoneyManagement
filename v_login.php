<?php 
include 'Template/headerlogin.php';
?>
<section>
        <form class="form1" action="">
        <div class="imgcontainer">
            <img src="assets/img/test.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input class="kelas" type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input class="kelas" type="password" placeholder="Enter Password" name="psw" required>

            <button class="button1" type="submit">Login</button>
            <label>
            <input class="kelas" type="checkbox" checked="checked" name="remember"> Remember me
            </label>    
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button class="button1" type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgott<a href="#">password?</a></span>
        </div>
        </form>
</section>

<?php 'Template/footer.php';
?>