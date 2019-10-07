# Generator

A generator is a function that produces a sequence of results instead of a single value. Instead of returning a value you generate a series of values (using yield statement)

```python
def count(start, step): 
    while True: 
        yield start 
        start += step
```
```bash
>>> counter = count(10, 2)
>>> next(counter), next(counter)
>>> (10, 12)
```