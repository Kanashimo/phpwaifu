<?php
namespace Kanashimo\phpwaifu;

class phpwaifu{

    protected $cURL;
    protected $URL;

    /**
     * @var string Contain string if error has occured
     */
    public $err;

    function __construct()
    {
        $this->URL = "https://api.waifu.pics/";
        $this->cURL = curl_init();
        $this-> err = NULL;
    }

    /**
     * Request a image from api.waifu.pics
     * @param array $array
     * @return string $result
     */
    public function request($array){
        $URL =  $this->URL . $array["type"] . "/" . $array["category"];
        $cURL = $this->cURL;
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURL, CURLOPT_URL, $URL);
        curl_setopt($cURL, CURLOPT_FAILONERROR, true);
        $result = curl_exec($cURL);
        if (curl_errno($cURL)) {
            $this->err = curl_error($cURL);
        } else {
             return json_decode($result, true)["url"];
        }
    }
    function __destruct()
    {
        curl_close($this->cURL);
    }
}