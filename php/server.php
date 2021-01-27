<?php  
	
	header("Content-Type: multipart/form-data; boundary=xxBOUNDARYxx");

	for ($i=0; $i < count($_FILES["files"]['name']); $i++) { 
		move_uploaded_file($_FILES["files"]['tmp_name'][$i], '../img_uploaded/'.$_FILES["files"]['name'][$i]);
	}

?>
