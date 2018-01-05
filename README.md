# DAMP Stack

DAMP stack (Docker + Apache + MySQL + PHP)

---

Small example showing how Docker can be used to replace EasyPHP/MAMP stacks. Everything that is on the same level as `/project1` and `/project2` folders is mounted into the web container and thus accessible to Apache/PHP.

DAMP stack provides:

 - Apache 2.4
 - PHP 5.6 (`gd`, `mbstring`, `pdo`, `pdo_mysql`, `pdo_pgsql`)
 - MySQL 5.7

This can be easily changed to support PHP7 or to install additional extensions via the `Dockerfile`. You can even run two containers side by side with different PHP versions - one with PHP5 and one with PHP7 although this is a bit outside of the scope of this document and will be left as an exercise to the reader :wink:

# Requirements

- Docker

# Configuration

Before the installation you may want to customize MySQL root user's password. That can be done in `docker-compose.yml`. The following credentials are used to install and configure mysql:

 - MYSQL_HOST: <see_note_below>
 - MYSQL_ROOT_PASSWORD: root
 - MYSQL_USER: admin
 - MYSQL_PASSWORD: test
 - MYSQL_DATABASE: database
 
:rotating_light: To access MySQL server from PHP code you would use `db` as the hostname. To access it from the docker host (outside of the container) you would connect to `127.0.0.1:3306` using the credentials above.

# Installation

Installation might take some time because we need to compile and install a few PHP extensions. To begin simply type the following command in the Terminal:

```
$ docker-compose up
```

# Running

After all output in the Terminal has stopped, simply navigate to [http://localhost:8000](http://localhost:8000)

You will see a list of directories:

![Screenshot](/screenshot.png?raw=true "Screenshot")

If you visit [/project2](http://localhost:8000/project2) you should see that MySQL connection can also be established! Wooo! :tada:

# License

MIT
