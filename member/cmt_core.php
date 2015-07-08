<?php
	class set_items
	{
		private $uid, $auth;

		public function setId($id)
		{
			$this->uid = $id;


		}
		public function setAuth($auth)
		{
			$this->auth= $auth;
		}
		public function getId()
		{
			return $this->uid;

		}

		public function getAuth()
		{
			return $this->auth;
		}
	}

	class create_new_cmt extends set_items

	{
		var $uid , $auth;

		public $content;
		public function setitems()
		{
			 $this->uid = set_items::getId();
			 $this->auth = set_items::getAuth();

		}
		public function setContent($cont)
		{
			$this->content=$cont;

		}
		public function setPid($pcid)
		{
			$this->pid=$pcid;

		}
		public function getContent()
		{
			return $this->content;

		}
		public function getPid()
		{
			return $this->pid;

		}
		public function new_cmt()
		{
			require_once('../dbConnect.php');
			$c = self::getContent();
			$p = self::getPid();
			if($c == NULL)
			{
				return 0;
			}
			$sql = dbConnect();
			if(mysqli_query($sql, "INSERT INTO iii_posts.$p VALUES ('','$this->uid','$c',now())"))
			{
				return 1;
			}
			else{
				return 0;
			}
		}
	}


?>
