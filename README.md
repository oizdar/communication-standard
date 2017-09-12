# Communication standard

Creates consistent response standards for REST api application.

Uses `symfony/http-kernel` 

Basic response 
```JSON
{
  "code": "RESPONSE_CODE",
  "data": "mixed_data_encoded"
}
```
Success response:
```JSON
{
  "code": "OK",
  "data": "mixed_data"
}
```

Error response:
```JSON
{
  "code": "GENERAL_ERROR",
  "error": {
    "message": "error message",
    "data": "additional_error_data_encoded"
  }
}
```



