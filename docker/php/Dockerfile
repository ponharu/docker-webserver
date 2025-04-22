FROM php:8.4-apache-bullseye

# Ensure all packages are updated to minimize vulnerabilities
RUN apt-get update && apt-get upgrade -y && apt-get dist-upgrade -y && apt-get install -y libicu-dev libzip-dev && apt-get clean && rm -rf /var/lib/apt/lists/*

# ドキュメントルートを変更
ENV APACHE_DOCUMENT_ROOT=/var/www/html
# Apache の設定を変更
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf


# Apache の rewrite_module を有効化
RUN a2enmod rewrite

# PHP のエクステンションをインストール
RUN docker-php-ext-install \
    # ctype (Character type functions) \
    # curl \
    # dom \
    # fileinfo \
    # filter \
    # hash \
    intl \
    # json \
    # mbstring (Multibyte string functions) \
    # openssl \
    # pcre (Perl Compatible Regular Expressions) \
    # PDO \
    pdo_mysql \
    # pdo_sqlite \
    # session \
    # tokenizer \
    # xml \
    zip

# Composer インストール
COPY --from=composer /usr/bin/composer /usr/bin/composer

# コンテナログイン時のパス指定
WORKDIR /var/www/html
