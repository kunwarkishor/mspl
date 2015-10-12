<?php
class Sliderimg extends AppModel {
	
	var $actsAs=array('Containable');
	
		var $belongsTo = array(
	                    'Admin'=>array(
					            'className' => 'Admin',
								'foreignKey' => 'addby',
							'fields'=>array('id','name')
							    ),
								);
	
}
 ?>