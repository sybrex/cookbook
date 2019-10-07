# Underscores

## Single leading underscore "_var"
Has a meaning by convention only. It is a hint to tell another programmer that variable or method is intended for internal use.
This convension is defined in PEP 8
However, leading underscores do impact how names get imported from modules (using wildcard import)
```python
# my_module.py
def external_func():
    return 23

def _internal_func():
    return 42
```    

```python
from my_module import *
external_func()
# 23
_internal_func()
# NameError
```
By PEP 8 wildcard imports should be avoided

```python
import my_module
my_module.external_func()
# 23
my_module._internal_func()
# 42
```

## Single trailing underscore "var_"
A single trailing underscore (postfix) is used by convention to avoid naming conflicts with Python keywords
```python
def make_object(name, class_):
    pass
```

## Double leading underscore "__var"
```python
class Test:
    def __init__(self):
        self.foo = 111
        self._bar = 23
        self.__baz = 23

>>> t = Test()
>>> dir(t)        
['_Test__baz', ... '_bar', 'foo']
```
Python interpreter protects __baz variable from getting overriden in subclasses by naming it _Test__baz

## Double leading and trailing underscores "__var__"
Used to create dunder methods (magic methods). Core feature of Python and should be used where needed.

## Single underscore "_"
By convention can be used as a name to indicate that a varibale is temporary or insignificant
```python
for _ in range(32):
    print('hello world')

car = ('red', 'auto', 12)    
color, _, year = car
```    