<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br><br>

        <form action="" method="POST">

            <table class="tbl-b">
                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" name="fullName" placeholder="Enter your name"></td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" placeholder="Enter a username"></td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" placeholder="Enter a password"></td>
                </tr>

                <tr>
                   <td colspan="2">
                    <input type="submit" name="submit" value="Add Admin" class="btn-sec">
                   </td>
                </tr>
                
            </table>

        </form>
    </div>
</div>

<?php include('partials/footer.php'); ?>

<?php
    // Prcoess the form and saves it in the database
    // Checks wheter the button is clicked or not 

    if(isset($_POST['submit']))
    {
        // Button Clicked
       // echo "Button Clicked";
       //Get the data from form
       $fullName = $_POST['fullName'];
       $username = $_POST['username'];
       $password = md5($_POST['password']); //Password Encryption

       $sql = "INSERT INTO admin SET
            fullName='$fullName',
            username='$username',
            password='$password'
       
       ";

       //3. Execute Query and Save the data in the database
       $conn = mysqli_connect('localhost','root', '') or die(mysqli_error());  //Database connection
       $db_select = mysqli_select_db($conn, 'sultan-orders') or die(mysqli_error()); //Selcting the database

       //$res = mysqli_query($conn, $sql) or die(mysqli_error());

      

    }
    
?>