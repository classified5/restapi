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
<!-- START_8b5c558aca81061680817e16a432e59c -->
## API Login, on success return JWT Auth token

> Example request:

```bash
curl -X POST "http://localhost//api/v1/authenticate" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost//api/v1/authenticate",
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
`POST /api/v1/authenticate`


<!-- END_8b5c558aca81061680817e16a432e59c -->

<!-- START_72a7399e8c317bd83db380935a2dcab0 -->
## Log out
Invalidate the token, so user cannot use it anymore
They have to relogin to get a new token

> Example request:

```bash
curl -X POST "http://localhost//api/v1/logout" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost//api/v1/logout",
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
`POST /api/v1/logout`


<!-- END_72a7399e8c317bd83db380935a2dcab0 -->

<!-- START_adebbe48e8407805285eefe863e5043c -->
## Refresh the token

> Example request:

```bash
curl -X GET "http://localhost//api/v1/token" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost//api/v1/token",
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
null
```

### HTTP Request
`GET /api/v1/token`

`HEAD /api/v1/token`


<!-- END_adebbe48e8407805285eefe863e5043c -->

<!-- START_64931459e3426580d2f2a9632cd4aa0a -->
## /api/v1

> Example request:

```bash
curl -X GET "http://localhost//api/v1" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost//api/v1",
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
null
```

### HTTP Request
`GET /api/v1`

`HEAD /api/v1`


<!-- END_64931459e3426580d2f2a9632cd4aa0a -->

<!-- START_00aca5d95a8b0985f94455f81502c1c5 -->
## /api/v1/goods

> Example request:

```bash
curl -X POST "http://localhost//api/v1/goods" \
-H "Accept: application/json" \
    -d "name"="molestiae" \
    -d "quantity"="349387794" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost//api/v1/goods",
    "method": "POST",
    "data": {
        "name": "molestiae",
        "quantity": 349387794
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
`POST /api/v1/goods`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Maximum: `255`
    quantity | numeric |  required  | 

<!-- END_00aca5d95a8b0985f94455f81502c1c5 -->

