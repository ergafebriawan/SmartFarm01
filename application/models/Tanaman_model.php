<?php

class Tanaman_model extends CI_Model{
    public function getTanaman($id = null){
        if($id === null){
            return $this->db->get('tanaman')->result_array();
        }else{
            return $this->db->get_where('tanaman',['id_tanaman' => $id])->row_array();
        }
    }

    public function deleteTanaman($id){
        $this->db->delete('tanaman', ['id_tanaman' => $id]);
        return $this->db->affected_rows();
    }

    public function createTanaman($data){
        $this->db->insert('tanaman', $data);
        return $this->db->affected_rows();
    }

    public function updateTanaman($data, $id){
        $this->db->update('tanaman', $data, ['id_tanaman' => $id]);
        return $this->db->affected_rows();
    }
}

?>