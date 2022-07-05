<?php
if(!isset($_SESSION)){session_start();}


    //this process is ordered to match the layout of https://api-explorer.xero.com/
    $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            //Parameters
            $headers = array(  'Authorization: Bearer '.$access_token,
                            'Accept: application/json',
                            'Xero-tenant-id: '.$tenant_id       
                            );
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         //   curl_setopt($ch, CURLINFO_HEADER_OUT, true);
         //   curl_setopt($ch, CURLOPT_HEADER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 3);

                // receive server response ...
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $content = curl_exec($ch);
            $return_headers = curl_getinfo($ch);
            curl_close($ch);
            $response = json_decode($content, true);