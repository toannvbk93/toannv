<?php

$mobile = "1";

$config['maindir'] = '/Applications/XAMPP/xamppfiles/htdocs/webroot/m';
$config['mobiledir'] = '/Applications/XAMPP/xamppfiles/htdocs/webroot/m';
$config['mobileurl'] = 'localhost/webroot/m';

function insert_get_advertisement($var)
{
        global $conn;
        $query="SELECT code FROM advertisements WHERE AID='".mysql_real_escape_string($var[AID])."' AND active='1' limit 1";
        $executequery=$conn->execute($query);
        $getad = $executequery->fields[code];
		echo strip_mq_gpc($getad);
}
function insert_get_fav_count($var)
{
    global $conn;
	$query="SELECT count(*) as total FROM posts_favorited WHERE PID='".intval($var[PID])."'";
	$executequery=$conn->execute($query);
	$total = $executequery->fields[total];
	return intval($total);
}
function cleanit($text)
{
	return htmlentities(strip_tags(stripslashes($text)), ENT_COMPAT, "UTF-8");
}

function verify_valid_email($emailtocheck)
{
      $eregicheck = "/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i";
       return preg_match($eregicheck, $emailtocheck);
}

function do_resize_image($file, $width = 0, $height = 0, $proportional = false, $output = 'file')
{
	if($height <= 0 && $width <= 0)
	{
	  return false;
	}

	$info = getimagesize($file);
	$image = '';

	$final_width = 0;
	$final_height = 0;
	list($width_old, $height_old) = $info;

	if($proportional)
	{
	  if ($width == 0) $factor = $height/$height_old;
	  elseif ($height == 0) $factor = $width/$width_old;
	  else $factor = min ( $width / $width_old, $height / $height_old);

	  $final_width = round ($width_old * $factor);
	  $final_height = round ($height_old * $factor);

	  if($final_width > $width_old && $final_height > $height_old)
	  {
	  	  $final_width = $width_old;
		  $final_height = $height_old;

	  }
	}
	else
	{
	  $final_width = ( $width <= 0 ) ? $width_old : $width;
	  $final_height = ( $height <= 0 ) ? $height_old : $height;
	}

	switch($info[2])
	{
	  case IMAGETYPE_GIF:
		$image = imagecreatefromgif($file);
	  break;
	  case IMAGETYPE_JPEG:
		$image = imagecreatefromjpeg($file);
	  break;
	  case IMAGETYPE_PNG:
		$image = imagecreatefrompng($file);
	  break;
	  default:
		return false;
	}

	$image_resized = imagecreatetruecolor( $final_width, $final_height );

	if(($info[2] == IMAGETYPE_GIF) || ($info[2] == IMAGETYPE_PNG))
	{
	  $trnprt_indx = imagecolortransparent($image);

	  if($trnprt_indx >= 0)
	  {
		$trnprt_color    = imagecolorsforindex($image, $trnprt_indx);
		$trnprt_indx    = imagecolorallocate($image_resized, $trnprt_color['red'], $trnprt_color['green'], $trnprt_color['blue']);
		imagefill($image_resized, 0, 0, $trnprt_indx);
		imagecolortransparent($image_resized, $trnprt_indx);
	  }
	  elseif($info[2] == IMAGETYPE_PNG)
	  {
		imagealphablending($image_resized, false);
		$color = imagecolorallocatealpha($image_resized, 0, 0, 0, 127);
		imagefill($image_resized, 0, 0, $color);
		imagesavealpha($image_resized, true);
	  }
	}
	imagecopyresampled($image_resized, $image, 0, 0, 0, 0, $final_width, $final_height, $width_old, $height_old);

	switch( strtolower($output))
	{
	  case 'browser':
		$mime = image_type_to_mime_type($info[2]);
		header("Content-type: $mime");
		$output = NULL;
	  break;
	  case 'file':
		$output = $file;
	  break;
	  case 'return':
		return $image_resized;
	  break;
	  default:
	  break;
	}

	if(file_exists($output))
	{
		@unlink($output);
	}

	switch($info[2])
	{
	  case IMAGETYPE_GIF:
		imagegif($image_resized, $output);
	  break;
	  case IMAGETYPE_JPEG:
		imagejpeg($image_resized, $output, 100);
	  break;
	  case IMAGETYPE_PNG:
		imagepng($image_resized, $output);
	  break;
	  default:
		return false;
	}
	return true;
}

