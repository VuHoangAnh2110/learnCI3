<?php

    class MBai1 extends CI_Model {
        public function __construct() {
            parent::__construct();
        }

        public function insert_data($data){
            $this->db->insert("tbl_user", $data);
        }

        public function get_user_id($id){
            if (is_numeric($id) && $id > 0) {
                $this->db->select("*");
                $this->db->from("tbl_user");
                $this->db->where("id",$id);
                $query = $this->db->get();
                return $query->result();
            } else {
                return false;
            }   
        }

        public function get_user(){
            $query = $this->db->get("tbl_user");
            return $query;
        }

    }