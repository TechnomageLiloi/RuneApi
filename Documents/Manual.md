# Manual

Request:

```json
{
  "system": "API",
  "method": "Sandbox.PingPong",
  "data": {
    "param-a": "test",  
    "param-b": 1,
    "param-c": true  
  },
  "debug": true
}
```

Response:

```json
{
  "result": {
    "param-a": "test",  
    "param-b": 1,
    "param-c": true  
  },
  "debug": {
    "start": "yyyy-mm-dd hh:ii:ss.u",
    "finish": "yyyy-mm-dd hh:ii:ss.u"
  }
}
```