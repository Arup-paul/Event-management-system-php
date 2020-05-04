<?php

      $phoneNumber = 8801727843493;
      $message = 'CPI GANG';
      $curlPost = 'user=cpictg&password=YkkUCU4Y&sender=cpictg&SMSText='.$message.'&GSM='.$phoneNumber;
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'http://api.bulksms.icombd.com/api/v3/sendsms/plain');
      curl_setopt($ch, CURLOPT_HEADER, 1);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
      $data = curl_exec($ch);
      curl_close($ch);
?>


