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

	class create_new_post extends set_items

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
		public function getContent()
		{
			return $this->content;

		}
		public function new_post()
		{
			require_once('../dbConnect.php');
			$c = self::getContent();
			if($c == NULL)
			{
				return 0;
			}
			$sql = dbConnect();
			if(mysqli_query($sql, "INSERT INTO iii_posts.posts VALUES ('','$c','$this->uid', '$this->auth',now())"))
			{	
				$query = mysqli_query($sql, "SELECT * FROM iii_posts.posts WHERE posted_on = now()  ");
				$row = mysqli_fetch_array($query);
				$pid = $row[0];
				$news_auth = $row['auth'];
				//Auth Processing 
				$array_auth = self::getAuth($news_auth);
				for($i= 0 ; $i < count($array_auth) ; $i++)
				{	
					$query= mysqli_query($sql,"SELECT * from iii.users WHERE auth = '$array_auth[$i]' ");
					$q = mysqli_num_rows($query);
					foreach ($query as $rows) 
					{
						$id = $rows['id'];
						if(mysqli_query($sql, "INSERT INTO iii_newsfeed.$id values('$pid','0',now())"))
						{	
							continue;
						}
						else
						{	
							
							continue;
						}
					}

				}
				
				$string = "CREATE TABLE iii_posts.$pid (
							uid INT(30),
							comments VARCHAR(500),
							posted TIMESTAMP 
							)";
				
				
				if(mysqli_query($sql,$string))
				{
					
					return 1;

				}
				else {
					
					return 0;
				}
				
			}
			else{

				return 0;
			}
			
		}
		public function getAuth($a)
		{	
			if($a == 11)
			{
				$types = array('11','2','22','3','33','4','44','5','55','7','77');
				return $types;
			}
			$types = array($a,77);
			if(strlen($a)>1)
			{
				$t = substr($a,1);
				array_push($types, $t);
				return $types;
			}
			else
			{
				$t = $a.$a;
				array_push($types,$t);
				return $types;
			}
		}
			

		
		
	}

	class news_feed extends set_items
	{
		var $uid, $auth;
		public function setitems()
		{
			$this->uid = set_items::getId();
			$this->auth = set_items::getAuth();
		}
		public function insert_into()
		{

		}

	}


?>