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
<?php echo $this->Form->create('addimage', array('enctype'=>"multipart/form-data"));?>
    <div>
        <label for="name">Select Image:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <div style="margin-left:38%; margin-top:-4.5%;"><?php echo $this->Form->input('pic',array('type'=>'file','label'=>false)); ?> </div>
    </div>
    <div>
        <label for="mail">Select Status:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <select name="data[addimage][status]" style="width:30%; border: 1px solid #999;" >
        <option value="1" >Active</option>
        <option value="0">Dactive</option>
        </select>
    </div>
      <div class="button">
    <?php echo $this->Form->end('Add Image');?>
    <?php
	//$var= $this->Session->Read('changeusername');
	?>
    <div style="color:red;"><?php //echo $var; ?></div>
   </div>
</form>
</body>
</html>