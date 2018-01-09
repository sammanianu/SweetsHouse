<?php


class ShoppingCart extends CI_Model
{

    function fetch_all(){
        $query = $this->db->get("product");
        return $query->result();
    }

    function fetch_all_breads2(){
        /*$query = $this->db->get("breads");*/
        $query = $this->db->get_where('product', array('category_id' => "Breads"));

        return $query->result();
    }

    function fetch_cakes(){
        $query = $this->db->get_where('product', array('category_id' => "Cakes"));
        return $query->result();
    }

    function fetch_cupCakes(){
        $query = $this->db->get_where('product', array('category_id' => "CupCakes"));
        return $query->result();
    }

    function fetch_pastries(){
        $query = $this->db->get_where('product', array('category_id' => "Pastries"));
        return $query->result();
    }

    function fetch_wCakes(){
        $query = $this->db->get_where('product', array('category_id' => "WCakes"));
        return $query->result();
    }

    function fetch_bCakes(){
        $query = $this->db->get_where('product', array('category_id' => "BCakes"));
        return $query->result();
    }

}