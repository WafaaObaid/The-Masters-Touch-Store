FROM php:8.2-apache

WORKDIR /var/www/html

# Install mysqli and pdo_mysql
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy source code
COPY src/ .

# Set Apache ServerName
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Enable mod_rewrite
RUN a2enmod rewrite

# Permissions
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Set default index
RUN sed -i 's/DirectoryIndex .*/DirectoryIndex index.php index.html Homepage.php/' /etc/apache2/mods-enabled/dir.conf

EXPOSE 80
