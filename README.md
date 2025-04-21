# Docker Webserver
Dockerで開発環境のWebサーバーを立てるためのリポジトリです。
PHPとMySQLの環境をDockerで立てることができます。

## 仕様
- PHP 8.0
- MySQL latest
- Apache
- phpMyAdmin

## 環境構築手順
1. Docker Desktopをインストール
2. リポジトリをクローン
3. 以下のコマンドでコンテナを起動 (初回は`build`が行われるので時間がかかる)
```bash
docker-compose up -d
```
4. ブラウザで`http://localhost`にアクセス
5. phpinfoが表示されれば成功!

## phpMyAdminのアクセス
- phpMyAdminは`http://localhost:8080`でアクセス可能

## Dockerコンテナの操作
### コンテナの起動
```bash
docker-compose up -d
```
### 停止方法
```bash
docker-compose down
```
### コンテナの削除 (データも削除)
```bash
docker-compose down --volumes
```
### コンテナのビルド
```bash
docker-compose build
```
### コンテナの再起動
```bash
docker-compose restart
```
### コンテナのログ確認
```bash
docker-compose logs
```

## License
MIT


