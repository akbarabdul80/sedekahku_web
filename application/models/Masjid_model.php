<?php

class Masjid_model extends CI_Model
{
    private $_table = 'mosque';

    public function getAllMasjid()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getAll()
    {
        //GetAll
        // $this->db->select('user_order.id_order , user_order.type, user_order.status, GROUP_CONCAT(food.food_name) as user_order');
        // $this->db->join('user_order', 'order_id=id_order');
        // $this->db->join('food', 'food_id=id_food');
        // $this->db->group_by('user_order.id_order');
        // $this->db->where(['user_order.id_order'=> 12]);
        // return $this->db->get('order_food')->result();

        //GetWhere
        // $this->db->select('user_order.id_order , user_order.type, user_order.status, GROUP_CONCAT(food.food_name) as user_order');
        // $this->db->join('user_order', 'order_id=id_order');
        // $this->db->join('food', 'food_id=id_food');
        // $this->db->group_by('user_order.id_order');
        // $this->db->where(['user_order.id_order'=> 12]);
        // return $this->db->get('order_food')->result();

        //GetAll+Username
        $this->db->select('user_order.id_order , user_order.type, user_order.status, users.username, GROUP_CONCAT(order_food.food_total) as count_order, GROUP_CONCAT(food.food_name) as food_order');
        $this->db->join('user_order', 'order_id=id_order');
        $this->db->join('food', 'food_id=id_food');
        $this->db->join('users', 'user_id=id_user');
        $this->db->group_by('user_order.id_order');
        $this->db->where(['user_order.id_order'=> 1]);
        return $this->db->get('order_food')->result();

    }
}