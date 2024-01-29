# Use a imagem oficial do PHP como base
FROM php:latest

# Instale extensões PHP usando PECL
RUN pecl install redis && \
    docker-php-ext-enable redis

# Instale a extensão MySQLi
RUN docker-php-ext-install mysqli

# Instale o Composer para gerenciar dependências do PHP
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Defina o diretório de trabalho
WORKDIR /var/www/html

# Copie seu código e arquivos de aplicativo, se necessário
COPY . .

# Exponha a porta, se necessário
EXPOSE 80

# Comando de entrada (se necessário)
CMD [ "php", "-S", "0.0.0.0:80" ]