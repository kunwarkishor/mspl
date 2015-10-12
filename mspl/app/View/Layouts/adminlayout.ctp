<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin </title>
	<?php
	echo $this->Html->script('script.js');
	echo $this->Html->script('menuscript.js');

	?>
	<body>

		<div class="wrapper">
		<?php echo $this->element('adminheader');  ?> <!--  front end header -->
        
			
			<?php $flash=$this->Session->flash();?>
			<?php if($flash){  ?>
			<div id="div_message" class="bg-primary message-sucess">	  
				<?php echo $flash;  ?>
			</div>	
			<?php } ?>
			
			<?php echo  $this->fetch('content');  ?>
		
			
		</div>
			 <div id="dvLoading" style="display:none"></div>
			 <?php echo $this->element('footer'); ?> <!--  front end footer -->
		
	</body>
	