# Loops

## While loops
```python
colors = ['red', 'gree', 'blue', 'yellow']
i = 0
while i < len(colors):
    print(colors[i])
    i+=1
```

## Range of lenght
```python
colors = ['red', 'gree', 'blue', 'yellow']
for i in range(len(colors)):
    print(colors[i])
```

## For-in usual way
```python
colors = ['red', 'gree', 'blue', 'yellow']
for color in colors:
    print(color)
```

## Enumarate
```python
colors = ['red', 'gree', 'blue', 'yellow']
for index, color in enumarate(colors, start=1)
    print(index, color)
```    