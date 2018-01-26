---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#general
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## api/login

> Example request:

```bash
curl -X POST "http://mitracms.localhost/api/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/login",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_e0a8f1f3e33f828aba833636e81f969c -->
## api/get-details

> Example request:

```bash
curl -X POST "http://mitracms.localhost/api/get-details" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/get-details",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/get-details`


<!-- END_e0a8f1f3e33f828aba833636e81f969c -->

<!-- START_da5727be600e4865c1b632f7745c8e91 -->
## Get all the users in the database

> Example request:

```bash
curl -X GET "http://mitracms.localhost/api/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/users",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/users`

`HEAD api/users`


<!-- END_da5727be600e4865c1b632f7745c8e91 -->

<!-- START_8f99b42746e451f8dc43742e118cb47b -->
## Get all details of a user; in-depth

> Example request:

```bash
curl -X GET "http://mitracms.localhost/api/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/users/{user}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/users/{user}`

`HEAD api/users/{user}`


<!-- END_8f99b42746e451f8dc43742e118cb47b -->

<!-- START_12e37982cc5398c7100e59625ebb5514 -->
## Add a new user to the database.

> Example request:

```bash
curl -X POST "http://mitracms.localhost/api/users" \
-H "Accept: application/json" \
    -d "name"="ut" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/users",
    "method": "POST",
    "data": {
        "name": "ut"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/users`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Minimum: `6` Maximum: `100`

<!-- END_12e37982cc5398c7100e59625ebb5514 -->

<!-- START_23e684e4851557a8b058b188818dcb9d -->
## Update a user specified.

> Example request:

```bash
curl -X PATCH "http://mitracms.localhost/api/users" \
-H "Accept: application/json" \
    -d "name"="eum" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/users",
    "method": "PATCH",
    "data": {
        "name": "eum"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/users`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Minimum: `6` Maximum: `100`

<!-- END_23e684e4851557a8b058b188818dcb9d -->

<!-- START_09a889ad3c7b5434f4d3fd3d31a924c3 -->
## Remove a user from a database

> Example request:

```bash
curl -X DELETE "http://mitracms.localhost/api/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/users",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/users`


<!-- END_09a889ad3c7b5434f4d3fd3d31a924c3 -->

<!-- START_7c0b7d3d0d31f5dd9b2ca9e2a7496106 -->
## Get all projects belong to the authenticated user.

> Example request:

```bash
curl -X GET "http://mitracms.localhost/api/projects" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/projects",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/projects`

`HEAD api/projects`


<!-- END_7c0b7d3d0d31f5dd9b2ca9e2a7496106 -->

<!-- START_8cd998bdce233e667dcb2fa2e7b14273 -->
## Get a single project

> Example request:

```bash
curl -X GET "http://mitracms.localhost/api/projects/{project}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/projects/{project}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/projects/{project}`

`HEAD api/projects/{project}`


<!-- END_8cd998bdce233e667dcb2fa2e7b14273 -->

<!-- START_d1a366aa47ee59c96780bfe89ca95bdd -->
## Add a new project.

> Example request:

```bash
curl -X POST "http://mitracms.localhost/api/projects" \
-H "Accept: application/json" \
    -d "name"="vel" \
    -d "submission_date"="vel" \
    -d "received_date"="vel" \
    -d "description"="vel" \
    -d "account_id"="vel" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/projects",
    "method": "POST",
    "data": {
        "name": "vel",
        "submission_date": "vel",
        "received_date": "vel",
        "description": "vel",
        "account_id": "vel"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/projects`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Minimum: `6` Maximum: `50`
    submission_date | string |  required  | 
    received_date | string |  required  | 
    description | string |  required  | Minimum: `6` Maximum: `150`
    account_id | string |  required  | 

<!-- END_d1a366aa47ee59c96780bfe89ca95bdd -->

<!-- START_b37d994d029cd6d57179c8f65d4b8cc3 -->
## Update the project details

> Example request:

