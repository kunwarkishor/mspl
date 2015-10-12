<?php
ob_start();
class AdminsController extends AppController {
	
	//public $helpers = array('Html', 'Form', 'Javascript', 'Session', 'General','Paginator','Js','Time','Text','Number');
	//var $components = array('Common', 'Upload', 'RequestHandler','Cookie','Session','Email');
			public $helpers = array('Html', 'Form', 'session');
		var $components = array('Upload','Common','RequestHandler');
	
	 public function beforeFilter(){	
			parent::beforeFilter();
			$actionUrl=array('index');
			if($this->Session->read('adminusername')=='' && !in_array($this->params['action'],$actionUrl))
			{
				$this->redirect(array('controller'=>'Admins','action' => 'index'));
			}
		}	
	 public function index(){
		 $this->layout='';
		 $data=$this->data;
		 if($data){
		 $this->Session->destroy();
		 $uname=$data['username'];
		 $pass=$data['password'];
		 if(empty($uname)||(empty($pass))){
			 ?>
			 <div align="center" style="color:#F00; font-size:24px; margin-top:1%"> <?php echo "Wrong user name or password.";?></div>
             <?php 
			$this->redirect(array('controller'=>'Admins','action' => 'index')); 
			 }
		 else{
		 $data=$this->Admin->find('first',array('conditions'=>array('uname'=>$uname,'password'=>$pass)));
		 date_default_timezone_set("Asia/Calcutta");
		 $var=count($data);
		 if($var>0){
			 $this->Session->write('adminusername',$data);
			 $post['Admin']['id']=$data['Admin']['id'];
			  $post['Admin']['name']=$data['Admin']['name'];
			   $post['Admin']['uname']=$data['Admin']['uname']; 
			   $post['Admin']['password']=$data['Admin']['password'];
			    $post['Admin']['emailid']=$data['Admin']['emailid'];
				 $post['Admin']['image']=$data['Admin']['image'];
				  $post['Admin']['Created']=$data['Admin']['Created'];
				   $post['Admin']['Lastlogin']=date('Y-m-d-h:i:sa');
				   $post['Admin']['Logout']=$data['Admin']['Logout'];
				   $this->Session->write('logoutuser',$post);
				    $this->Admin->save($post);
				$this->redirect(array('controller'=>'Admins','action'=>'dashbord/'.$data['Admin']['id']));
				 }
				 else
				 {
					 ?>
					 <div align="center" style="color:#F00; font-size:24px; margin-top:1%"> <?php echo "Wrong user name or password.";?></div>
                      <?php
				 }
		 }
		 }
	 }
	 public function dashbord(){
		 $this->layout="adminlayout";
	}
	 public function singout(){
		  date_default_timezone_set("Asia/Calcutta");
		 $var=$this->Session->Read('logoutuser');
		 $var['Admin']['Logout']=date('Y-m-d-h:i:sa');
		 $this->Admin->save($var);
		 $this->Session->delete('logoutuser');
		$this->Session->delete('adminusername');
		$this->Session->destroy();
		$this->redirect(array('action'=>'index'));
	}
	 public function changeusername(){
		$this->layout="adminlayout";
		$data=$this->data;
		$this->Session->delete('changeusername');
		if($data){ 
		@$pass=$data['Changeusername']['pass'];
		@$uname=$data['Changeusername']['username'];
		 if(empty($uname)||(empty($pass))){
		 $this->Session->Write('changeusername','Enter User Name And Password Both');
				 }
			 else{
				 $admin_peresent=$this->Session->Read('adminusername');
				 if($pass==$admin_peresent['Admin']['password']){
					 $post['Admin']['id']=$admin_peresent['Admin']['id'];
					 $post['Admin']['name']=$admin_peresent['Admin']['name'];
					 $post['Admin']['uname']=$uname;
					 $post['Admin']['password']=$admin_peresent['Admin']['password'];
					 $post['Admin']['emailid']=$admin_peresent['Admin']['emailid'];
					 $post['Admin']['image']=$admin_peresent['Admin']['image'];
					 $this->Admin->save($post);
					 $this->Session->Write('changeusername','Your User Name is changed.'); 
				 }
				 else
				 {
					 $this->Session->Write('changeusername','Please Enter Correct Password'); 
				 }
			 }
				 }
		 }
	 public function changepass(){		
		$this->layout="adminlayout";
		$data=$this->data; 
		$this->Session->delete('changepass');
		if($data){
	
			
		@$cpass=$data['Changeusername']['pass'];
		@$changpass=$data['Changeusername']['Npass'];
		 if(empty($changpass)||(empty($cpass))){
		 $this->Session->Write('changepass','Enter Current password And New Password Both');
				 }
			 else{
				 $admin_peresent=$this->Session->Read('adminusername');
				 if($cpass==$admin_peresent['Admin']['password']){
					 $post['Admin']['id']=$admin_peresent['Admin']['id'];
					 $post['Admin']['name']=$admin_peresent['Admin']['name'];
					 $post['Admin']['uname']=$admin_peresent['Admin']['uname'];
					 $post['Admin']['password']=$changpass;
					 $post['Admin']['emailid']=$admin_peresent['Admin']['emailid'];
					 $post['Admin']['image']=$admin_peresent['Admin']['image'];
					 $this->Admin->save($post);
					 $this->Session->Write('changepass','Your User Password is changed.'); 
				 }
				 else
				 {
					 $this->Session->Write('changepass','Please Enter Correct Password'); 
				 }
				 }
		}
		 }
	 public function sliderimg(){
		 $this->layout="adminlayout";
		 $this->loadModel('Sliderimg');
	     $data=$this->Sliderimg->find('all');
		 $this->set('send',$data);
		 }
	public function addimage(){
			$this->layout="adminlayout";
		 	$this->loadModel('Sliderimg');
			$data=$this->data;
			if($data)
			{
				$img=$data['addimage']['pic'];
				$imgtype=$img['type'];
				$imgsize=$img['size'];
				$img_name=$img['name'];
				//pr($imgsize); die;
						if(('image/png'==$imgtype) ||('image/jpeg'==$imgtype))
								{
									if(($imgsize>='145189')||($imgsize>='127723') || ('$imgsize'>='61574'))
									{
										
										$destination = realpath('../../app/webroot/img'). DS;
		 		$this->Upload->upload($img, $destination, $img_name, array('type'=>'resizecrop','size'=>array('1200','350'),'quality'=>'100'));

		 						 $this->Sliderimg->save($data);
								 				//pr($data); die;
            					$this->Session->setFlash(__('Your post has been saved.'));									
									}
										else
										{
											echo 'Image SIZE should be change';
										}
									}
								else
								{
									echo 'Image type should be change';
								}
				
			}
		 }
	}

?>