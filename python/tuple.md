# Tuple

Tuple is a collection which is ordered and unchangeable. Allows duplicate members

```python
<tuple> = ()
<tuple> = (<el>, )
<tuple> = (<el_1>, <el_2> [, ...])
```

## Named Tuple

The collections.namedtuple function is a factory that produces subclasses of tuple enhanced with field names and a class name

```python
>>> from collections import namedtuple
>>> Point = namedtuple('Point', 'x y')
>>> p = Point(1, y=2)
Point(x=1, y=2)
>>> p[0]
1
>>> p.x
1
>>> getattr(p, 'y')
2
>>> p._fields  # Or: Point._fields
('x', 'y')
```