```bash
curl -X PATCH "http://mitracms.localhost/api/projects/edit" \
-H "Accept: application/json" \
    -d "name"="tempore" \
    -d "submission_date"="tempore" \
    -d "received_date"="tempore" \
    -d "description"="tempore" \
    -d "account_id"="tempore" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/projects/edit",
    "method": "PATCH",
    "data": {
        "name": "tempore",
        "submission_date": "tempore",
        "received_date": "tempore",
        "description": "tempore",
        "account_id": "tempore"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/projects/edit`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Minimum: `6` Maximum: `50`
    submission_date | string |  required  | 
    received_date | string |  required  | 
    description | string |  required  | Minimum: `6` Maximum: `150`
    account_id | string |  required  | 

<!-- END_b37d994d029cd6d57179c8f65d4b8cc3 -->

<!-- START_70c859bdcb978e6cdba659235c2083d3 -->
## Add a new project.

> Example request:

```bash
curl -X DELETE "http://mitracms.localhost/api/projects/{project}" \
-H "Accept: application/json" \
    -d "name"="odio" \
    -d "submission_date"="odio" \
    -d "received_date"="odio" \
    -d "description"="odio" \
    -d "account_id"="odio" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/projects/{project}",
    "method": "DELETE",
    "data": {
        "name": "odio",
        "submission_date": "odio",
        "received_date": "odio",
        "description": "odio",
        "account_id": "odio"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/projects/{project}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Minimum: `6` Maximum: `50`
    submission_date | string |  required  | 
    received_date | string |  required  | 
    description | string |  required  | Minimum: `6` Maximum: `150`
    account_id | string |  required  | 

<!-- END_70c859bdcb978e6cdba659235c2083d3 -->

<!-- START_ed35517d21abeb490c1ae5d6d831eb8f -->
## Get all phases.

> Example request:

```bash
curl -X GET "http://mitracms.localhost/api/projects/{project}/phase" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/projects/{project}/phase",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/projects/{project}/phase`

`HEAD api/projects/{project}/phase`


<!-- END_ed35517d21abeb490c1ae5d6d831eb8f -->

<!-- START_e9e63b64787891711d5b4af8e4f0021f -->
## Get details of a specific phase

> Example request:

```bash
curl -X GET "http://mitracms.localhost/api/projects/{project}/phase/{phase}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/projects/{project}/phase/{phase}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/projects/{project}/phase/{phase}`

`HEAD api/projects/{project}/phase/{phase}`


<!-- END_e9e63b64787891711d5b4af8e4f0021f -->

<!-- START_0bb0a97b3b353a0f6339f7d980cf62ba -->
## Add a new phase to the Project

> Example request:

```bash
curl -X POST "http://mitracms.localhost/api/projects/{project}/phase" \
-H "Accept: application/json" \
    -d "name"="aut" \
    -d "description"="aut" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/projects/{project}/phase",
    "method": "POST",
    "data": {
        "name": "aut",
        "description": "aut"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/projects/{project}/phase`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Minimum: `6` Maximum: `50`
    description | string |  required  | Minimum: `6` Maximum: `100`

<!-- END_0bb0a97b3b353a0f6339f7d980cf62ba -->

<!-- START_1fa51efa8735f988522f0cc4f6c96434 -->
## Update a phase

> Example request:

```bash
curl -X PATCH "http://mitracms.localhost/api/projects/{project}/phase/edit" \
-H "Accept: application/json" \
    -d "name"="possimus" \
    -d "description"="possimus" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/projects/{project}/phase/edit",
    "method": "PATCH",
    "data": {
        "name": "possimus",
        "description": "possimus"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/projects/{project}/phase/edit`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Minimum: `6` Maximum: `50`
    description | string |  required  | Minimum: `6` Maximum: `100`

<!-- END_1fa51efa8735f988522f0cc4f6c96434 -->

<!-- START_3f7f1ed170a5ffcfaaa48c8a27e63e22 -->
## Remove a phase

> Example request:

```bash
curl -X DELETE "http://mitracms.localhost/api/projects/{project}/phase" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/projects/{project}/phase",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/projects/{project}/phase`


<!-- END_3f7f1ed170a5ffcfaaa48c8a27e63e22 -->

<!-- START_61739f3220a224b34228600649230ad1 -->
## api/logout

> Example request:

```bash
curl -X POST "http://mitracms.localhost/api/logout" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://mitracms.localhost/api/logout",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/logout`


<!-- END_61739f3220a224b34228600649230ad1 -->

