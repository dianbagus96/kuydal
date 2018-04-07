<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function all()
	{
		$sql = "SELECT id_category, category, created_at, updated_at FROM tbl_category";
		$doSql = $this->db->query($sql);
		if ($doSql->num_rows() > 0) {
			$objCategory = $doSql->result_array();
			return $objCategory;
		} else {
			return false;
		}
	}

	public function set($type)
	{
		if ($type == "save") {
			$id_category = $this->input->post('id_category');
			$category = $this->input->post('category');
			if ($id_category) {
				# update category
				$data = array(
					'category'		=> $category,
					'updated_at'	=> date('Y-m-d H:i:s')
				);
				$this->db->where('id_category', $id_category);
				$exec = $this->db->update('tbl_category', $data);
			} else {
				# save category
				$data = array(
					'category' 		=> $category,
					'created_at'	=> date('Y-m-d H:i:s'),
					'updated_at'	=> date('Y-m-d H:i:s')
				);
				$exec = $this->db->insert('tbl_category', $data);
			}
			if ($exec) {
				$response = "1|Save data successfully.";
			} else {
				$response = "0|Save data failed.";
			}
		} else {
			# delete category
			print_r($_POST); die();
		}
		return $response;
	}
}