<html>
	<head>
 <style>
table { 
color:#DA603D;
font-family: Helvetica, Arial, sans-serif;
width: 100%;
collapse; border-spacing: 0;
margin-top:2%;
margin-bottom:35%;
}

td, th { 
border: 1px solid transparent; 
height: 30px; 
transition: all 0.3s; 
}

th {
background: #DFDFDF; 
font-weight: bold;
}

td {
background: #FAFAFA;
text-align: center;
}

tr:nth-child(even) td { background:#5CA7F1; } 

tr:nth-child(odd) td { background:#5CA7F1; }  

tr td:hover { background:#F60; color: #FFF; } 
</style>
	</head>
	<body>
    <?php 
    $b=$this->Session->read('adminusername');
	?>
    	<table>
       		 <tr>
   				 <th>Name</th>
				 <th>user name</th>
				 <th>Email Id</th>
                 <th>Created On</th>
                 <th>Last Login</th>
                 <th>Log Out</th>
			 </tr>
              <tr>
              	 <td><?php echo $b['Admin']['name']; ?></td>
                 <td><?php echo $b['Admin']['uname']; ?></td>
                 <td><?php echo $b['Admin']['emailid']; ?></td>
                 <td><?php echo $b['Admin']['Created']; ?></td>
                 <td><?php echo $b['Admin']['Lastlogin']; ?></td>
                 <td><?php echo $b['Admin']['Logout']; ?></td>
                 
              </tr>
        </table>
        <div>
        
        </div>
	</body>
</html>