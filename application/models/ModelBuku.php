<?php
class ModelBuku extends CI_Model
{
    public function getBuku()
    {
        return $this->db->get('buku');
    }
    public function detailBuku($where)
    {
        return $this->db->get_where('buku', array('id' => $where));
    }
    public function getKategori($where)
    {
        return $this->db->get_where('kategori', array('id' => $where));
    }
}