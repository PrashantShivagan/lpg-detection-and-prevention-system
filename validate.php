
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //check if two passwords are equal to each other
    if ($_POST['password'] == $_POST['confirmpassword']) 
    {
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">


    <input type="password" placeholder="Password" name="password"> />
	<input type="password" placeholder="Confirm Password" name="confirmpassword" />


    }
}