<?php
        try {
            $db = new PDO('mysql:host=mysql5.7-trial2;dbname=mini_bbs;charset=utf8', 'test', 'test');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // エラーモードを設定
        } catch (PDOException $e) {
            echo 'DB接続エラー: ' . $e->getMessage();
        }
    ?>