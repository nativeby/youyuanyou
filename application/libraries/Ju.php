<?php

class Ju {

    /**
     * Json输出或Jsonp输出
     * @param array $arrVal
     */
    public static function jsonXEcho($arrVal){

        $jsonStr = json_encode($arrVal);
        // 去除BOM头
        $jsonStr = trim($jsonStr, "\xEF\xBB\xBF");

        if (array_key_exists('jsonCallBack', $_GET)) {
            echo $_GET['jsonCallBack'].'('. $jsonStr .')';
        } else {
            echo $jsonStr;
        }
        exit;
    }

    /**
     * 调用 HTTP URL
     * @param $url
     * @param bool|false $isPostRequest
     * @param array $postData
     * @param string $contentType
     * @return mixed
     */
    public static function curl($url, $isPostRequest = false, $postData = array(), $contentType = 'text/html') {

        // 初始化一个 cURL 对象
        $ch = curl_init();
        // 设置你需要抓取的URL
        curl_setopt($ch, CURLOPT_URL, $url);
        // 是否输出header
        curl_setopt($ch, CURLOPT_HEADER, 0);
        // 结果是保存到字符串中还是输出到屏幕上。
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        if ($isPostRequest == true) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        }

        $header = array();
        if($contentType != 'text/html'){
            $header[] = 'Content-Type: '.$contentType;
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }

    /**
     * @param $file array $file 用$_FILES接收到的file数组
     * $file['name'] => "test.jpg"
     * $file['type'] => "image/png"
     * $file['tmp_name'] => "/tmp/phpN3lzii"
     * $file['error'] => "0"
     * $file['size'] => "186240"
     * @param string $targetDir 上传的目标文件夹
     * @return bool|mixed 成功返回json，失败返回false
     */
    public static function imageUpload($file, $targetDir = 'zs') {

        $url = IMAGE_HOST .'/api/upload';
        $tmpPath = substr($file['tmp_name'],0,strrpos($file['tmp_name'],DIRECTORY_SEPARATOR)) . DIRECTORY_SEPARATOR;

        @move_uploaded_file($file['tmp_name'], $tmpPath . $file['name']);
        $content = file_get_contents($tmpPath . $file['name']);
        $data = base64_encode($content);
        $res = self::curl($url, TRUE, array('content' => $data, 'targetDir' => $targetDir, 'name' => $file['name']));
        if (@unlink($tmpPath . $file['name'])) {
            return $res;
        }
        return false;
    }

    /**
     * 记录任何访客的行为记录
     * @param $folderName
     * @param $fileName
     * @param $content
     * @return bool
     */
    public static function recordBehavior($folderName,$fileName,$content){

        $filePath = ROOT_PATH .'/../datafiles/'. $folderName;
        $newFileName = date('Y-m-d') .'-'. $fileName .'.tr';
        $fullPath = $filePath .'/'.$newFileName;

        if(!file_exists($filePath)){
            @mkdir($filePath,0755,true);
        }

        $inputStr = sprintf("[%s]%s\n",date('Y-m-d H:i:s'), $content);
        file_put_contents($fullPath, $inputStr, FILE_APPEND);

        // 往日志服务器写入，末尾一定加回车符
        $fp = fsockopen('123.59.37.113', 44444);
        if($fp){
            fwrite($fp,'['.$fileName.']'.$inputStr ."\n");
        }

        return true;
    }

    /**
     * 获取IP
     */
    public static function getIP(){

        $cip = '0.0.0.0';
        if(!empty($_SERVER["HTTP_CLIENT_IP"])){
            $cip = $_SERVER["HTTP_CLIENT_IP"];
        }elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        }elseif(!empty($_SERVER["REMOTE_ADDR"])){
            $cip = $_SERVER["REMOTE_ADDR"];
        }
        return $cip;
    }
}