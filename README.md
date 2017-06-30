# Nextcloud

A safe home for all your data. Access & share your files, calendars, contacts, mail & more from any device, on your terms.

# About this image

The purpose of this nextcloud config is to enable a simple nextcloud instance running with https enabled. Self-signed certs can be created or replace with real ones.

This image is based on a couple of sources [indiehosters/nextcloud] (https://github.com/indiehosters/nextcloud) and the official [nextcloud docker] (https://github.com/nextcloud/docker) site

# How to use this image

The easiest is to use our `docker-compose.yml`.

Make sure you have [docker-compose](http://docs.docker.com/compose/install/) installed. And then:

## Create your self-signed certs
````bash
 ./scripts/create_ssl
````

## Set your variables
````bash
 cat MYSQL_ROOT_PASSWORD=mystrongpassword >> .env
 cat MYSQL_PASSWORD=mystrongpassword >> .env
````

## Start your containers
````bash
 docker-compose up -d
````

You can now access your instance on the port 80 of the IP of your machine (not recommended for production).

## Access it from Internet

If you wish to access from the internet, it is recommended that you go to the official [nextcloud docker] (https://github.com/nextcloud/docker).

## Installation

Once started, you'll arrive at the configuration wizard.
At the `Database Setup` step, please enter the following:

  -  database user: nextcloud
  -  database password: mystrongpassword
  -  database name: nextcloud 
  -  database server: db
 
And leave the rest as default.

Then you can continue the installation with the super user.
