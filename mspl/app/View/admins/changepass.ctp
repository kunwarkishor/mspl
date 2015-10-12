<html>
	<head>
    <style>
	form {
    margin: 0 auto;
	margin-left:30%;
	margin-bottom:20%;
	margin-top:10%;
    width: 600px;
    padding: 1em;
    border: 1px solid #CCC;
    border-radius: 1em;
}
	form div + div {
    margin-top: 1em;
}
	label {
    display: inline-block;
    width: 200px;
    text-align: right;
}
	input, textarea {
   
    font: 1em sans-serif;
   width: 272px;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
     border: 1px solid #999;
}
	input:focus, textarea:focus {
     border-color: #000;
}
	textarea {
    vertical-align: top;
    height: 5em;
    resize: vertical;
}
    .button {
    padding-left: 120px; 
}
button {
      margin-left: .5em;
}
</style>
    </head>
    <body>
<?php echo $this->Form->create('changepass', array('enctype'=>"multipart/form-data"));?>
    <div>
        <label for="name">Current Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="password" id="password" name="data[Changeusername][pass]" />       
    </div>
    <div>
        <label for="mail">Enter New Password:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="password" id="name" name="data[Changeusername][Npass]" />
    </div>
      <div class="button">
    <?php echo $this->Form->end('Change Password');?>
    <?php
	$var= $this->Session->Read('changepass');
	
	?>
    <div style="color:red;"><?php echo $var; ?></div>
   </div>
</form>
</body>
</html>