# Server Documentation

Note : This is my first time using php & laravel

## Install
- Clone your project
- cd laravel-app
- Run __$ composer install__ on your cmd or terminal
- Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
- Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
- Run __$ php artisan key:generate__
- Run __$ php artisan migrate__
- Run __$ php artisan serve__
- Go to http://localhost:8000/


## Endpoints :

List of available endpoints:

- `GET /api/patients/`
- `GET /api/patients/:id/`
- `POST /api/patients/`
- `PUT /api/patients/:id/`
- `DEL /api/patients/:id/`

&nbsp;

## 1. GET /api/patients/

Description:

- Get the list of all registered patients

_Response (200 - OK)_

```json
{
  "status": {
    "code": 200,
    "response": "success"
  },
  "result": {
    "current_page": 1,
    "data": [
      {
        "id": 3,
        "name": "Kylie Jenner",
        "sex": "female",
        "religion": "Islam",
        "phone": "08213523123",
        "address": "Jalan kebagusan",
        "nik": "3174091231231",
        "created_at": "2022-08-03T15:08:14.000000Z",
        "updated_at": "2022-08-06T05:42:31.000000Z"
      },
      {
        "id": 30,
        "name": "Ibnu Ario",
        "sex": "male",
        "religion": "Katolik",
        "phone": "0812353938",
        "address": "Komplek Kejaksaan",
        "nik": "31640023120001",
        "created_at": "2022-08-06T05:16:54.000000Z",
        "updated_at": "2022-08-06T05:20:41.000000Z"
      }
    ],
    "first_page_url": "http://localhost:8000/api/patients?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http://localhost:8000/api/patients?page=1",
    "links": [
      {
        "url": null,
        "label": "&laquo; Previous",
        "active": false
      },
      {
        "url": "http://localhost:8000/api/patients?page=1",
        "label": "1",
        "active": true
      },
      {
        "url": null,
        "label": "Next &raquo;",
        "active": false
      }
    ],
    "next_page_url": null,
    "path": "http://localhost:8000/api/patients",
    "per_page": 100,
    "prev_page_url": null,
    "to": 5,
    "total": 5
  }
}
```

## 2. GET /api/patients/:id/

Description:

- Get the detail of a specific patient by ID

Request:

- params:

```json
{
  "id": "integer (required)"
}
```

_Response (200 - OK)_

```json
{
  "status": {
    "code": 200,
    "response": "successzzz"
  },
  "result": {
    "id": 3,
    "name": "Kylie Jenner",
    "sex": "female",
    "religion": "Islam",
    "phone": "08213523123",
    "address": "Jalan kebagusan",
    "nik": "3174091231231",
    "created_at": "2022-08-03T15:08:14.000000Z",
    "updated_at": "2022-08-06T05:42:31.000000Z"
  }
}
```

## 3. POST /api/patients/

Description:

- Create a new Patient

Request:

- body:

```json
{
  "name": "user5",
  "sex": "male",
  "religion": "Islam",
  "phone": "082123456",
  "address": "Jalan kebagusan",
  "nik": "3174091231231"
}
```

_Response (201 - Created)_

```json
{
  "status": {
    "code": 201,
    "response": "created",
    "message": "Success creating new Patient"
  },
  "result": {
    "name": "user5",
    "sex": "male",
    "religion": "Islam",
    "phone": "082123456",
    "address": "Jalan kebagusan",
    "nik": "3174091231231",
    "updated_at": "2022-08-04T07:40:08.000000Z",
    "created_at": "2022-08-04T07:40:08.000000Z",
    "id": 13
  }
}
```

&nbsp;

## 4. PUT /api/patients/:id/

Description:

- Edit the data of a specific Patient by ID

Request:

- params:

```json
{
  "id": "integer (required)"
}
```

- body:

```json
{
  "name": "user3edit",
  "sex": "female",
  "religion": "Islam",
  "phone": "082123456",
  "address": "Jalan kebagusan",
  "nik": "3174091231231"
}
```

_Response (200 - OK)_

```json
{
  "status": {
    "code": 200,
    "response": "success",
    "message": "Success updating Patient"
  },
  "result": {
    "id": 3,
    "name": "user3edit",
    "sex": "female",
    "religion": "Islam",
    "phone": "082123456",
    "address": "Jalan kebagusan",
    "nik": "3174091231231",
    "created_at": "2022-08-03T15:08:14.000000Z",
    "updated_at": "2022-08-03T15:17:06.000000Z"
  }
}
```

&nbsp;

## 5. DEL /api/patients/:id/

Description:

- Delete one specific Patient by ID

Request:

- params:

```json
{
  "id": "integer (required)"
}
```

- body:

```json
{
  "idTo": "integer (required)",
  "amount": "integer"
}
```

_Response (200 - OK)_

```json
{
  "status": {
    "code": 200,
    "response": "success",
    "message": "Patient deleted successfully"
  }
}
```

&nbsp;
