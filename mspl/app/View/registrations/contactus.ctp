<html>
	<head>
    <style>
	form {
    margin: 0 auto;
	margin-top:5%;
    width: 400px;
    padding: 1em;
    border: 1px solid #CCC;
    border-radius: 1em;
}
	form div + div {
    margin-top: 1em;
}
	label {
    display: inline-block;
    width: 90px;
    text-align: right;
}
	input, textarea {
   
    font: 1em sans-serif;
    width: 300px;
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
    padding-left: 90px; 
}
button {
      margin-left: .5em;
}
</style>
    </head>
    <body>
<?php echo $this->Form->create('cont', array('enctype'=>"multipart/form-data"));?>
    <div>
        <label for="name">Name:</label>
       <input type="text" id="name" name="data[cont][name]" />       
    </div>
    <div>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" name="data[cont][email]" />
    </div>
    <div>
        <label for="msg">Message:</label>
        <textarea id="msg" name="data[cont][message]"></textarea>
    </div>
    <div class="button">
    <?php echo $this->Form->end('Send your message');?>
      
    </div>
</form>
</body>
</html>