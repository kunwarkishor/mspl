<?php ?>
<html>
	<head>
		<style>
@import url(http://fonts.googleapis.com/css?family=Raleway);
#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a,
#cssmenu #menu-button {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu:after,
#cssmenu > ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
#cssmenu #menu-button {
  display: none;
}
#cssmenu {
  width: auto;
  font-family: Raleway, sans-serif;
  line-height: 1;
}
#cssmenu > ul {
  background: #3db2e1;
}
#cssmenu > ul > li {
  float: left;
  margin-left:7%;
  -webkit-perspective: 1000px;
  -moz-perspective: 1000px;
  perspective: 1000px;
}
#cssmenu.align-center > ul {
  font-size: 0;
  text-align: center;
}
#cssmenu.align-center > ul > li {
  display: inline-block;
  float: none;
}
#cssmenu.align-right > ul > li {
  float: right;
}
#cssmenu > ul > li > a {
  padding: 16px 20px;
  font-size: 14px;
  color: #ffffff;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
  background: #3db2e1;
  -webkit-transition: all .3s;
  -moz-transition: all .3s;
  -o-transition: all .3s;
  transition: all .3s;
  -webkit-transform-origin: 50% 0;
  -moz-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
#cssmenu > ul > li.active > a {
  color: #dff2fa;
}
#cssmenu > ul > li:hover > a,
#cssmenu > ul > li > a:hover {
  color: #dff2fa;
  -webkit-transform: rotateX(90deg) translateY(-23px);
  -moz-transform: rotateX(90deg) translateY(-23px);
  transform: rotateX(90deg) translateY(-23px);
  -ms-transform: none;
}
#cssmenu > ul > li > a::before {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: -1;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%;
  height: 100%;
  padding: 16px 20px;
  color: #dff2fa;
  background: #19799f;
  content: attr(data-title);
  -webkit-transition: background 0.3s;
  -moz-transition: background 0.3s;
  transition: background 0.3s;
  -webkit-transform: rotateX(-90deg);
  -moz-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
  -webkit-transform-origin: 50% 0;
  -moz-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -ms-transform: translateY(- -18px);
}
#cssmenu > ul > li:hover > a::before,
#cssmenu > ul > li > a:hover::before {
  background: #3db2e1;
}
#cssmenu.small-screen {
  width: 100%;
}
#cssmenu.small-screen > ul,
#cssmenu.small-screen.align-center > ul {
  width: 100%;
  text-align: left;
}
#cssmenu.small-screen > ul > li,
#cssmenu.small-screen.align-center {
  float: none;
  display: block;
  border-top: 1px solid rgba(100, 100, 100, 0.1);
}
#cssmenu.small-screen > ul > li:hover > a,
#cssmenu.small-screen > ul > li > a:hover {
  color: #dff2fa;
  -webkit-transform: none;
  -moz-transform: none;
  transform: none;
  -ms-transform: none;
}
#cssmenu.small-screen > ul > li > a::before {
  display: none;
}
#cssmenu.small-screen #menu-button {
  display: block;
  padding: 16px 20px;
  cursor: pointer;
  font-size: 14px;
  text-decoration: none;
  color: #ffffff;
  text-transform: uppercase;
  letter-spacing: 1px;
  background: #3db2e1;
}
#cssmenu.small-screen #menu-button:after {
  content: "";
  position: absolute;
  right: 20px;
  top: 17px;
  display: block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  border-top: 2px solid #ffffff;
  border-bottom: 2px solid #ffffff;
  width: 22px;
  height: 3px;
}
#cssmenu.small-screen #menu-button.menu-opened:after {
  border-top: 2px solid #dff2fa;
  border-bottom: 2px solid #dff2fa;
}
#cssmenu.small-screen #menu-button:before {
  content: "";
  position: absolute;
  right: 20px;
  top: 27px;
  display: block;
  width: 22px;
  height: 2px;
  background: #ffffff;
}
#cssmenu.small-screen #menu-button.menu-opened:before {
  background: #dff2fa;
}
</style>
<link rel="stylesheet" href="<?php echo $this->webroot ?>css/jquery.imgeslider.css" />
<link rel="stylesheet" href="<?php echo $this->webroot ?>css/jquery.bxslider.css" />
<script src="<?php echo $this->webroot?>js/jquery.min.js" ></script>
<script src="<?php echo $this->webroot ?>js/jquery.bxslider.min.js" ></script>
<script src="<?php echo $this->webroot ?>js/jquery.bxslider.js" ></script>

<script>
$(document).ready(function(){
	 $('.bxslider').bxSlider({
		 auto: true});
});


</script>
	</head>
<body style="background-color:#C9E7FC; height:100%;">
	<div style="background-color:#C9E7FC; width:100%; color:#FFF;">
		<img src="<?php echo $this->webroot ?>img/3.png" height="10%" width="10%" style="border-radius:10%; " />
        </div>
        <div>
			<center>
				<div style="background-color:#5CA7F1; box-shadow:#737373 5px 5px 2px; width:75%; margin-top:-6%;">
				<div id='cssmenu'>
					<ul>
  						 <li ><?php echo $this->Html->link('Home', array('action'=>'index')); ?></li>
 						 <li><?php echo $this->Html->link('About us', array('action'=>'aboutus')); ?></li>
  						 <li><?php echo $this->Html->link('Contact Us', array('action'=>'contactus')); ?></li>
                          <li><?php echo $this->Html->link('Our Team', array('action'=>'contactus')); ?></li>
                           <li><?php echo $this->Html->link('career', array('action'=>'contactus')); ?></li>
                        </ul>
                </div>
			</div>
			</center>
	     <div style="float:right; margin-top:-3%; margin-left:0%;">
        <?php
		 $b=$this->Session->read('username');
		 //echo $b; die;
		if(is_null($b))
		{
		 ?>
        <div style="border-radius:25%; background-color:#EEBA73; text-align:center;">
			<?php echo $this->Html->link('login', array('action'=>'login')); ?></div> &nbsp;&nbsp;
         
         <div>
            <?php echo $this->Html->link('Registrations', array('action'=>'reg')); ?> 
          </div>
          <?php
		   } 
		   else
		   {
			      ?>
                <div style="border-radius:25%; background-color:#EEBA73; color:#FFF; text-align:center;">
                <?php echo $b; ?>
                
			</div> &nbsp;&nbsp;
			<?php
			   }
		   ?> 
		</div>
      
		<hr style="color:#F00; border-width:medium; margin-top:3%;">
        <div>
           <center>
        	<fieldset style="width:22%; height:55%;">
            <div class="img">
            <ul class="bxslider">
            <li><img src="<?php echo $this->webroot ?>img/port/1.jpg" /></li>
            <li><img src="<?php echo $this->webroot ?>img/port/2.jpg" /></li>
            <li><img src="<?php echo $this->webroot ?>img/port/3.jpg" /></li>
             <li><img src="<?php echo $this->webroot ?>img/port/4.jpg" /></li>
              <li><img src="<?php echo $this->webroot ?>img/port/5.jpg" /></li>
            </ul>
            </div>
            </fieldset>
            </center>
         </div>
	</div>
</body>
</html>