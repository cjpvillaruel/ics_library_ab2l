<div id = "logindiv">
<p><h1>Login </h1></p>
   <div id = "logindiv2">
 

    <?php echo form_open('verify_login'); ?>
  
     <p id= "validation_error"><?php echo validation_errors(); ?></p>
      <label>Username:</label> <input type = "text" name= "username" >
      <label>Password:</label> <Input type= "password" name = "password" >
      <input type="submit" value= "Login" onclick= "return validate_login()" name = "login_button">

   </form>
</div>

</div>