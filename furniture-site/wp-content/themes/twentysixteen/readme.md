##Configuring up Drupal
###SetUp a Vitural Host
```
sudo vi /etc/hosts/
127.0.0.1 local-drupal.com
```
###Configire



```
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

###Go to drupal.org
####Click on Download and Extend



