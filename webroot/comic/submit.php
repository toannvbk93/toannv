<?php

include("../include/config.php");
include("../include/functions/import.php");

$dir = date('Y/m/d').'/t';
$uploadfolder = $config['pdir'].'/';


$SID = $_SESSION['USERID'];
if ($SID != "" && $SID >= 0 && is_numeric($SID))
{
	$ctime = 24 * 60 * 60;
	$utime = time() - $ctime;
	$query = "select count(*) as total from posts WHERE USERID='".mysql_real_escape_string($SID)."' AND time_added>='$utime'"; 
	$executequery = $conn->execute($query);
	$myuploads = $executequery->fields['total'];
	$quota = $config['quota'];
	if($myuploads >= $quota)
	{
		$error = $lang['188'];
	}
	else
	{
		$nsfw = 0;
		$source = "Tự Làm";
		$tags = "Chế ảnh";
		$title = cleanit($_REQUEST['title']);
		$imageData = $_REQUEST['imageData'];
		$url = '';
	
	//	$query="INSERT INTO posts SET USERID='".mysql_real_escape_string($SID)."', story='".mysql_real_escape_string($title)."', tags='".mysql_real_escape_string($tags)."', source='".mysql_real_escape_string($source)."', CID='".mysql_real_escape_string($CID)."', nsfw='".mysql_real_escape_string($nsfw)."', url='".mysql_real_escape_string($url)."', time_added='".time()."', date_added='".date("Y-m-d")."', active='0', pip='".$_SERVER['REMOTE_ADDR']."'";
		$query="INSERT INTO posts SET USERID='".mysql_real_escape_string($SID)."', story='".mysql_real_escape_string($title)."', tags='".mysql_real_escape_string($tags)."', blog='".mysql_real_escape_string($_POST['blog'])."', source='".mysql_real_escape_string($source)."', CID='".mysql_real_escape_string($CID)."', nsfw='".mysql_real_escape_string($nsfw)."', url='".mysql_real_escape_string($url)."', time_added='".time()."', date_added='".date("Y-m-d")."', active='0', pip='".$_SERVER['REMOTE_ADDR']."'";
							
		$result=$conn->execute($query);
		$pid = mysql_insert_id();
		
		$uploadedimage = $uploadfolder.'/'.$pid.'-temp.jpg';
		
		$imageData = str_replace('data:image/png;base64,', '', $imageData);
		$imageData = str_replace(' ', '+', $imageData);
		$data = base64_decode($imageData);
		file_put_contents($uploadedimage, $data);
		
		$theimageinfo = getimagesize($uploadedimage);
		if($theimageinfo[2] != 1 && $theimageinfo[2] != 2 && $theimageinfo[2] != 3)
		{
			$error = $lang['94'];
			$query = "DELETE FROM posts WHERE PID='".mysql_real_escape_string($pid)."'";
			$conn->execute($query);
			unlink($uploadedimage);
		}
		else
		{
			$approve_stories = $config['approve_stories'];
			if($approve_stories == "1")
			{
				$active = "0";
			}
			else
			{
				$active = "1";
			}
			
			if($uploadedimage != "")
			{
				$thepp = $pid;
				$thepp3 = $pid;
				if($theimageinfo[2] == 1)
				{
					$thepp .= ".gif";
					$thepp2 = ".gif";
					$thepp3 .= ".gif";
				}
				elseif($theimageinfo[2] == 2)
				{
					$thepp .= ".jpg";
					$thepp2 = ".jpg";
				}
				elseif($theimageinfo[2] == 3)
				{
					$thepp .= ".png";
					$thepp2 = ".png";
				}
				if($error == "")
				{
					$myvideoimgnew=$uploadfolder."/".$thepp;
					if(file_exists($myvideoimgnew))
					{
						unlink($myvideoimgnew);
					}
					copy ($uploadedimage , $myvideoimgnew);
					if($thepp2 != ".gif")
					{
						do_resize_image($myvideoimgnew, "700", "0", true, $uploadfolder."/t/l-".$thepp);
						do_resize_image($myvideoimgnew, "460", "0", true, $uploadfolder."/t/".$thepp);
						//do_resize_image($myvideoimgnew, "215", "0", true, $uploadfolder."/t/s-".$thepp);
						
						$image = imagecreatefrompng($myvideoimgnew);

						$thumb_width = 450;
						$thumb_height = 300;

						$width = imagesx($image);
						$height = imagesy($image);

						$original_aspect = $width / $height;
						$thumb_aspect = $thumb_width / $thumb_height;

						if ( $original_aspect >= $thumb_aspect )
						{
						   // If image is wider than thumbnail (in aspect ratio sense)
						   $new_height = $thumb_height;
						   $new_width = $width / ($height / $thumb_height);
						}
						else
						{
						   // If the thumbnail is wider than the image
						   $new_width = $thumb_width;
						   $new_height = $height / ($width / $thumb_width);
						}

						$thumb = imagecreatetruecolor( $thumb_width, $thumb_height );

						// Resize and crop
						imagecopyresampled($thumb,
						                   $image,
						                   0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
						                   0 - ($new_height - $thumb_height) / 2, // Center the image vertically
						                   0, 0,
						                   $new_width, $new_height,
						                   $width, $height);
						imagejpeg($thumb, $uploadfolder."/t/s-".$thepp);
					}
					else
					{
						imagick_gif_resize($myvideoimgnew, "700", "0", true, $uploadfolder."/t/l-".$thepp, $uploadfolder."/t/z-".$thepp);
						imagick_gif_resize($myvideoimgnew, "460", "0", true, $uploadfolder."/t/".$thepp, $uploadfolder."/t/z-".$thepp);
						//do_resize_image($myvideoimgnew, "215", "0", true, $uploadfolder."/t/s-".$thepp);
						
						$image = imagecreatefrompng($myvideoimgnew);

						$thumb_width = 450;
						$thumb_height = 300;

						$width = imagesx($image);
						$height = imagesy($image);

						$original_aspect = $width / $height;
						$thumb_aspect = $thumb_width / $thumb_height;

						if ( $original_aspect >= $thumb_aspect )
						{
						   // If image is wider than thumbnail (in aspect ratio sense)
						   $new_height = $thumb_height;
						   $new_width = $width / ($height / $thumb_height);
						}
						else
						{
						   // If the thumbnail is wider than the image
						   $new_width = $thumb_width;
						   $new_height = $height / ($width / $thumb_width);
						}

						$thumb = imagecreatetruecolor( $thumb_width, $thumb_height );

						// Resize and crop
						imagecopyresampled($thumb,
						                   $image,
						                   0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
						                   0 - ($new_height - $thumb_height) / 2, // Center the image vertically
						                   0, 0,
						                   $new_width, $new_height,
						                   $width, $height);
						imagejpeg($thumb, $uploadfolder."/t/s-".$thepp);
						$gifurl = $config['imagedir']."/gif.png";
						$gificon = imagecreatefrompng($gifurl);
						$photo = imagecreatefromgif($uploadfolder."/t/".$thepp);
						imagejpeg($photo, $uploadfolder."/t/".$thepp3, 90);
						$photo1 = imagecreatefromjpeg($uploadfolder."/t/".$thepp3);
						$wx = imagesx($photo1)/2 - imagesx($gificon)/2;
						$wy = imagesy($photo1)/2 - imagesy($gificon)/2;
						imagecopy($photo1, $gificon, $wx, $wy, 0, 0, imagesx($gificon), imagesy($gificon));
						imagegif($photo1, $uploadfolder."/t/".$thepp, 90);
						unlink($uploadfolder."/t/z-".$thepp);
						unlink($uploadfolder."/t/".$thepp3);
					}	
					if(file_exists($uploadfolder."/".$thepp))
					{				
						$queryupdateposts = "SELECT * FROM members WHERE USERID='".mysql_real_escape_string($SID)."'"; 
						$executequeryupdateposts = $conn->execute($queryupdateposts);
						$userposts = $executequeryupdateposts->fields['posts'];
						$updateposts = $userposts+1 ;
						$queryupdateposts2 = "UPDATE members SET posts='$updateposts' WHERE USERID='".mysql_real_escape_string($SID)."'"; 
						$executequeryupdateposts2 = $conn->execute($queryupdateposts2);
						
						$thumuc = $config['path'];
						//$query = "UPDATE posts SET pic='$thepp', path='$thumuc', active='$active' WHERE PID='".mysql_real_escape_string($pid)."'";
										
												
						$query = "UPDATE posts SET pic='$thepp', path='$thumuc', active='$active' WHERE PID='".mysql_real_escape_string($pid)."'";
						$conn->execute($query);
						unlink($uploadedimage);
												
						$up_points = $config['up_points'];
						if($up_points > 0)
						{
							$query = "UPDATE members SET points=points+$up_points WHERE USERID='".mysql_real_escape_string($SID)."'";
							$executequery=$conn->execute($query);
						}
						echo $config[baseurl].$config[postfolder].$pid."/?new=1";exit;
					}
				}
			}	
		}
	}
}
else
{ 
	echo $config[baseurl]."/login";exit;
}
?>