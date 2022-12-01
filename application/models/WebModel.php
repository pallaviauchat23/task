<?php class WebModel extends CI_Model {

        
        public function get_last_ten_entries()
        {
                $query = $this->db->get('entries', 10);
                return $query->result();
        }


        public function select_alldata($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by('id', 'DESC');
        $info = $this->db->get();
        return $info->result();

    }

    public function select_byid($table,$field,$id)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field,$id);
        $info = $this->db->get();
        return $info->row();
    }

    public function select_result($table,$field,$id)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field,$id);
        $info = $this->db->get();
        return $info->result();
    }


     public function select_by($table,$field,$id)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field,$id);
        $info = $this->db->get();
        return $info->result();
    }

    public function update_data($table,$field,$id,$data)
    {
        $this->db->where($field, $id);
        return $this->db->update($table, $data);
    }
    public function delete_data($table,$field,$id)
    {
        $this->db->where($field,$id);
        return $this->db->delete($table);
    }

    public function get_count() {
        return $this->db->count_all('school');
    }

    public function get_authors($limit, $start,$id) {
        $this->db->limit($limit, $start);
         $this->db->where('reg_id',$id);
        $query = $this->db->get('school');

        return $query->result();
    }

    public function search(){
         
                  $query1=$this->db->query("SELECT * FROM School WHERE name LIKE '%".$_POST['name']."%' " );
       return $query1->result();
               
    }

    }
?>