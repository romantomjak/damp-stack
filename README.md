# DAMP Stack

How to build a DAMP stack (Docker + Apache + MySQL + PHP)

---

# Requirements

- Docker

# Installation

Installation might take some time because we need to compile and install the following PHP extensions - `gd`, `mbstring`, `pdo`, `pdo_mysql`, `pdo_pgsql`.

To begin the installation/configuration simple type the following in the Terminal:

```
$ docker-compose up
```

# Running

After all output in the Terminal has stopped, simply navigate to [http://localhost:8000](http://localhost:8000)

You will see a list of directories:

![Screenshot](/screenshot.png?raw=true "Screenshot")

If you visit `/project2` you should see that MySQL connection can also be established.

# License

MIT