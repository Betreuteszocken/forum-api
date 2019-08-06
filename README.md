# Forum Api

[![Release](https://img.shields.io/badge/release-0%2E0-blue.svg?style=flat)](hhttps://github.com/Betreuteszocken/forum-api/releases/tag/0.0)
[![Packagist](https://img.shields.io/badge/Packagist-0%2E0-blue.svg?style=flat)](https://packagist.org/packages/Betreuteszocken/forum-api)
[![LICENSE](https://img.shields.io/badge/License-MIT-blue.svg?style=flat)](LICENSE)
[![PHP v7.3](https://img.shields.io/badge/PHP-%E2%89%A57%2E3-0044aa.svg)](https://www.php.net/manual/en/migration73.new-features.php)

A project to fetch and deliver custom [Woltlab Forum](https://www.woltlab.com/) settings of [Betreuteszocken.de](https://www.betreuteszocken.de/) to third party apps. 

## Table of Contents

* [Integration & Set Up](#integration--set-up)
  * [Requirements](#requirements)
  * [Installation](#installation-and-set-up)


## Integration & Set Up

### Requirements

The usage of [**PHP v7.3**](https://www.php.net/manual/en/migration73.new-features.php) is obligatory.


### Installation and Set-Up

Please clone the project via git.

```bash
git clone git@github.com:Betreuteszocken/forum-api.git
composer install
```

And run [composer](https://getcomposer.org/) afterwards to install all dependencies.

```bash
cd forum-api/
composer install
```

Copy the [/.env.dist](.env.dist) file to `/.env` and set up all included variables properly.
