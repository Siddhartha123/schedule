<?php

 
$curl = curl_init('https://api.cronofy.com/v1/calendars');                                            
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Bearer hfGKtliItm646nHYJU_2BNXYI011szQh"));//paste your access token here
                                                
                                                                                                         
$result = curl_exec($curl);
echo $result;

?>