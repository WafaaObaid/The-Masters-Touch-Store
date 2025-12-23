FROM php:8.2-apache

WORKDIR /var/www/html

# Copy source code
COPY src/ .

# Set Apache ServerName
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Set permissions recursively
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Enable mod_rewrite
RUN a2enmod rewrite

# Allow Apache to access directory + set Homepage.php as default
RUN sed -i 's/Require all denied/Require all granted/' /etc/apache2/apache2.conf
RUN sed -i 's/DirectoryIndex .*/DirectoryIndex Homepage.php index.html index.php/' /etc/apache2/mods-enabled/dir.conf

EXPOSE 80
