# Asserts

Assertions are powerful debuging tool:
 - should only be used while developing to identify bugs
 - can be globally disabled with interpreter settings (should never be used for validation)

```python
assert 0 <= price <= product['price']
```