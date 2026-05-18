# PHP Sample Project

## 必要なもの

事前に下記をインストールしてください。

- Docker Desktop
- Git

---

## プロジェクト取得

リポジトリを clone します。

```bash
git clone リポジトリURL
```

プロジェクトへ移動します。

```bash
cd php-sample
```

---

## Docker 起動

下記コマンドを実行します。

```bash
docker compose up --build
```

---

## 動作確認

ブラウザで下記へアクセスしてください。
http://localhost:8000

下記の文字が表示されれば成功です。

PHP + MySQL 接続成功

---

## 停止方法

ターミナルで停止：


Ctrl + C

コンテナ停止：

```bash
docker compose down
```