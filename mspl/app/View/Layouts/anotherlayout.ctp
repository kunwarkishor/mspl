<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ::It's Kunwar:: </title>
	<?php
	echo $this->Html->script('script.js');
	echo $this->Html->script('http://www.jeasyui.com/easyui/jquery.easyui.min.js');
	echo $this->Html->script('http://code.jquery.com/jquery-1.6.1.min.js');
	
	?>
	<body>

		<div class="wrapper">
		<?php echo $this->element('headersecond');  ?> <!--  front end header -->
        
			
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
	