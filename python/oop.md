# OOP

```python
class <name>:
    def __init__(self, a):
        self.a = a
    def __repr__(self):
        class_name = self.__class__.__name__
        return f'{class_name}({self.a!r})'
    def __str__(self):
        return str(self.a)

    @classmethod
    def get_class_name(cls):
        return cls.__name__
```

Constructor overloading
```python
class <name>:
    def __init__(self, a=None):
        self.a = a
```        

Inheritance
```python
class Rectangle:
    def __init__(self, length, width):
        self.length = length
        self.width = width

    def area(self):
        return self.length * self.width    

class Square(Rectangle):
    def __init__(self, length):
        super().__init__(length, length)
```        

Multiple inheritance
```python
class A: pass
class B: pass
class C(A, B): pass
```

Property
```python
class MyClass:
    @property
    def a(self):
        return self._a

    @a.setter
    def a(self, value):
        self._a = value
```
```shell
>>> el = MyClass()
>>> el.a = 123
>>> el.a
123
```        