function imagick_gif_resize($file, $width = 0, $height = 0, $proportional = false, $output = 'file', $temppic)
{
	if($height <= 0 && $width <= 0)
	{
	  return false;
	}

	$info = getimagesize($file);
	$image = '';

	$final_width = 0;
	$final_height = 0;
	list($width_old, $height_old) = $info;

	if($proportional)
	{
	  if ($width == 0) $factor = $height/$height_old;
	  elseif ($height == 0) $factor = $width/$width_old;
	  else $factor = min ( $width / $width_old, $height / $height_old);

	  $final_width = round ($width_old * $factor);
	  $final_height = round ($height_old * $factor);

	  if($final_width > $width_old && $final_height > $height_old)
	  {
	  	  $final_width = $width_old;
		  $final_height = $height_old;

	  }
	}
	else
	{
	  $final_width = ( $width <= 0 ) ? $width_old : $width;
	  $final_height = ( $height <= 0 ) ? $height_old : $height;
	}

	$owh = $width_old."x".$height_old;
	$nwh = $final_width."x".$final_height;
	if(!file_exists($temppic))
	{
		$runinbg = "convert ".$file." -coalesce ".$temppic;
		$runconvert = exec("$runinbg");
	}
	$runinbg = "convert -size ".$owh." ".$temppic." -resize ".$nwh." ".$output;
	$runconvert = exec("$runinbg");
	return true;
}

function makeseo($str,$separator = 'dash',$lowercase = TRUE)
    {

        //decode html entities
$str = html_entity_decode($str,ENT_QUOTES,'UTF-8');

//make lowercase
$str = mb_strtolower($str, 'UTF-8');

//replace special chars, for UTF8 encoding it needs to be defined as array
$trans = array(
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'�'=>'o',
'O'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'o',
'?'=>'u',
'?'=>'u',
'�'=>'u',
'U'=>'u',
'?'=>'u',
'?'=>'u',
'?'=>'u',
'?'=>'u',
'?'=>'u',
'?'=>'u',
'?'=>'u',
'?'=>'u',
'?'=>'u',
'?'=>'u',
'?'=>'u',
'?'=>'u',
'?'=>'u',
'??'=>'u',
'?'=>'u',
'?'=>'u',
'?'=>'u',
'?'=>'u',
'?'=>'u',
'�'=>'a',
'A'=>'a',
'?'=>'a',
'?'=>'a',
'�'=>'a',
'A'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'a?'=>'a',
'o?'=>'o',
'?'=>'a',
'?'=>'�',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'a',
'?'=>'e',
'?'=>'e',
'?'=>'e',
'?'=>'e',
'?'=>'e',
'?'=>'e',
'?'=>'e',
'?'=>'e',
'?'=>'e',
'?'=>'e',
'�'=>'e',
'E'=>'e',
'�'=>'e',
'E'=>'e',
'?'=>'e',
'?'=>'e',
'?'=>'e',
'?'=>'e',
'?'=>'e',
'?'=>'e',
'�'=>'e',
'E'=>'e',
'?'=>'i',
'?'=>'i',
'?'=>'i',
'?'=>'i',
'?'=>'i',
'?'=>'i',
'?'=>'i',
'?'=>'i',
'?'=>'i',
'?'=>'i',
'?'=>'y',
'?'=>'y',
'?'=>'y',
'?'=>'y',
'?'=>'y',
'?'=>'y',
'?'=>'y',
'?'=>'y',
'?'=>'y',
'?'=>'y',
'?'=>'d',
'?'=>'d',
'['=>'',
']'=>'',
';'=>'',
'^'=>'',
'@'=>'',
'$'=>'',
'>'=>'',
'<'=>'',
'~'=>'',
'{'=>'',
'}'=>'',
'�'=>'',
'�'=>'',
'�'=>'',
'?'=>'a',
'"'=>'',
'�?'=>'o',
'�?'=>'a',
'??'=>'o',
'y?'=>'y',
'?'=>'a',
'a?'=>'a',
'�?'=>'e',
'i?'=>'i',
'a?'=>'a',
'*'=>' ',
'o?'=>'o',
'�?'=>'e',
'A?'=>'a',
'�?'=>'a',
'�?'=>'o',
'a?'=>'a',
'??'=>'o',
'�?'=>'e',
'`'=>'',
'&gt;'=>'',
'&lt;'=>'',
'&quot;'=>'',
'&amp;'=>'',
'%'=>'',
'a?'=>'a',
'�?'=>'a',
'|'=>'',
'�'=>'',
'�'=>'',
'�'=>'',
'='=>'',
'??'=>'a',
'??'=>'o',
'�?'=>'o',
'??'=>'a',
'y?'=>'y',
'e?'=>'e',
'e?'=>'e',
'u?'=>'u'
);
$str = strtr($str, $trans);

        if ($separator == 'dash')
        {

            $search     = '_';
            $replace    = '-';

        }else
        {

            $search     = '-';
            $replace    = '_';

        }

        $trans = array(
                        '&\#\d+?;'              => '',
                        '&\S+?;'                => '',
                        '\s+'                   => $replace,
                        $replace.'+'            => $replace,
                        $replace.'$'            => $replace,
                        '^'.$replace            => $replace,
                        '\.+$'                  => ''
                        );

        $str = strip_tags($str);
        $str = preg_replace("#\/#ui",'-',$str);

        foreach ($trans AS $key => $val)
        {

            $str = preg_replace("#".$key."#ui", $val, $str);

        }

        if($lowercase === TRUE)
        {

            $str = mb_strtolower($str,'UTF-8');

        }

        return trim(stripslashes($str));

    }

