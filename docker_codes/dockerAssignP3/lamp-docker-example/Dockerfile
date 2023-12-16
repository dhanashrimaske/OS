# Use an official Ubuntu runtime as a base image
FROM ubuntu:20.04

# Install necessary packages
RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y apache2 php libapache2-mod-php php-mysql mysql-server && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Configure Apache
RUN a2enmod rewrite

# Expose ports
EXPOSE 80 3306

# Start Apache and MySQL services
CMD service apache2 start && service mysql start && tail -f /dev/null
