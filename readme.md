###Setting Up Drupal and Wordpress
##Set up New Virtual Host
```
sudo vi /etc/hosts

127.0.0.1 local-drupal.com
127.0.0.1 local-furniture.com
```
##Download Wordpress
####Go to www.wordpress.org
####Dowload wordpress 4.5.2 and extract
#### Save in Foler Open up in Sublime
##Configure Virtual Host in Apache Configuration
```
sudo vi /etc/apache2/extra/httpd-vhosts.conf

<VirtualHost *:80>
  ServerName local-furniture.com
  DocumentRoot /Users/Bryant/Desktop/DigitalCrafts/unit4/wordpress/furniture-site

  <Directory "/Users/Bryant/Desktop/DigitalCrafts/unit4/wordpress/furniture-site">
    Allow from all
    Options +Includes +Indexes +FollowSymLinks
    AllowOverride all
    Require all granted
  </Directory>
</VirtualHost>

//Setup drupal as well

<VirtualHost *:80>
  ServerName local-drupal.com
  DocumentRoot /Users/Bryant/Desktop/DigitalCrafts/unit4/drupal

  <Directory "/Users/Bryant/Desktop/DigitalCrafts/unit4/drupal">
    Allow from all
    Options +Includes +Indexes +FollowSymLinks
    AllowOverride all
    Require all granted
  </Directory>
</VirtualHost>
```
##Restart Apache
```
sudo apachectl -t
sudo apachectl restart
```
###Set Up DataBase

