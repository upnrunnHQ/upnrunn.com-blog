# upnrunn.com-blog
==================
Steps to setup the project
1. Move this entrie \blog directory to server
2. Ensure that Composer should be installed
3. It is having Laravel Lumen Framwork with 5.5.2 version
	So server must compatible with this following details or prerequisites.
	- PHP >= 7.0
	- OpenSSL PHP Extension
	- PDO PHP Extension
	- Mbstring PHP Extension
4. To change the REST API site url go to following file : \blog\config\constants.php
and update value of 'rest-api-url'.
5. After moving whole directory you need to serve the server using following command by going to /blog directory in command prompt
	- 'php -S localhost:8000 -t public'

You are ready to go!