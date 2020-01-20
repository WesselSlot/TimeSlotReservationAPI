# TimeSlotReservationAPI [![Build Status](https://travis-ci.org/WesselSlot/TimeSlotReservationAPI.svg?branch=master)](https://travis-ci.org/WesselSlot/TimeSlotReservationAPI)

## Getting Started
Your environment must meet the following requirements:
- PHP 7.*
- Composer 1.9

The first step of setting up the project is to run composer:
```
composer install
```

After composer installed all dependencies you need to create the database schema.
You can add database credentials into the .env file, below is an example:
```
 DB_HOST=
 DB_USER=
 DB_PASSWORD=
 DB_NAME=
```

When you create the .env file with the right credentials you can create the database with the following command: 
```
vendor/doctrine/orm/bin/doctrine.php orm:schema-tool:create
```

