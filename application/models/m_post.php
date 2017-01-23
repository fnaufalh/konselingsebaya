<?php 

	Class M_post extends CI_Model {
		public function __construct() {
        	parent::__construct();
    	}

    	public function pengantar($pengantar){
    		$this->db->from('foreword');
    		$q = $this->db->get();
    		$rowcount = $q->num_rows();
    		if ($rowcount > 0) {
    			$this->db->trans_start();
				$this->db->query(
					"UPDATE foreword
					SET CONTENT =  '$pengantar'
					");
				$this->db->trans_complete();
    		}else{
    			$this->db->trans_start();
				$this->db->query(
					"INSERT INTO foreword (CONTENT) 
					VALUES('$pengantar')
					");
				$this->db->trans_complete();
    		}
    		
			if ($this->db->trans_status() === FALSE) {
				return FALSE;
			}else{
				return TRUE;
			}
    	}

    	public function sejarah($sejarah){
    		$this->db->from('history');
    		$this->db->where('CATEGORY', 'Sejarah');
    		$q = $this->db->get();
    		$rowcount = $q->num_rows();
    		if ($rowcount > 0) {
    			$this->db->trans_start();
				$this->db->query(
					"UPDATE history
					SET 	CONTENT =  '$sejarah'
					WHERE 	CATEGORY = 'Sejarah'
					");
				$this->db->trans_complete();
    		}else{
    			$this->db->trans_start();
				$this->db->query(
					"INSERT INTO history (CONTENT, CATEGORY) 
					VALUES('$sejarah', 'Sejarah')
					");
				$this->db->trans_complete();
    		}
    		
			if ($this->db->trans_status() === FALSE) {
				return FALSE;
			}else{
				return TRUE;
			}
    	}

    	public function visimisi($visimisi){
    		$this->db->from('history');
    		$this->db->where('CATEGORY', 'Visi dan Misi');
    		$q = $this->db->get();
    		$rowcount = $q->num_rows();
    		if ($rowcount > 0) {
    			$this->db->trans_start();
				$this->db->query(
					"UPDATE history
					SET 	CONTENT =  '$visimisi'
					WHERE 	CATEGORY = 'Visi dan Misi'
					");
				$this->db->trans_complete();
    		}else{
    			$this->db->trans_start();
				$this->db->query(
					"INSERT INTO history (CONTENT, CATEGORY) 
					VALUES('$visimisi', 'Visi dan Misi')
					");
				$this->db->trans_complete();
    		}
    		
			if ($this->db->trans_status() === FALSE) {
				return FALSE;
			}else{
				return TRUE;
			}
    	}

    	public function siapa($siapa){
    		$this->db->from('who');
    		$q = $this->db->get();
    		$rowcount = $q->num_rows();
    		if ($rowcount > 0) {
    			$this->db->trans_start();
				$this->db->query(
					"UPDATE who
					SET CONTENT =  '$siapa'
					");
				$this->db->trans_complete();
    		}else{
    			$this->db->trans_start();
				$this->db->query(
					"INSERT INTO who (CONTENT) 
					VALUES('$siapa')
					");
				$this->db->trans_complete();
    		}
    		
			if ($this->db->trans_status() === FALSE) {
				return FALSE;
			}else{
				return TRUE;
			}
    	}

    	public function kategori($kategori){
    		$this->db->from('category');
    		$q = $this->db->get();
    		$rowcount = $q->num_rows();
    		
    			$this->db->trans_start();
				$this->db->query(
					"INSERT INTO category (NAME) 
					VALUES('$kategori')
					");
				$this->db->trans_complete();
    		
			if ($this->db->trans_status() === FALSE) {
				return FALSE;
			}else{
				return TRUE;
			}
    	}

    	public function hapus_kategori($id){
    		$this->db->trans_start();
				$this->db->query(
					"DELETE FROM category
					 WHERE ID = '$id'
					");
				$this->db->trans_complete();
    		
			if ($this->db->trans_status() === FALSE) {
				return FALSE;
			}else{
				return TRUE;
			}
    	}

    	public function edit_kategori($id, $category){
    		
    		$this->db->trans_start();
				$this->db->query(
					"UPDATE category
					 SET NAME = '$category'
					 WHERE ID = '$id'
					");
				$this->db->trans_complete();
    		
			if ($this->db->trans_status() === FALSE) {
				return FALSE;
			}else{
				return TRUE;
			}
    	}

    	public function faq($question, $answer){
    		$this->db->from('faq');
    		$q = $this->db->get();
    		$rowcount = $q->num_rows();
    		
    			$this->db->trans_start();
				$this->db->query(
					"INSERT INTO faq (QUESTION, ANSWER) 
					VALUES('$question', '$answer')
					");
				$this->db->trans_complete();
    		
			if ($this->db->trans_status() === FALSE) {
				return FALSE;
			}else{
				return TRUE;
			}
    	}
    }