# Decorators

```python
def mul(arg):
    def decorator(f):
        def wrapper(*args, **kwargs):
            return f(*args, **kwargs) * arg
        return wrapper
    return decorator

def add(f):
    def wrapper(*args, **kwargs):
        return f(*args, **kwargs) + 2
    return wrapper

@mul(3)
@add
def op(a):    
    return a


#result = mul(3)(op)(5)
result = op(3)
print(result)
```