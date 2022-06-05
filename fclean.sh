#!/bin/sh

sudo docker image rm $(docker images -qa)
sudo docker volume rm $(sudo docker volume ls -q)
sudo docker system prune -a --force