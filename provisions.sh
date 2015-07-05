## Disabled interactive prompt ##
export DEBIAN_FRONTEND=noninteractive

apt-get update
apt-get install -y apache2 php5 php5-mysql php-pear php5-dev php5-mcrypt php5-cli php5-gd curl mysql-client postfix mysql-server vim npm git

rm -rf /var/www
ln -fs /vagrant /var/www

curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

npm install -g bower

## Repairing npm not found by bower.
ln -s /usr/bin/nodejs /usr/bin/node

################################
## Creating database and user ##
################################

sql1="create database if not exists filmoteca;"

sql2="create user 'homestead' IDENTIFIED BY 'homestead';"

sql3="grant all on filmoteca.* to 'homestead'@'localhost' identified by 'homestead';"

sql4="flush privileges;"

sql5="use filmoteca;"

sql="${sql1}${slq2}${sql3}${sql4}${sql5}"

echo $sql | mysql

###########################
## Creating virtualhost  ##
###########################

VHOST=$(cat <<EOF
<VirtualHost *:80>
  DocumentRoot "/var/www/htdocs"
  ServerName filmoteca.dev
  <Directory "/var/www/htdocs">
    AllowOverride All
    Require all granted
  </Directory>
</VirtualHost>
EOF
)
echo "${VHOST}" > /etc/apache2/sites-available/filmoteca.dev.conf

ln -s /etc/apache2/sites-available/filmoteca.dev.conf /etc/apache2/sites-enabled/filmoteca.dev.conf

rm /etc/apache2/sites-enabled/000-default.conf


####################################
## Enable Apache's rewrite module ##
####################################

a2enmod rewrite

php5enmod mcrypt

service apache2 restart

####################################
## Config Xdebug ##
####################################

echo "Creating xdebug log directory: /var/log/xdebug"
mkdir /var/log/xdebug
echo "Changing xdebug log directory owner to www-data"
chown www-data:www-data /var/log/xdebug

XDEBUG_CONFIG=$(cat <<EOF
xdebug.default_enable = 1
xdebug.idekey = "vagrant"
xdebug.remote_enable = 1
xdebug.remote_autostart = 1
xdebug.remote_port = 9000
xdebug.remote_handler = dbgp
xdebug.remote_log = "/var/log/xdebug/xdebug.log"
xdebug.remote_connect_back = 1
EOF
)

echo "${XDEBUG_CONFIG}" >>  /etc/php5/apache2/conf.d/20-xdebug.ini
