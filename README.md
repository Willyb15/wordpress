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
##Launch to AWS
###Git clone Repository In AWS Ubuntu Server
```
sudo git clone yourgithuburl.com furniture
```
####In mySQL Export WP Database To Desktop
####Sign into AWS USER in mySQL and create a NewDatabase - named mine the same "furniture"
####Now You Can Use Filezilla or Bash to Connect DB
```
ubuntu@ip-172-31-0-74:/var/www/html$ sudo chown -R ubuntu furniture
//or 
ubuntu@ip-172-31-0-74:/var/www/html/furniture$ cd furniture-site/
ubuntu@ip-172-31-0-74:/var/www/html/furniture/furniture-site$ ls
index.php        wp-admin              wp-config-sample.php  wp-links-opml.php  wp-settings.php
license.txt      wp-blog-header.php    wp-content            wp-load.php        wp-signup.php
readme.html      wp-comments-post.php  wp-cron.php           wp-login.php       wp-trackback.php
wp-activate.php  wp-config.php         wp-includes           wp-mail.php        xmlrpc.php
ubuntu@ip-172-31-0-74:/var/www/html/furniture/furniture-site$ vi wp-config.php
```
```
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'furniture');

/** MySQL database username */
define('DB_USER', 'furniture_user');

/** MySQL database password */
define('DB_PASSWORD', 'x');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
```



