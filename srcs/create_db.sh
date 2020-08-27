mariadb -e "CREATE DATABASE wp_db;"
mariadb -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';"
mariadb -e "GRANT ALL ON wp_db.* TO 'admin'@'localhost';"
mariadb -e "FLUSH PRIVILEGES;"