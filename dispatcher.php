<?php 
	if (isset($_FILES['picture'])){
		$upload = $_FILES['picture'];
		if ($upload['error'] == 0){
			if (copy($upload['tmp_name'],
					"./upload/{$upload['name']}")){
				echo 'Upload success.'."<br/>";
				echo "filename" . $_POST["filename"] . "<br/>";
				echo "Upload: " . $_FILES["picture"]["name"] . "<br />";
				echo "Type: " . $_FILES["picture"]["type"] . "<br />";
				echo "Size: " . ($_FILES["picture"]["size"] / 1024) . " Kb<br />";
				echo "Stored in: " . $_FILES["picture"]["tmp_name"];
			}else{
				echo 'Copy fail';
			}
		}else{
			echo 'Upload Fail.';
		}
		
		
	}
?>