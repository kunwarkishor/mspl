<?php 
class Registration extends AppModel {
	
	
	
	public $validate = array(
                           'firstname'=>array(
						                    'rule'=>'|^[A-Za-z]*$|',
											'message'=>'please enter alphabets only.'
						                   ),
							'lastname'=>array(
							                  'rule'=>'|^[A-Za-z]*$|',
											  'message'=>'please enter alphabets only.'
							                 ),
							'Uname'=>array(
							                 'rule'=>'/^([a-z]|[A-Z]|[0-9]| |_|-)+$/',
											 'required'=>true,
											 'message'=>'Only letter and Number is allowed.'
							                ),
							'EmailId'=>array(
											 'rule'=>'/^([a-z]|[A-Z]|[0-9]| |_|-)+$/',
											 'required'=>true,
											 'message'=>'Only letter and Number is allowed.'
							                ),
							'pass'=>array(
							               'rule'=>'/^([A-Z]|[a-z]| |)+$/',
										   'required' => true,
                                           'message' => 'City is requird.'
										   ),							
							 'aboutus'=>array(
							                 'rule'=>'alphaNumeric',
											 'required'=>true,
											 'message'=>'Only letter and Number is allowed.'
							                ),
							
							'address'=>array(
							                 'rule'=>'alphaNumeric',
											 'required'=>true,
											 'message'=>'Only letter and Number is allowed.'
							                ),
							'contactno'=>array(
							                 'rule'=>'|^[0-9][10]|',
											 'required'=>true,
											 'message'=>'Only letter and Number is allowed.'
							                ),
								);
								
							
														
	
}
?>