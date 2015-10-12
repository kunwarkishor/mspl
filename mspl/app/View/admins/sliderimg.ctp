<?php //debug($send); ?>
<html>
	<head>
 <style>
 .displayimgstyle{
	height:30%;
	border-radius:50%;
	width: 100%;
}
.displayactive{
	height:80%;
	width:30%;	
}
a{
	 text-decoration: none;
	 color: #444;
}
a:hover {
 
	color: #a80329;
}
body {
    background: #fafafa url(http://jackrugile.com/images/misc/noise-diagonal.png);
    color: #444;
    font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
    text-shadow: 0 1px 0 #fff;
}

strong {
    font-weight: bold; 
}

em {
    font-style: italic; 
}

table {
    background: #f5f5f5;
    border-collapse: separate;
    box-shadow: inset 0 1px 0 #fff;
    font-size: 12px;
    line-height: 24px;
    /*margin: 30px auto;*/
	margin-left:-0.5%;
    text-align: left;
    width:101%;
	text-align:center;
}   

th {
    background: url(http://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
    border-left: 1px solid #555;
    border-right: 1px solid #777;
    border-top: 1px solid #555;
    border-bottom: 1px solid #333;
    box-shadow: inset 0 1px 0 #999;
    color: #fff;
    font-weight: bold;
    padding: 10px 15px;
    position: relative;
    text-shadow: 0 1px 0 #000;
  
}

th:after {
    background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
    content: '';
    display: block;
    height: 25%;
    left: 0;
    margin: 1px 0 0 0;
    position: absolute;
    top: 25%;
    width: 100%;
}

th:first-child {
    border-left: 1px solid #777;    
    box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
    box-shadow: inset -1px 1px 0 #999;
}

td {
    border-right: 1px solid #fff;
    border-left: 1px solid #e8e8e8;
    border-top: 1px solid #fff;
    border-bottom: 1px solid #e8e8e8;
    padding: 10px 15px;
    position: relative;
    transition: all 300ms;
}

td:first-child {
    box-shadow: inset 1px 0 0 #fff;
}   

td:last-child {
    border-right: 1px solid #e8e8e8;
    box-shadow: inset -1px 0 0 #fff;
}   

tr {
    background: url(http://jackrugile.com/images/misc/noise-diagonal.png);  
}

tr:nth-child(odd) td {
    background: #f1f1f1 url(http://jackrugile.com/images/misc/noise-diagonal.png);  
}

tr:last-of-type td {
    box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
    box-shadow: inset 1px -1px 0 #fff;
}   

tr:last-of-type td:last-child {
    box-shadow: inset -1px -1px 0 #fff;
}   

tbody:hover td {
    color: transparent;
    text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
    color: #444;
    text-shadow: 0 1px 0 #fff;
}
</style>
	</head>
	<body>
    <fieldset style="width:98.5%; margin-top:2%; margin-bottom:-4%">
     <h3>All Slider Image</h3><h3 style="float:right; margin-top:-3.5%;"><?php echo $this->Html->link('Add New Image', array('action' => 'addimage')); ?></h3>
      	<table>
        <tbody>
       		 <tr>
   				 <th style="width:5%;">S.No</th>
				 <th>Image</th>
				 <th>Add On</th>
                 <th>Add By</th>
                 <th>Modify On</th>
                 <th>Modify by</th>
                 <th>Status</th>
                 <th>Action</th>
			 </tr>
			 <?php $conunt=1;
				foreach($send as $receive){ $var=$receive['Sliderimg']['pic']; $active=$receive['Sliderimg']['status']; ?>
               <tr>
                 <td style="width:5%;"><?php echo $conunt; $conunt++; ?></td>
          <td style="width:20%;"><img class="displayimgstyle" src="<?php echo $this->webroot ?>img/port/<?php echo $var;?>" /></td>
                 <td style="width:15%;"><?php echo $receive['Sliderimg']['addon']; ?></td>
                 <td style="width:15%;"><?php echo $receive['Admin']['name']; ?></td>
                 <td style="width:15%;"><?php echo $receive['Sliderimg']['modify']; ?></td>
                 <td style="width:15%;"><?php echo $receive['Admin']['name']; ?></td>
                 <td style="width:5%;">
						<?php if($active==0){?>
         										 <img class="displayactive" src="<?php echo $this->webroot ?>img/x.png" />
		  				<?php  }else{?> 
         										 <img class="displayactive" src="<?php echo $this->webroot ?>img/as1.png" />
		  				<?php }  ?>
                 </td>
<td><?php echo $this->Html->link('delete', array('action' => 'addimage')); ?>&nbsp; &nbsp;<?php echo $this->Html->link('Edit', array('action' => 'addimage')); ?></td>
              </tr>
				 <?php } ?>
                 </tbody>
        </table>
        <div>
        </div>
       </fieldset>
	</body>
</html>