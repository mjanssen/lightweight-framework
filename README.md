Installation process (local)
===

Clone zip to desktop and put it in your root apache folder.
Create a virtual host within your apache vhosts to make sure everything works perfectly.

Go to "path-to-framework/app" and run ```sudo chmod -R 777 cache``` (OS X) to make the cache folder writable.

Now browse to the given url (in your vhosts & hosts file. i.e. http://framework.dev) and you should see the landing page (:

To make use of the PDO connection, set the right database connection info in the /app/config/config.php