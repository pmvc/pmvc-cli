[![Latest Stable Version](https://poser.pugx.org/pmvc/pmvc-cli/v/stable)](https://packagist.org/packages/pmvc/pmvc-cli) 
[![Latest Unstable Version](https://poser.pugx.org/pmvc/pmvc-cli/v/unstable)](https://packagist.org/packages/pmvc/pmvc-cli) 
[![Build Status](https://travis-ci.org/pmvc/pmvc-cli.svg?branch=master)](https://travis-ci.org/pmvc/pmvc-cli)
[![License](https://poser.pugx.org/pmvc/pmvc-cli/license)](https://packagist.org/packages/pmvc/pmvc-cli)
[![Total Downloads](https://poser.pugx.org/pmvc/pmvc-cli/downloads)](https://packagist.org/packages/pmvc/pmvc-cli) 

PMVC-CLI
===============
PMVC-CLI design to install globally and it could run anywhere under project folder.
So recommend install it globally.
```
composer global require pmvc/pmvc-cli
```
You could run it as
```
pmvc [app name]:[action name]
```
## Require / Need install following pakaging by yourself
```
  "pmvc-plugin/controller",
  "pmvc-plugin/cli",
  "pmvc-plugin/error",
  "pmvc-plugin/debug",
  "pmvc-plugin/debug_cli",
  "pmvc-plugin/dispatcher",
  "pmvc-plugin/default_forward",
  "pmvc-plugin/dotenv"
```

## Install with Composer
### 1. Download composer
   * mkdir test_folder
   * curl -sS https://getcomposer.org/installer | php

### 2. Install by composer.json or use command-line directly
#### 2.1 Install by composer.json
   * vim composer.json
```
{
    "require": {
        "pmvc/pmvc-cli": "dev-master"
    }
}
```
   * php composer.phar install

#### 2.2 Or use composer command-line
   * php composer.phar require pmvc/pmvc-cli

#### 2.3 Inatall globally
```
php composer.phar global require pmvc/pmvc-cli
```
or  
```
composer global require pmvc/pmvc-cli
```
