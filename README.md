PgBolt
=======
Version 0.0.1 Created by Patrick Groot

Introduction
------------

ZF2 module with frontend logic for the Bolt CMS

Requirements
------------

* [Zend Framework 2](https://github.com/zendframework/zf2) (latest master)
* [ZfcBase](https://github.com/ZF-Commons/ZfcBase) (latest master).

Features / Goals
----------------

* Provide Bolt frontend mappers for ZF2

Installation
------------

### Main Setup

#### By cloning project

1. Install the [ZfcBase](https://github.com/ZF-Commons/ZfcBase) ZF2 module
   by cloning it into `./vendor/`.
2. Clone this project into your `./vendor/` directory.

#### With composer

1. Add this project in your composer.json:

    ```json
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/earlhickey/pg-bolt"
        }
    ],
    "require": {
        "earlhickey/pg-bolt": "dev-master"
    }
    ```

2. Now tell composer to download PgBolt by running the command:

    ```bash
    $ php composer.phar update
    ```

#### Post installation

1. Enabling it in your `application.config.php`file.

    ```php
    <?php
    return array(
        'modules' => array(
            // ...
            'ZfcBase',
            'PgBolt',
        ),
        // ...
    );