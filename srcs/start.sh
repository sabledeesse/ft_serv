#Starting services
service nginx start && service mysql start && service php7.3-fpm start

#Creating database
bash create_db.sh

sleep infinity &
wait