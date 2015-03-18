 <?
 // دالة التحقق من اسم المستخدم والاميل

    function insertUserData( $name, $pass ,$email ){
		
        $sql = "INSERT INTO table_users () VALUES ()";
		$result = mysql_query( $sql );
        
		if( $result ){
            
			return true;
			
        }else{
			
            return false;
			
        }
    }
	
    function insertLessonData( $title , $text , $topId , $userId ){
		
        $sql = "INSERT INTO table () VALUES ()";
        $result = mysql_query( $sql );
		
        if( $result ){
			
            return true;
			
        }else{
           
		   return false;
		   
        }
    }
	
    function insertTopic( $title , $text , $img ){
       
		$sql = "INSERT INTO topic VALUES ( '' , '".addslashes($title)."' , '".addslashes($text)."' , '".addslashes($img)."' )";
        $result = mysql_query( $sql );
      
	  if( $result ){
			
            return true;
			
        }else{
            
			return false;
        
		}
    }
	
    function getUserID( $user ){
		
        $sql = "SELECT * FROM users WHERE user_name = '".$user."'";
        $result = mysql_query( $sql );
		
        if( $result ){
			
            $row = mysql_fetch_array( $result );
            return $row['user_id'];
			
        }else{
			
            return false;
			
        }
    }

?> 
