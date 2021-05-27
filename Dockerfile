#getting this base image ubuntu
FROM ubuntu

MAINTAINER shaun mbateng <smbateng103@yahoo.com>

RUN apt-get update

CMD ["echo", "Hello World!"]
