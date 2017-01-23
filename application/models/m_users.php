<?php 

	Class M_users extends CI_Model {
		public function __construct() {
        	parent::__construct();
    	}

    	public function insertuser(){
    		$firstname 	= $_GET['firstname'];
			$lastname 	= $_GET['lastname'];
			$username	= $_GET['username'];
			$repassword	= $_GET['repassword'];
			$statedu	= $_GET['statedu'];
			$birth		= $_GET['birth'];
			$this->db->trans_start();
			$this->db->query("INSERT INTO users(USERNAME, PASSWORD, FIRSTNAME, LASTNAME, BIRTHDATE, STAT_EDU) 
								VALUES('$username','$repassword','$firstname','$lastname','$birth','$statedu')");
			$this->db->trans_complete();
			if ($this->db->trans_status() === FALSE) {
				return FALSE;
			}else{
				return TRUE;
			}
    	}

    	function login($username, $password)
		 {
		   $this -> db -> select('ID, USERNAME, PASSWORD, TITLE, IS_ACTIVE, FIRSTNAME, LASTNAME, BIRTHDATE, STAT_EDU');
		   $this -> db -> from('users');
		   $this -> db -> where('USERNAME', $username);
		   $this -> db -> where('PASSWORD', $password);
		   $this -> db -> limit(1);
		 
		   $query = $this -> db -> get();
		 
		   if($query -> num_rows() == 1)
		   {
		     return $query->result();
		   }
		   else
		   {
		     return false;
		   }
		 }

		public function pengguna(){
            $query = $this->db->query(
                "SELECT U.ID AS ID,
    					U.USERNAME AS USERNAME,
    					U.TITLE AS TITLEID,
    					T.NAME AS TITLENAME,
    					U.IS_aCTIVE AS IS_ACTIVE,
    					U.FIRSTNAME AS FIRSTNAME,
    					U.LASTNAME AS LASTNAME,
    					U.BIRTHDATE AS BIRTHDATE,
    					U.STAT_EDU AS STAT_EDU

				FROM 	users U, title T
				WHERE 	U.TITLE = T.ID"
        );
        return $query->result_array();
        }

        public function jabatan(){
        	$query = $this->db->query(
        		"SELECT ID AS ID,
        				NAME AS NAME

        		FROM 	title"
        	);
        	return $query->result_array();
        }

        public function hapus_pengguna($id){
    		$this->db->trans_start();
				$this->db->query(
					"DELETE FROM users
					 WHERE ID = '$id'
					");
				$this->db->trans_complete();
    		
			if ($this->db->trans_status() === FALSE) {
				return FALSE;
			}else{
				return TRUE;
			}
    	}

		function profesional(){
			$query = $this->db->query(
    			"SELECT P.ID AS IDPROFILE,
    					P.JOB AS JOB,
    					P.MOTTO AS MOTTO,
    					U.ID AS ID,
    					U.USERNAME AS USERNAME,
    					U.TITLE AS TITLEID,
    					T.NAME AS TITLENAME,
    					U.IS_aCTIVE AS IS_ACTIVE,
    					U.FIRSTNAME AS FIRSTNAME,
    					U.LASTNAME AS LASTNAME,
    					U.BIRTHDATE AS BIRTHDATE,
    					U.STAT_EDU AS STAT_EDU,
    					U.AVATAR AS AVATAR


				FROM 	profile P, users U, title T
				WHERE 	P.ID_USER = U.ID AND U.TITLE = '2' AND U.TITLE = T.ID"
		);
		return $query->result_array();
		}

		function konselor(){
			$query = $this->db->query(
    			"SELECT P.ID AS ID,
    					P.ID_USER AS ID_USER,
    					P.JOB AS JOB,
    					P.MOTTO AS MOTTO,
    					U.FIRSTNAME AS FIRSTNAME,
    					U.LASTNAME AS LASTNAME,
    					T.NAME AS TITLENAME,
    					U.AVATAR AS AVATAR

				FROM 	profile P, users U, title T
				WHERE 	P.ID_USER = U.ID AND U.TITLE = '3' AND U.TITLE = T.ID"
		);
		return $query->result_array();
		}

		function konselor_by_id($id){
			$query = $this->db->query(
    			"SELECT P.ID AS ID,
    					P.ID_USER AS ID_USER,
    					P.JOB AS JOB,
    					P.MOTTO AS MOTTO,
    					U.FIRSTNAME AS FIRSTNAME,
    					U.LASTNAME AS LASTNAME,
    					T.NAME AS TITLENAME,
    					U.AVATAR AS AVATAR

				FROM 	profile P, users U, title T
				WHERE 	P.ID_USER = U.ID AND U.ID= '$id' AND U.TITLE = T.ID"
		);
		return $query->result_array();
		}

		public function pengguna_by_id($id){
    		
				$query = $this->db->query(
					"SELECT U.ID AS ID,
    						U.USERNAME AS USERNAME,
    						U.PASSWORD AS PASSWORD,
    						U.TITLE AS TITLEID,
    						T.NAME AS TITLENAME,
    						U.IS_aCTIVE AS IS_ACTIVE,
    						U.FIRSTNAME AS FIRSTNAME,
    						U.LASTNAME AS LASTNAME,
    						U.BIRTHDATE AS BIRTHDATE,
    						U.STAT_EDU AS STAT_EDU,
    						U.AVATAR AS AVATAR

					 FROM 	users U, title T
					 WHERE 	U.ID = $id AND U.TITLE = T.ID
					");
    		
			return $query->result_array();
    	}

		public function edit_pengguna($id){
    		
    		$this->db->trans_start();
				$this->db->query(
					"UPDATE users
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
    }