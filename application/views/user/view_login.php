<div id = "logindiv">
<p><h1>User Login </h1></p>
   <div id = "logindiv2">
 
   <?php	$attributes = array('name' =>'user_login', 'id' => 'user_login');
     echo form_open('user/controller_verify_login', $attributes); ?>
  
     <p id= "validation_error"><?php echo validation_errors(); ?></p>
      <label>Username:</label> <input type = "text" name= "username" required= "required">
      <span id = "helpusername"></span><br>
      <label>Password:</label> <Input type= "password" name = "password" required= "required">
      <span id = "helppword"></span><br>
      <input type="submit" value= "Login" onclick= "return validate_login()" name = "login_button">

   </form>
</div>

</div>