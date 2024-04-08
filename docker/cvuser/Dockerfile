FROM node:21-alpine3.18
RUN apk --no-cache add build-base
ENV PYTHONUNBUFFERED=1
RUN apk add --update --no-cache python3 \
    && ln -sf python3 /usr/bin/python \
    && python3 -m ensurepip \
    && pip3 install --no-cache --upgrade pip setuptools
RUN npm install -g @vue/cli
EXPOSE 8000