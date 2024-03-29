<?php
/**
 *
 */
class Admin_model extends CI_model
{

  public function addproject($data_array){
    $title=$this->input->post('title',TRUE);
    $des=$this->input->post('description',TRUE);
    $today = date("Y-m-d H:i:s");
    $projectdata = array(  'projtitle' =>$title ,
                           'projdes' =>$des ,
                           'image' => $data_array['upload_data']['file_name'],
                           'date' => $today
                         );

    //print_r($data_array);

    $this->db->insert('project', $projectdata);
    return ($this->db->affected_rows() != 1) ? false : true;


  }

  public function addUser(){
    $uname=$this->input->post('username',TRUE);
    $pass=$this->input->post('pass',TRUE);
    $cpass=$this->input->post('cpass',TRUE);
    $type='admin';
    if($pass==$cpass){
      $userdata = array(  'userName' =>$uname ,
                           'password' =>$pass ,
                           'userType' => $type
                           
                         );

       $this->db->insert('user', $userdata);
    return ($this->db->affected_rows() != 1) ? false : true;
    }
   

    

    
    return false;


  }

  public function editproject($id){
    $this->db->select('*');
    $this->db->from('project');
    $this->db->where('projid', $id);
    $query = $this->db->get();
    $row = $query->row();
    //echo $row->projtitle;
    return $row;
  }
  public function edituser($id){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('userID', $id);
    $query = $this->db->get();
    $row = $query->row();
   
    return $row;
  }

  public function updateproject($data_array){
    $title=$this->input->post('title',TRUE);
    $des=$this->input->post('description',TRUE);
    //$today = date("Y-m-d H:i:s");
    $id=$data_array['projid'];
    $projectdata = array(  'projtitle' =>$title ,
                           'projdes' =>$des ,
                           'image' => $data_array['upload_data']['file_name']

                         );

    //print_r($data_array);
    $this->db->where('projid', $id);
    $this->db->update('project', $projectdata);
    return ($this->db->affected_rows() != 1) ? false : true;


  }
  public function updateUser($id){
    $uname=$this->input->post('uname',TRUE);
    $pass=$this->input->post('pass',TRUE);
    $cpass=$this->input->post('cpass',TRUE);

   if($pass==$cpass){
      $userdata = array(  'userName' =>$uname ,
                             'password' =>md5($pass) ,
                             

                           );

      
      $this->db->where('userID', $id);
      $this->db->update('user', $userdata);
      return ($this->db->affected_rows() != 1) ? false : true;
    }else{
      return false;
    }
    
    


  }

  public function proj_delete($id){
    $this->db->where('projid', $id);
    $this->db->delete('project');
    return ($this->db->affected_rows() != 1) ? false : true;
  }
  public function userDelete($id){
    $this->db->where('userID', $id);
    $this->db->delete('user');
    return ($this->db->affected_rows() != 1) ? false : true;
  }
    public function viewmsg($id){
   $mid=$id;
   $query = $this->db->query("SELECT * FROM `message` WHERE `id`='$mid'");
   $row = $query->row();
   return $row;
 }
}

 ?>
