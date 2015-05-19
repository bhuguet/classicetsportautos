.htaccess chez 1and1.fr
AddType x-mapp-php5 .php .php3 .php4 .htm .html

Options +FollowSymLinks
RewriteEngine on
RewriteCond %{HTTP_HOST} !www.classicetsportautos.fr$
RewriteRule (.*) http://www.classicetsportautos.fr/$1 [R=301,L]

.htaccess avec easyPhp
AddType application/x-httpd-php .php .php3 .php4 .htm .html

##bon post sur le sujet: http://www.besthostratings.com/articles/php-in-html-files.html