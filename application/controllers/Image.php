<?php

/**
 * 图片上传处理类
 */
class Image extends CI_Controller
{
    //const PIC_PATH = '/home/jiangbo/www/YouYuanYou/static/upload/';
    const PIC_PATH = '/alidata/YouYuanYou/static/upload/';

    public function upload()
    {
        $pic_name = $_FILES['mypic']['name'];
        if ($pic_name != "") {
            $type = strstr($pic_name, '.');
            if ($type != ".gif" && $type != ".jpg" && $type != ".png" && $type != ".jpeg") {
                echo '图片格式不对！';
                exit;
            }
            $rand = rand(100, 999);
            $final_name = date("YmdHis") . $rand . $type;
            //上传路径
            $pic_path = self::PIC_PATH . $final_name;
            move_uploaded_file($_FILES['mypic']['tmp_name'], $pic_path);
        }
        $arr = array(
            'name' => $pic_name,
            'pic' => $final_name
        );
        echo json_encode($arr);
    }
}
