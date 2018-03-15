<?php
/**
 * Created by PhpStorm.
 * User: TriNgo
 * Date: 08/03/2018
 * Time: 12:05
 */

class Base_model extends CI_Model
{
    public $table = 'livreor_commentaires';

    public function Get_info($nb = 10, $debut = 0)
    {
        if (empty(get_instance()->db)) {
            get_instance()->db = $this->load->database('db', true);
        }

        echo '<pre>';
        return $this->db->select('*')
            ->from('livreor_commentaires')
            ->limit($nb, $debut)
            ->order_by('id', 'desc')
            ->get()
            ->result();
    }

    public function Create_news($pseudo, $message)
    {
        if (empty(get_instance()->db)) {
            get_instance()->db = $this->load->database('db', true);
        }

        return $this->db->set('pseudo', $pseudo)
            ->set('message', $message)
            ->insert($this->table);
    }
}
