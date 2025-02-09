<?php

class Upload_File
{
    public function upload($POST,$FILES)
    {
        $_SESSION['error'] = "";

        $allowed[] = 'image/jpeg';
        $allowed[] = 'video/mp4';
        //Upload the file
        if($FILES['file']['name'] != "" && $FILES['file']['error'] == 0)
        {
            if(in_array($FILES['file']['type'], $allowed))
            {

            }else{

                $_SESSION['error'] = "Only jpegs are allowed!";
            }
        }
        if($_SESSION['error'] == "")
        {
        
            $folder = "uploads/";
            if(!file_exists($folder))
        {
            mkdir($folder,0777,true);
        }

        $destination = $folder . $FILES['file']['name'];

        move_uploaded_file($FILES['file']['tmp_name'], $destination);

        
        $arr['title'] = esc($POST['title']);
        $arr['date']= date('y-m-d-H-i-s');
        $arr['userid'] = 1;
        $arr['image'] = $destination;
        $arr['views'] = 0;
        $arr['url_address'] = get_random_string_max(60);

        $DB = new Database();
        $query = "insert into images (title,userid,date,image,views,url_address) values (':title,:userid,:date,:image,:views,:url_address)";
        $DB->write($query,$arr);

        header('Location:'. ROOT . "photos");
        die;
        
        
    }

    }

}