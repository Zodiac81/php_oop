<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 25.05.18
 * Time: 9:52
 */

class Api
{
    protected $api_key = "0197ae8bc9ea123546229db6f362c29c";
    protected $endpoint = 'http://api.novaposhta.ua/v2.0/json/Address/getCities';


    public function getCity($postdata)
    {

        $data = [
            "modelName" => "Address",
            "calledMethod" => "getCities",
            "methodProperties" => [
                "FindByString" => $postdata
            ],

            "apiKey" => "0197ae8bc9ea123546229db6f362c29c"
        ];

        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL => $this->endpoint,
            CURLOPT_HEADER => True,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_USERAGENT => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array("content-type: application/json")
        ]);

        $response = curl_exec($ch);

        $error = curl_error($ch);

        curl_close($ch);

        if ($error) {
            echo "cURL Error #:" . $error;
        } else {
            return $response;
        }


    }


    public function city($d){
        echo $d;
    }
}

//        curl_setopt($ch, CURLOPT_URL, "http://testapi.novaposhta.ua/v2.0/json/Address/getCities"); //урл сайта к которому обращаемся
//        curl_setopt($ch, CURLOPT_HEADER, 1); //выводим заголовки
//        curl_setopt($ch, CURLOPT_POST, 1); //передача данных методом POST
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //теперь curl вернет нам ответ, а не выведет
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata); //тут переменные которые будут переданы методом POST
//        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'); //эта строчка как-бы говорит: "я не скрипт, я такой-то браузер" :)
//        if(!$res) {
//            $error = curl_error($ch).'('.curl_errno($ch).')';
//            echo $error;
//        }

