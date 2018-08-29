#docker build --tag=public-portal --force-rm .
#docker run -p 8888:80 -d -v `pwd`:/var/www/html --name=public-portal public-portal
FROM vtshark/apache