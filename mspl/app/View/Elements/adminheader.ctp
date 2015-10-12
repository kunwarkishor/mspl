<!doctype html>
<html lang=''>
<head>
 <!--  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="<?php //echo $this->webroot ?>js/menuscript.js"></script>-->
<style>
@charset "UTF-8";
#cssmenu {
  border: none;
  border: 0px;
  margin: 0px;
  padding: 0px;
  font-family: verdana, geneva, arial, helvetica, sans-serif;
  font-size: 14px;
  font-weight: bold;
  color: #8e8e8e;
  width: auto;
}
#cssmenu > ul {
  margin-top: 6px !important;
}
#cssmenu ul {
  background: #CDCDCD;
  background: -webkit-linear-gradient(#cdcdcd 0%, #e2e2e2 80%, #cdcdcd 100%);
  background: linear-gradient(#cdcdcd 0%, #e2e2e2 80%, #cdcdcd 100%);
  border-top: 1px solid #A8A8A8;
  -webkit-box-shadow: inset 0 1px 0 #e9e9e9, 0 1px 0 #a80329, 0 2px 0 #b81c40, 0 8px 0 #a80329, 0 9px 0 #7b021e, 0 -1px 1px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: inset 0 1px 0 #e9e9e9, 0 1px 0 #a80329, 0 2px 0 #b81c40, 0 8px 0 #a80329, 0 9px 0 #7b021e, 0 -1px 1px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 0 #e9e9e9, 0 1px 0 #a80329, 0 2px 0 #b81c40, 0 8px 0 #a80329, 0 9px 0 #7b021e, 0 -1px 1px rgba(0, 0, 0, 0.1);
  height: 27px;
  list-style: none;
  margin: 0;
  padding: 0;
}
#cssmenu ul ul {
  border-top: 6px solid #a80329;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
#cssmenu ul ul a {
  line-height: 43px;
}
#cssmenu ul ul ul {
  left: 100%;
  top: 0;
}
#cssmenu li {
  float: left;
  padding: 0px 8px 0px 8px;
}
#cssmenu li a {
  color: #666666;
  display: block;
  font-weight: bold;
  line-height: 30px;
  padding: 0px 25px;
  text-align: center;
  text-decoration: none;
}
#cssmenu li a:hover {
  color: #000000;
  text-decoration: none;
}
#cssmenu li ul {
  background: #e0e0e0;
  border-left: 2px solid #a80329;
  border-right: 2px solid #a80329;
  border-bottom: 2px solid #a80329;
  display: none;
  height: auto;
  filter: alpha(opacity=95);
  opacity: 0.95;
  position: absolute;
  width: 225px;
  z-index: 200;
  /*top:1em;
		/*left:0;*/

}
#cssmenu li:hover > ul {
  display: block;
}
#cssmenu li li {
  display: block;
  float: none;
  padding: 0px;
  position: relative;
  width: 225px;
}
#cssmenu li ul a {
  display: block;
  font-size: 12px;
  font-style: normal;
  padding: 0px 10px 0px 15px;
  text-align: left;
}
#cssmenu li ul a:hover {
  background: #949494;
  color: #000000;
  opacity: 1.0;
  filter: alpha(opacity=100);
}
#cssmenu p {
  clear: left;
}
#cssmenu .active > a {
  background: #a80329;
  -webkit-box-shadow: 0 -4px 0 #a80329, 0 -5px 0 #b81c40, 0 -6px 0 #a80329;
  -moz-box-shadow: 0 -4px 0 #a80329, 0 -5px 0 #b81c40, 0 -6px 0 #a80329;
  box-shadow: 0 -4px 0 #a80329, 0 -5px 0 #b81c40, 0 -6px 0 #a80329;
  color: #ffffff;
}
#cssmenu .active > a:hover {
  color: white;
}
</style>
</head>
<body>
<div style="width:100%; height:10%; background-color:#6E6E6E; color:#FFF;">
<img src="<?php echo $this->webroot ?>img/5.png" width="5%" height="5%" style="margin-left:3%;" />
<img src="<?php echo $this->webroot ?>img/Administration.jpg" width="15%" height="10%" style="margin-left:3%; margin-bottom:0.5%; border-radius:2%; " />
<?php
$b=$this->Session->read('adminusername');
$c=$b['Admin']['image'];
?>

<img src="<?php echo $this->webroot ?>img/<?php echo $c; ?>" width="5%" height="5%" style="float:right;" />
</div>
<div id='cssmenu'>
<ul>
   <li class='active '><?php echo $this->Html->link('Dashbord', array('Controller'=>'Admins','action'=>'dashbord')); ?></li>
   <li ><a href='#'><span>User</span></a></li>
    <li class='has-sub'><a href='#'><span>Profile Setting</span></a>
            <ul>
      <li><?php echo $this->Html->link('Change Username', array('Controller'=>'Admins','action'=>'changeusername')); ?></li>
     <li class='last'><?php echo $this->Html->link('Change Password', array('Controller'=>'Admins','action'=>'changepass')); ?></li>
            </ul>
         </li>
 	<li ><a href='#'><span>Manage</span></a>
    <ul>
        <li><?php echo $this->Html->link('Slider Image', array('Controller'=>'Admins','action'=>'sliderimg')); ?></li>
    
    </ul>
 	</li>  
   <li class='last'><?php echo $this->Html->link('LogOut', array('Controller'=>'Admins','action'=>'singout')); ?></li>
</ul>
</div>
</body>
<html>