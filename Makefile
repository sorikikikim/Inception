all:
	docker-compose -f ./srcs/docker-compose.yml up  -d
clean:
	docker-compose -f srcs/docker-compose.yml down
fclean: clean
	sh fclean.sh
	# sudo docker image rm $(docker images -qa)
	# sudo docker volume rm $(sudo docker volume ls -q)
	# sudo docker system prune -a --force