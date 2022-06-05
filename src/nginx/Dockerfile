FROM debian:buster

RUN apt-get  update && \
		apt-get  install nginx -y && \ 
		apt-get  install openssl -y

RUN	openssl req -x509 -nodes -days 365 -subj "/C=KR/ST=Seoul/L=Songpa-gu/O=42/OU=42Seoul/CN=sorkim.42.fr" \
	-newkey rsa:2048 -keyout /etc/ssl/nginx.key -out /etc/ssl/nginx.crt;

COPY ./default etc/nginx/sites-enabled/default

CMD ["nginx", "-g", "daemon off;"]