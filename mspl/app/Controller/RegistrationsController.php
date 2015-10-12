<?php 
class RegistrationsController extends AppController {
	public $name= "Registrations";
	
		public $helpers = array('Html', 'Form', 'session');
		var $components = array('Upload','Common','RequestHandler');
		function beforeFilter()
  		{	
			parent::beforeFilter();
			$actionUrl=array('index','aboutus','reg','login','contactus');
			if($this->Session->read('username')=='' && !in_array($this->params['action'],$actionUrl))
			{
				$this->redirect(array('controller'=>'Registrations','action' => 'login'));
			}
		}

	 public function index(){
		  $this->layout='public';
	 }
	 public function reg(){	 
		 $this->layout='anotherlayout';
		$data=$this->data;
		
		 if($data)
		 {
				if($data['reg']['pass']==$data['reg']['Conferm'])
					 {
						$image=$data['reg']['image'];
						$type=$image['type'];
							if(('image/png'==$type) ||('image/jpeg'==$type))
								{
								$destination = realpath('../../app/webroot/img/profileimg'). DS;
								 $imageName=$image['name'];
								 $post['Registration']['firstname']=$data['reg']['firstname'];
								 $post['Registration']['lastname']=$data['reg']['lastname'];
								 $post['Registration']['Uname']=$data['reg']['Uname'];
								  $post['Registration']['pass']=$data['reg']['pass'];
								 $post['Registration']['EmailId']=$data['reg']['EmailId'];								
								 $post['Registration']['contactno']=$data['reg']['contactno'];
								 $post['Registration']['address']=$data['reg']['address'];
					 			 $post['Registration']['aboutus']=$data['reg']['aboutus'];
							     $post['Registration']['image']=$data['reg']['image']['name'];
							     $post['Registration']['created']=date('Y-m-d');
								 $post['Registration']['modified']=date('Y-m-d');
     							 $this->Upload->upload($image, $destination, $imageName);
								 $this->Registration->save($post);
            					$this->Session->setFlash(__('Your post has been saved.'));
								}
								else
								{
								$this->Session->setFlash(__('Image should be in correct format.'));
								}
					 }
					 else
					 {
				 	 $this->Session->setFlash(__('Password is not matched.'));
			 		 }								
		 }
	 }
	 public function login() {
		$this->layout='anotherlayout';
		if($this->data)
		{
		 $data=$this->data;
		 $uname=$data['login']['Uname'];
		 $pass=$data['login']['pass'];
		 if(empty($uname)||empty($pass)){
		     $this->Session->write('notempaty','User name and password is requird. ');
		     return $this->redirect(array('action'=>'login'));
		 }
		  else
		  {
			  $this->Session->delete('username');
			 $data=$this->Registration->find('first',array('conditions'=>array('Uname'=>$uname,'pass'=>$pass)));
			 $var=count($data);
			if($var>0){
				 $a = $data['Registration']['firstname']." ".$data['Registration']['lastname'];
    			 $this->Session->write('username',$a);
				 $this->redirect(array('controller'=>'Registrations','action'=>'dashbord/'.$data['Registration']['id']));
				 }
				 else
				 {
					  $this->Session->setFlash(__('Wrong user name or password.')); 
				 }
		  }
		}
	 }
	 public function dashbord($id){
		 $this->layout='anotherlayout';
		 $data=$this->Registration->findById($id);
		 $this->set('send',$data);
	 }
	 public function aboutus(){
		  $this->layout='anotherlayout';
	 }
	 public function contactus(){
		 $this->layout='anotherlayout';
		$data=$this->data;
		if($data)
		{
			$this->loadModel('Contactus');
			//pr($data); die;
			$post['Contactus']['name']=$data['cont']['name'];
			$post['Contactus']['emailid']=$data['cont']['email'];
			$post['Contactus']['massage']=$data['cont']['message'];
			//pr($post); die;
			$this->Contactus->save($post);
			
		} 
	 }	 
}
?>