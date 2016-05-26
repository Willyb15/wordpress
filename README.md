###Setting Up Drupal and Wordpress
 ##Set up New Virtual Host
 ####127.0.0.1 is Local - Then the name
 ```
 sudo vi /etc/hosts
 127.0.0.1 local-drupal.com
 127.0.0.1 local-furniture-site.com
 ```
 ##Download Wordpress
 ####Go to www.wordpress.org
 ####Dowload zip of Wordpress 4.5.2 and Extract
 #### Save in Folder Open up in Sublime
 ##Configure Virtual Host in Apache Configuration
 #####Apache listening on Port 80 - but no Virtual Host Setup
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
//Syntax Checker
sudo apachectl -t
//Restart Command
sudo apachectl restart
```
###Set Up DataBase 
#####Went into Sequel Pro and created Database with name "Furniture"
 #####Update Schema Priviliges for X user
 ###Update wp-config.php, Save, Run Install (following directions on WP)
 #####Copy the code in the "sorry can't get the wp-config.php file"
 #####Paste into sublime Save in root directory 
 #####Keep following WP directions
 #####Check Sequal and see if connected
 ##Customize Site
 ####Go to root WP directory in Terminal and Give Apache User ownership of uploads because User owns it now
```
cd unit4/wordpress/furniture-site
cd wp-content
//Give Apache ownership of uploads folder
//Make uploads folder
mkdir uploads
//_www is the Apache User
sudo chown _www uploads/
```
#####That worked. Holy Crap
##Start Using Wordpress Dashboard
##Add plugin
####Go to wordpress.org
####Download plugin
####Save into furniture-site/wp-content/plugins/
####Go to plugins in Dashboard
####Click activate
####Copy ShortCode and Paste into New Post
#####Front-Page.php will overrule index.php
#####We're gonna live in wp-content/themes
#####Update "links" to css fonts etc in header.php 
###
