#!/usr/bin/env bash

apt-get update
apt-get install -y apache2 php5 php5-mysql php-pear php5-dev php5-mcrypt curl mysql-client
rm -rf /var/www
ln -fs /vagrant /var/www

curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

##################################################################
## Install mysql-server without request password for root user. ##
##################################################################

echo mysql-server mysql-server/root_password password homestead | sudo debconf-set-selections
echo mysql-server mysql-server/root_password_again password homestead | sudo debconf-set-selections
apt-get install -y mysql-server

####################################
## Enable Apache's rewrite module ##
####################################

a2enmod rewrite

php5enmod mcrypt

service apache2 restart
