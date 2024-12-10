FROM mongo:8.0.3

RUN apt-get update

# set config file
COPY ./init/init.js /docker-entrypoint-initdb.d/