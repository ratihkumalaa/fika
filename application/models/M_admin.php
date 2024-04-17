<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
	public function total_barang()
	{
		return $this->db->get('tbl_barang')->num_rows();
	}

	public function total_kategori()
	{
		return $this->db->get('tbl_kategori')->num_rows();
	}

	public function total_pesanan_masuk()
	{
		return $this->db->get('tbl_transaksi')->num_rows();
	}

	public function data_setting()
	{
		$this->db->select('*');
		$this->db->from('tbl_setting');
		$this->db->where('id', 1);
		return $this->db->get()->row();
	}

	public function edit($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('tbl_setting', $data);
	}

	// //fungsi memanggil data pesanan berdasarkan id_pesanan
	// public function detail_transaksi($id_transaksi)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('tbl_transaksi');
	// 	$this->db->where('id_transaksi', $id_transaksi);
	// 	return $this->db->get()->row();
	// }

	// //fungsi memanggil detail barang per transaksi
	// public function detail_barang($id_transaksi)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('tbl_rinci_transaksi');
	// 	$this->db->join('tbl_transaksi', 'tbl_transaksi.no_order = tbl_rinci_transaksi.no_order', 'left');
	// 	$this->db->join('tbl_barang', 'tbl_barang.id_barang = tbl_rinci_transaksi.id_barang', 'left');
	// 	$this->db->where('id_transaksi', $id_transaksi);
	// 	return $this->db->get()->result();
	// }
}
