<?php 

	Class M_content extends CI_Model {
		public function __construct() {
        	parent::__construct();
    	}

    	public function pengantar(){
    		$query = $this->db->query(
    			"SELECT CONTENT AS CONTENT,
    					LAST_UPDATE AS LAST_UPDATE
				FROM 	foreword"
		);
		return $query->result_array();
    	}

    	public function sejarah(){
    		$query = $this->db->query(
    			"SELECT ID AS ID,
    					CONTENT AS CONTENT,
    					LAST_UPDATE AS LAST_UPDATE,
    					CATEGORY AS CATEGORY

				FROM 	history
				WHERE 	CATEGORY = 'Sejarah'"
		);
		return $query->result_array();
    	}

    	public function visimisi(){
    		$query2 = $this->db->query(
    			"SELECT ID AS ID,
    					CONTENT AS CONTENT,
    					LAST_UPDATE AS LAST_UPDATE,
    					CATEGORY AS CATEGORY

				FROM 	history
				WHERE 	CATEGORY = 'Visi dan Misi'"
		);
		return $query2->result_array();
    	}

    	public function siapa(){
    		$query = $this->db->query(
    			"SELECT ID AS ID,
    					CONTENT AS CONTENT,
    					LAST_UPDATE AS LAST_UPDATE

				FROM 	who"
		);
		return $query->result_array();
    	}

    	public function artikel(){
    		$query = $this->db->query(
    			"SELECT A.ID AS ID,
    					A.TITLE AS TITLE,
    					A.CONTENT AS CONTENT,
    					A.CATEGORY AS CATEGORY,
    					C.NAME AS CATEGORYNAME,
    					A.AUTHOR AS AUTHOR,
    					U.ID AS ID_USER,
    					U.FIRSTNAME AS FIRSTNAME,
    					U.LASTNAME AS LASTNAME,
    					U.STAT_EDU AS STAT_EDU,
    					A.POST_DATE AS POST_DATE,
    					A.LAST_UPDATE AS LAST_UPDATE,
    					A.IS_ACTIVE AS IS_ACTIVE
				FROM 	article A, category C, users U
				WHERE 	A.CATEGORY = C.ID AND A.AUTHOR = U.ID"
		);
		return $query->result_array();
    	}

        public function konsul(){
            $query = $this->db->query(
                "SELECT A.ID AS ID,
                        A.TITLE AS TITLE,
                        A.CONTENT AS CONTENT,
                        A.CATEGORY AS CATEGORY,
                        C.NAME AS CATEGORYNAME,
                        A.AUTHOR AS AUTHOR,
                        U.ID AS ID,
                        U.FIRSTNAME AS FIRSTNAME,
                        U.LASTNAME AS LASTNAME,
                        U.STAT_EDU AS STAT_EDU,
                        A.POST_DATE AS POST_DATE,
                        A.LAST_UPDATE AS LAST_UPDATE,
                        A.IS_ACTIVE AS IS_ACTIVE
                FROM    counsell C, users U
                WHERE   C.ID_USER = C AND A.AUTHOR = U.ID"
        );
        return $query->result_array();
        }

        public function baca_by_id($id){
            $query = $this->db->query(
                "SELECT A.ID AS ID,
                        A.TITLE AS TITLE,
                        A.CONTENT AS CONTENT,
                        A.CATEGORY AS CATEGORY,
                        C.NAME AS CATEGORYNAME,
                        A.AUTHOR AS AUTHOR,
                        U.ID AS ID_USER,
                        U.FIRSTNAME AS FIRSTNAME,
                        U.LASTNAME AS LASTNAME,
                        U.STAT_EDU AS STAT_EDU,
                        A.POST_DATE AS POST_DATE,
                        A.LAST_UPDATE AS LAST_UPDATE,
                        A.IS_ACTIVE AS IS_ACTIVE,
                        T.NAME AS TITLE_NAME,
                        T.ID AS TITLE_ID
                FROM    article A, category C, users U, title T
                WHERE   A.CATEGORY = C.ID AND A.AUTHOR = U.ID AND A.ID='$id' AND T.ID = U.TITLE"
        );
        return $query->result_array();
        }

        public function kategori(){
            $query = $this->db->query(
                "SELECT ID AS ID,
                        NAME AS NAME

                FROM    category"
        );
        return $query->result_array();
        }

        public function kategori_by_id($id){
            $query = $this->db->query(
                "SELECT ID AS ID,
                        NAME AS NAME

                FROM    category
                WHERE   ID = '$id'"
        );
        return $query->result_array();
        }

        public function faq(){
            $query = $this->db->query(
                "SELECT ID AS ID,
                        QUESTION AS QUESTION,
                        ANSWER AS ANSWER

                FROM    faq"
        );
        return $query->result_array();
        }
    }