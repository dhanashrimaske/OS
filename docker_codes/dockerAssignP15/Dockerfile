# Use an official Ubuntu runtime as a parent image
FROM ubuntu:latest

# Install necessary packages
RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y \
    apache2 \
    mysql-server \
    php \
    libapache2-mod-php \
    php-mysql

# Expose ports
EXPOSE 80

# Copy PHP application to the Apache document root
COPY index.php /var/www/html/index.php

# Start Apache and MySQL in the foreground
CMD service apache2 start && service mysql start && tail -f /dev/null