function download_photo($url, $saveto)
{
	global $config;
	if (!curlSaveToFile($url, $saveto))
	{
		return false;
	}
	return true;
}

function curlSaveToFile( $url, $local )
{
	$ch = curl_init();
	$fh = fopen($local, 'w');
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FILE, $fh);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_VERBOSE, false);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_NOPROGRESS, true);
	curl_setopt($ch, CURLOPT_USERAGENT, '"Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.11) Gecko/20071204 Ubuntu/7.10 (gutsy) Firefox/2.0.0.11');
	curl_exec($ch);

	if( curl_errno($ch) ) {
		return false;
	}

	curl_close($ch);
	fclose($fh);

	if( filesize($local) > 10 ) {
		return true;
	}

	return false;
}

function insert_return_youtube($a)
{
    $embedcode = '<object width="100%" height="320"><param name="movie" value="http://www.youtube.com/v/AWECDE&hl=en&fs=1"></param><param name="allowFullScreen" value="true"></param><param name="wmode" value="opaque" /></param><embed src="http://www.youtube.com/v/AWECDE&hl=en&fs=1" type="application/x-shockwave-flash" allowfullscreen="true" width="100%" height="320" wmode="opaque"></embed></object>';
	$item = $a[youtube];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}

function insert_return_fod($a)
{
    $embedcode = '<iframe src="http://www.funnyordie.com/embed/AWECDE" width="100%" height="320" frameborder="0"></iframe>';
	$item = $a[fod];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}
function insert_return_youtube2($a)
{
    $embedcode = '<img width="320" height="180" src="http://img.youtube.com/vi/AWECDE/mqdefault.jpg">';
	$item = $a[youtube];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}


function insert_return_vfy2($a)
{
    $embedcode = 'Zing Mp3 chưa hỗ trợ trên mobile';
	$item = $a[vfy];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}


function insert_return_vfy($a)
{
	 $embedcode = '<iframe width="700" height="105" src="http://mp3.zing.vn/embed/song/AWECDE?autostart=true" frameborder="0" allowfullscreen="true"></iframe>';
   // $embedcode = '<iframe width="660" height="105" frameborder="0" mozallowfullscreen="true" webkitallowfullscreen="true" allowfullscreen="true" src="http://dev.mp3.zing.vn/embed/song/AWECDE" id="zmp3Player"> </iframe>';
	$item = $a[vfy];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}

function insert_return_vmo($a)
{
    $embedcode = '<iframe src="http://player.vimeo.com/video/AWECDE" width="100%" height="320" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
	$item = $a[vmo];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}

function update_post_viewed ($a)
{
	global $conn;
	$query = "UPDATE posts SET view = view + 1 WHERE PID='".mysql_real_escape_string($a)."'";
	$executequery=$conn->execute($query);
}

function update_last_viewed($a)
{
	global $conn;
	$query = "UPDATE posts SET last_viewed='".time()."' WHERE PID='".mysql_real_escape_string($a)."'";
	$executequery=$conn->execute($query);
}

function update_your_viewed ($a)
{
	global $conn;
	$query = "UPDATE members SET yourviewed  = yourviewed  + 1 WHERE USERID='".mysql_real_escape_string($a)."'";
	$executequery=$conn->execute($query);
}

function update_you_viewed($a)
{
	global $conn, $config;
	$view_points = $config['view_points'];
	if($view_points > 0)
	{
		$addme = ", points=points+$view_points";
	}
	$query = "UPDATE members SET youviewed = youviewed + 1 $addme WHERE USERID='".mysql_real_escape_string($a)."'";
	$executequery=$conn->execute($query);
}

function update_hot_post($post_id) {
	global $conn, $config;

	$query = "SELECT view FROM posts WHERE PID='".mysql_real_escape_string($post_id)."' AND active='1' AND phase='1' LIMIT 1";
	$executequery = $conn->Execute($query);
    if ($executequery->recordcount()>0) {
    	$view = $executequery->fields['view'];
    	if($view>=$config['mtrend']) {
    		$update_query = "UPDATE posts SET phase='2', htime='".time()."' WHERE PID='".mysql_real_escape_string($post_id)."' AND phase='1'";
    		$executequery = $conn->Execute($update_query);
    	}
    }
}

function session_verification()
{
	if ($_SESSION['USERID'] != "")
	{
		if (is_numeric($_SESSION['USERID']))
		{
			return true;
		}
	}
	else
		return false;
}

