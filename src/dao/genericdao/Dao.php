<?php

interface GenericDao {

	
	public function save($o);
	
	public function findById($id);
	
	public function update($o);
	
	public function delete($id);
	
	public function getAll();

}
?>