
<center>
<div style="background-color:#5CA7F1; box-shadow:#737373 5px 5px 2px; width:75%; margin-top:0%;">
<h1 align="centre">Registration Here</h1>
<?php echo $this->Form->create('reg', array('enctype'=>"multipart/form-data"));?>
<table >
	<tr>
		<td>First name</td>
        <td><?php echo $this->Form->input('firstname',array('label'=>false,)); ?></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Last name</td>
		<td><?php echo $this->Form->input('lastname',array('label'=>false,'class'=>'text')); ?></td>
	</tr>
	<tr>
		<td>User name</td>
		<td><?php echo $this->Form->input('Uname',array('label'=>false,'class'=>'text')); ?></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Email Id</td>
		<td><?php echo $this->Form->input('EmailId',array('label'=>false,'class'=>'text')); ?></td>
	</tr>
	<tr>
		<td>password</td>
		<td><?php echo $this->Form->input('pass',array('label'=>false,'class'=>'text')); ?></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Conferm password</td>
		<td><?php echo $this->Form->input('Conferm',array('label'=>false,'class'=>'text')); ?></td>
	</tr>
	<tr>
		<td>Contact number</td>
		<td><?php echo $this->Form->input('contactno',array('label'=>false,'class'=>'text')); ?></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>Select Image</td>
		<td><?php echo $this->Form->file('image',array('label'=>false,'class'=>'text')); ?></td>
    </tr>
    <tr>
		<td>Address</td>
		<td><textarea name="data[reg][address]"></textarea></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>About You</td>
		<td><textarea name="data[reg][aboutus]"></textarea></td>
	</tr>
    <tr>
    	<td colspan="5" align="center">
			<?php echo $this->Form->end('Save');?>
        </td>
    </tr>
</table>
</div>
</center>