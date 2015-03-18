<?php 
	#########################################
	#										#
	#	Coded by :	Mohammed Taha			#
	#	Web Site :	www.king-arb.com		#
	#	E-mail   :	kingarb4@gmail.com		#
	#	Facebook :	fb.com/imtaha01			#
	#										#
	#########################################
	class connect_c {
		
		private $host, $host_user, $host_pass, $host_db;
		
		public function __construct($c_host, $c_user, $c_pass, $c_db){
		
			$this->host = $c_host;
			$this->host_user = $c_user;
			$this->host_pass = $c_pass;
			$this->host_db = $c_db;
		
		}
		
		public function conect (){
		
			$connect = new mysqli($this->host, $this->host_user, $this->host_pass, $this->host_db);
			
			if($connect->connect_error){
				die("Error conect:".$connect->connect_error);
			}
		
		}
		/*
		public function select (){
		
			
		
		}*/
	
	}
	####################################################################	
	#                                                                  #
	#	//How to use the class:                                        #
	#                                                                  #
	#	$connect_db = new connect_c("localhost","user","pass","db");   #
	#	                                                               #
	#	$connect_db->conect();                                         #
	####################################################################
?>