function insert_get_fav_status($var)
{
	global $conn;
	$query="SELECT count(*) as total FROM posts_favorited WHERE USERID='".mysql_real_escape_string($_SESSION[USERID])."' AND PID='".intval($var[PID])."'";
	$executequery=$conn->execute($query);
	$total = $executequery->fields[total];
	return intval($total);
}

function insert_get_vote_status($var) {
	global $conn, $config, $lang;

	$vote_status  = 0;
	$user_id      = intval($_SESSION['USERID']);
	$post_id 	  = intval($var['PID']);
	$query        = "SELECT COUNT(*) AS total FROM posts_favorited WHERE USERID='{$user_id}' AND PID='{$post_id}'";
	$executequery = $conn->Execute($query);
	$total        = $executequery->fields['total'];

	if(intval($total) > 0 ) {
		$vote_status = 1;
	} else {
		$query        = "SELECT COUNT(*) AS total FROM posts_unfavorited WHERE USERID='{$user_id}' AND PID='{$post_id}'";
		$executequery = $conn->Execute($query);
		$total        = $executequery->fields['total'];
		if(intval($total) > 0 )
			$vote_status = -1;
		else
			$vote_status = 0;
	}

	return intval($vote_status);
}

function insert_get_member_profilepicture($var) {
	global $conn;
	$query="SELECT profilepicture FROM members WHERE USERID='".mysql_real_escape_string($var['USERID'])."' limit 1";
	$executequery=$conn->execute($query);
	$results = $executequery->fields['profilepicture'];
	if ($results == "")
		return "noprofilepicture.jpg";
	else
		return $results;
}


function is_animated_gif($filename)
{
	$data = "";
	$data = file_get_contents($filename);
	if (substr($data, 0, 6) == "GIF87a")  {
	}
	$ch = substr($data, 10, 1);
	if ((ord($ch) & 128) == 128) {
		$global_color_table_size = floor(pow(2,  (ord($ch) & 7)+1 )) * 3;
		$offset = 13 + $global_color_table_size;
	} else {
		$offset = 13;
	}
	$frame_count = 0;
	$round = 0;
	$nothinghappened = false;
	$the_end = false;
	while ($offset < strlen($data) && !$nothinghappened && !$the_end) {
		$nothinghappened = true;
		$round++;
		if (substr($data, $offset, 2) == "\x21\xFF") {
			$offset += 11 + 3;
			while ($offset < strlen($data) && $data[$offset] != "\x00") {
				$offset += 1 + ord($data[$offset]);
			}
			if (substr($data, $offset, 1) != "\x00")  {
				return 661;
			}
			$offset++;
			$nothinghappened = false;
		}
			if (substr($data, $offset, 2) == "\x21\xFE") {
			$offset += 2;
			while ($offset < strlen($data) && $data[$offset] != "\x00") {
				$offset += 1 + ord($data[$offset]);
			}
			if (substr($data, $offset, 1) != "\x00") {
				return 662;
			}
			$offset++;
			$nothinghappened = false;
		}
		if (substr($data, $offset, 2) == "\x21\x01") {
			$offset += 14;
			while ($offset < strlen($data) && $data[$offset] != "\x00") {
				$offset += 1 + ord($data[$offset]);
			}
			if (substr($data, $offset, 1) != "\x00")  {
				return 663;
			}
			$offset++;
			$nothinghappened = false;
		}
		if (substr($data, $offset, 2) == "\x21\xF9") {
			$offset += 7;
			if (substr($data, $offset, 1) != "\x00")  {
				return 664;
			}
			$offset++;
			$nothinghappened = false;
		}
		if (substr($data, $offset, 1) == "\x2C") {
			$frame_count++;
			$offset += 9;
			$ch = substr($data, $offset, 1);
			$offset++;
			if ((ord($ch) & 128) == 128) {
				$local_color_table_size = floor(pow(2,  (ord($ch) & 7)+1 )) * 3;
				$offset += $local_color_table_size;
			}
			$offset++;
			while ($offset < strlen($data) && $data[$offset] != "\x00") {
				$offset += 1 + ord($data[$offset]);
			}
			if (substr($data, $offset,1) == "\x00") {
				$offset++;
			} else {
				return 667;
			}
			$nothinghappened = false;
		}

		if (substr($data, $offset, 1) == "\x3B") {
			$nothinghappened = false;
			$the_end = true;
		}
	}
	if ($nothinghappened) {
		return 665;
	}
	if ($the_end) {
		return $frame_count;
	}
	return 669;
}

function does_post_exist($a)
{
	global $conn, $config;
	$query="SELECT USERID FROM posts WHERE PID='".mysql_real_escape_string($a)."'";
	$executequery=$conn->execute($query);
	if ($executequery->recordcount()>0)
		return true;
	else
		return false;
}

?>
