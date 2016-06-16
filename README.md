# Karya

[![Build Status](https://travis-ci.org/karyamedia/karya.svg?branch=master)](https://travis-ci.org/karyamedia/karya)
[![Build Status](https://codeship.com/projects/92eb5110-15b3-0134-0523-667ff3898a5e/status?branch=master)](https://codeship.com/projects/158153)
Karya web application framework base on Codeigniter MVC architecture.

**NOTE**: This project is used for Karyamedia projects, but feel free to use it as yours.

## Installation

I've make this project available to install via [Composer](https://getcomposer.org/) with following command:

```bash
$ composer create-project -s dev karyamedia/karya my-app
```

now enter `my-app` directory you just create then copy and rename `env.txt` file to `.env` under **app** directory.

```bash
$ cp app/env.txt app/.env
```

then edit contents of `app/.env` file as you wish. When everything is done, let's start the server.

**NOTE**: Make sure your Redis server already running.

## Credits

1. [CodeIgniter](http://codeigniter.com) and their contributors

## Lisence

MIT © [Karyamedia](https://github.com/karyamedia/karya). Please see [License File](LICENSE.md) for more information.