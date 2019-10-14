<?php

class User_model extends CI_model{


  function log_user($email,$password){
      
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where('user_email',$email AND 'user_password',$password);
      $query=$this->db->get();

      echo $query->num_rows();
  

      if($query->num_rows()==1){

        die("User doesn't exist");
      }else{

         $row = $query->row();

          if($row["level"]==0){

            return 0;
         }else{
            return 1;
            
          }
        
      }
  }
 


 function saveDiagnostics($symptoms,$medicine)
  {
  $query="insert into diagnosis values(' ','unkownfedf@gmail.com','$symptoms','$medicine')";
  $insert=$this->db->query($query);
   redirect('User/doctor_dashboard');
  }

 
public function register_user($user){
 
 
$this->db->insert('user', $user);
   header( "location:".base_url()."controller/get_pat");


 
}

 
 function saverecords($name,$email,$password,$age,$mobile)
  {
  $query="insert into user values(' ','$name','$email','$password','$age','$mobile',0)";
  $insert=$this->db->query($query);
  }
 

 
public function login_user(){
    $email=$this->input->post('',TRUE);
    $password=md5($this->input->post('',TRUE));
    $validate=$this->login_model->validate($email,$password);
    if($validate->num_rows()>0){
      $data=$validate->row_array();
      $name=$data['user_name'];
      $email=$data['user_email'];
      $level=$data['level'];

      $sesdata=array(
        'username'=>$name,
        'email'=>$email,
        'level'=>$level,
        'logged_in'=>TRUE
      );
      $this->session->set_userdata($sesdata);
      if($level ===0){
        redirect(base_url('doclanding'));
      }elseif($level===1){
         redirect(base_url('index'));
      }else{
        redirect('login');
      }
    }else{
      echo $this->session->set_flashdata('msg','Username or Password is wrong');
      redirect('');
    }
 
}
public function email_check($email){
 
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $query=$this->db->get();
 
  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }
 
}
function getpat()
{
  $this->db->select('*');
  $this->db->order_by('ID','DESC');
  $query=$this->db->get('diagnosis');
  return $query->result();


}
function get_pat($patdata)
{
  $this->db->select('*');
  $this->db->where('ID',$patdata);
  $res2=$this->get('diagnosis');
  return $res2;
}
 
}
 
 
?>