#docker build --tag=public-portal --force-rm .
#docker run -p 8888:80 -d -v `pwd`:/app --name=public-portal public-portal
#FROM yiisoftware/yii2-php:7.2-apache
FROM schmunk42/yii2-app-basic
RUN apt-get update; apt-get install mc -y;
EXPOSE 80