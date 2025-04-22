<?php
const DB_HOST = 'mysql:dbname=my_database;host=db';
const DB_USER = 'user';
const DB_PASSWORD = 'password';

try{
    /**
     * データベース接続用のPDOインスタンスを作成します。
     * 
     * - DB_HOST: データベースのホスト情報を指定します。
     * - DB_USER: データベース接続に使用するユーザー名を指定します。
     * - DB_PASSWORD: データベース接続に使用するパスワードを指定します。
     * 
     * オプション設定:
     * - PDO::ATTR_DEFAULT_FETCH_MODE: デフォルトのフェッチモードを連想配列(PDO::FETCH_ASSOC)に設定します。
     * - PDO::ATTR_ERRMODE: エラーモードを例外(PDO::ERRMODE_EXCEPTION)に設定します。
     * - PDO::ATTR_EMULATE_PREPARES: プリペアドステートメントのエミュレーションを無効化します(false)。
     */
    $pdo = new PDO(DB_HOST,DB_USER,DB_PASSWORD,[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES =>false
    ]);
    echo "success";
}catch(PDOException $e){
    echo 'ERROR: Could not connect.'.$e->getMessage()."\n";
    exit();
}

