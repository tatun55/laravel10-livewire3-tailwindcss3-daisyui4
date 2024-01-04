## This is Startar Template of Laravel10.x, Livewire3.x, tailwindCSS3.x, daisyUI4.x
[この記事](https://qiita.com/tatun55/items/b196696298f64c7d1567) で完成したものを公開しています。

## git clone や zipダウンロードした場合（記事とは手順が異なります）

### STEP0: 依存しているものを準備
記事を参考に`php`,`composer`,`docker for desktop`が動く環境を準備してください。
`docker for desktop`は、必ず起動しておいてください。

### STEP1: `git clone` または zipでダウンロード
 `git clone` または zipでダウンロードでリポジトリのコピーが準備できたら下記のコマンドで移動します。

```shell
cd {folder_name}
```

### STEP2: 依存パッケージをインストール
リポジトリのコピーには、依存パッケージがインストールされていないので下記のコマンドでインストールします。
また、Laravelの初期設定を行います。

```shell
# 環境設定ファイルのコピー
cp .env.example .env

# composer管理されている依存パッケージのインストール
composer install

# sailの準備（ダウンロードの時間がかかります）
php artisan sail:install

# sailによるコンテナ立ち上げ
./vendor/bin/sail up

# npm管理されている依存パッケージのインストール
./vendor/bin/sail npm install

# viteのホットリロード環境立ち上げ
./vendor/bin/sail npm run dev
```

### STEP3: 動作確認
ブラウザで`https://localhost:8888/switch-theme`にアクセス。
下記のように正常動作していれば完了です！
![ダウンロード](https://github.com/tatun55/laravel10-livewire3-tailwindcss3-daisyui4/assets/22563682/f86aaf48-1dc7-4571-9e46-7df834d98fc9)

