<?php
// File php ini digunakan untuk melakukan apa yang kita ingin lakukan 
// Ketika getState, text akan dibaca dan mengembalikan jumlah baris
// Ketika update, file akan dibaca dan setiap baris baru disetel ulang
// Ketika send, pesan diproses dan kemudian ditulis ke dalam file teks sebagai baris baru


    $function = $_POST['function'];
    // Menyediakan array kosong untung menyimpan nilai yang pada akhirnya akan dikodekan ke JSON di akhir dan dteruskan kembali
    $log = array();
    // Seleksi kondisi(Switch Case) dilakukan untuk mencakup mengambil nilai dan setiap fungsi yang mungkin
    switch($function) {
        // Jika getState
    	 case('getState'):
        	 if(file_exists('chat.txt')){
               $lines = file('chat.txt');
        	 }
             $log['state'] = count($lines); 
        	 break;	
    	// Jika Update
    	 case('update'):
        	$state = $_POST['state'];
        	if(file_exists('chat.txt')){
        	   $lines = file('chat.txt');
        	 }
        	 $count =  count($lines);
        	 if($state == $count){
        		 $log['state'] = $state;
        		 $log['text'] = false;
        		 
        		 }
        		 else{
        			 $text= array();
        			 $log['state'] = $state + count($lines) - $state;
        			 foreach ($lines as $line_num => $line)
                       {
        				   if($line_num >= $state){
                         $text[] =  $line = str_replace("\n", "", $line);
        				   }
         
                        }
        			 $log['text'] = $text; 
        		 }
        	  
             break;
    	//  Jika Send
    	 case('send'):
		  $nickname = htmlentities(strip_tags($_POST['nickname']));
			 $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
			  $message = htmlentities(strip_tags($_POST['message']));
		 if(($message) != "\n"){
        	
			 if(preg_match($reg_exUrl, $message, $url)) {
       			$message = preg_replace($reg_exUrl, '<a href="'.$url[0].'" target="_blank">'.$url[0].'</a>', $message);
				} 
			 
        	
        	 fwrite(fopen('chat.txt', 'a'), "<span>". $nickname . "</span>" . $message = str_replace("\n", " ", $message) . "\n"); 
		 }
        	 break;
    	
    }
    
    echo json_encode($log);

?>