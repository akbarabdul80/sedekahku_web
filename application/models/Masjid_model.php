<?php

class Masjid_model extends CI_Model
{
    private $_table = 'mosque';

    public function rules()
    {
        return [
            [
                'field' => 'mosque_name',
                'label' => 'Nama Masjid',
                'rules' => 'required'
            ],
            [
                'field' => 'mosque_address',
                'label' => 'Alamat Masjid',
                'rules' => 'required'
            ],
            [
                'field' => 'mosque_dec',
                'label' => 'Keterangan',
                'rules' => 'required'
            ]
        ];
    }

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
        // $this->db->select('user_order.id_order , user_order.type, user_order.status, users.username, GROUP_CONCAT(order_food.food_total) as count_order, GROUP_CONCAT(food.food_name) as food_order');
        // $this->db->join('user_order', 'order_id=id_order');
        // $this->db->join('food', 'food_id=id_food');
        // $this->db->join('users', 'user_id=id_user');
        // $this->db->group_by('user_order.id_order');
        // $this->db->where(['user_order.id_order'=> 1]);
        // return $this->db->get('order_food')->result();

    }

    public function add()
    {
        $post = $this->input->post();
        $this->mosque_name = $post['mosque_name'];
        $this->mosque_address = $post['mosque_address'];
        $this->mosque_dec = $post['mosque_dec'];

        $dir = './upload/masjid/';

        $abjad = ['1', '2', '3'];
        foreach ($abjad as $abj) {
            $file = "img_" . $abj;
            $db = "mosque_img" . $abj;

            if (!empty($_FILES[$file]["name"])) {
                $this->$db = $this->master_model->_uploadImage($dir, $file);
            }
        }

        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_mosque = $post['id_mosque'];
        $this->mosque_name = $post['mosque_name'];
        $this->mosque_address = $post['mosque_address'];
        $this->mosque_dec = $post['mosque_dec'];

        $result = $this->db->get_where($this->_table, ["id_mosque" => $post['id_mosque']])->row();

        $dir = './upload/masjid/';

        $abjad = ['1', '2', '3'];
        foreach ($abjad as $abj) {
            $file = "img_" . $abj;
            $db = "mosque_img" . $abj;

            if (!empty($_FILES[$file]["name"])) {
                if (!empty($result->$db)) {
                    unlink($dir . $result->$db);
                }
                $this->$db = $this->master_model->_uploadImage($dir, $file);
            }
        }

        return $this->db->update($this->_table, $this, array('id_mosque' => $post['id_mosque']));

    }

    public function delete($id)
    {
        $result = $this->db->get_where($this->_table, ["id_mosque" => $id])->row();

        $dir = './upload/masjid/';

        $abjad = ['1', '2', '3'];
        foreach ($abjad as $abj) {
            $file = 'mosque_img' . $abj;

            if (!empty($result->$file)) {
                unlink($dir . $result->$file);
                echo "unlink";
            }
        }

        return $this->db->delete($this->_table, array("id_mosque" => $id));
    }
}
