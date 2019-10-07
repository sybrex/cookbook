# Context managers

```python
with open('file.txt', 'w') as f:
    f.write('hello world')
```

Is the same as:

```python
f = open('file.txt', 'w')
try:
    f.write('hello world')
finally:
    f.close
```        

Custom context manager
```python
class ManagedFile:
    def __init__(self, name):
        self.name = name

    def __enter__(self):
        self.file = open(self.name, 'w')
        return self.file

    def __exit__(self, exc_type, exc_val, exc_tb):
        if self.file:
            self.file.close()

with MangedFile('hello.txt') as f:
    f.write('hello world')
```            

Using contextlib
```python
from contextlib import contextmanager

@contextmanager
def managed_file(name):
    try:
        f = open(name, 'w')
        yield f
    finally:
        f.close()

with managed_file('hello.txt') as f:
    f.write('hello world')
```