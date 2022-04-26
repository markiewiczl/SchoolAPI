# Initialization of the project on local machine

## Setup

To run this project, install it locally using composer:

```
$ cd ./SchoolAPI
$ composer install
$ php bin/console d:d:c
$ php bin/console d:s:c
$ php bin/console d:fi:lo
```
## Endpoints
```
http://localhost:8000/getallstudentfromclass/{name}

http://localhost:8000/teacherswithclass

http://localhost:8000/orderbygender/{name}
```
for {name} variable you can use string 'a', 'b', 'c', 'd', 'e', 'f'
