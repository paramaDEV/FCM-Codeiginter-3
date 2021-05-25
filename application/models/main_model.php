<?php
class Main_model extends CI_Model{
    public function register_user($data){
        $this->db->insert('user',$data);
    }
    public function get_user(){
        return $this->db->get('user')->result_array();
    }
    public function getBy($table,$where){
        return $this->db->get_where($table,$where)->row_array();
    }
    public function send_kuisioner($data){
        $this->db->insert('kuisioner',$data);
    }
    public function get_kuisioner(){
        $this->db->select('*');
        $this->db->from('kuisioner');
        $this->db->join('user','kuisioner.id_user=user.id');
        return $this->db->get()->result_array();
    }
    public function set_result($data){
        $this->db->insert('result',$data);
    }
    public function get_result(){
        $this->db->select('*');
        $this->db->from('result');
        $this->db->join('user','user.id=result.id_user');
        return $this->db->get()->result_array();
    }
    public function delete_result(){
        $this->db->empty_table('result');
    }
}
?>