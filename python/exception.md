# Exception

Simple exception
```python
try:
    <code>
except <exception>:
    <code>
```

Full example
```python
try:
    <code_1>
except <exception_a>:
    <code_2_a>
except <exception_b>:
    <code_2_b>
else:
    <code_2_c>
finally:
    <code_3>
```
With **else** statement we instruct a program to execute a certain block of code only in the absense of exceptions

Rasing exceptions
```python
raise <exception>
raise <exception>()
raise <exception>(<el>)
raise <exception>(<el>, ...)

# examples
raise ValueError('Argument is of right type but inappropriate value!')
raise TypeError('Argument is of wrong type!')
raise RuntimeError('None of above!')
```

Re-rais caught exception
```python
except <exception>:
    <code>
    raise
```

User-defined exception
```python
class MyError(Exception):
    pass

class MyInputError(MyError):
    pass
```

Common built-in exceptions
```
BaseException
 +-- SystemExit                   # Raised by the sys.exit() function.
 +-- KeyboardInterrupt            # Raised when the user hits the interrupt key.
 +-- Exception                    # User-defined exceptions should be derived from this class.
      +-- StopIteration           # Raised by next() when run on an empty iterator.
      +-- ArithmeticError         # Base class for arithmetic errors.
      |    +-- ZeroDivisionError  # Raised when dividing by zero.
      +-- AttributeError          # Raised when an attribute is missing.
      +-- EOFError                # Raised by input() when it hits end-of-file condition.
      +-- LookupError             # Raised when a look-up on a sequence or dict fails.
      |    +-- IndexError         # Raised when a sequence index is out of range.
      |    +-- KeyError           # Raised when a dictionary key is not found.
      +-- NameError               # Raised when a variable name is not found.
      +-- OSError                 # Failures such as “file not found” or “disk full”.
      |    +-- FileNotFoundError  # When a file or directory is requested but doesn't exist.
      +-- RuntimeError            # Raised by errors that don't fall in other categories.
      |    +-- RecursionError     # Raised when the the maximum recursion depth is exceeded.
      +-- TypeError               # Raised when an argument is of wrong type.
      +-- ValueError              # When an argument is of right type but inappropriate value.
           +-- UnicodeError       # Raised when encoding/decoding strings from/to bytes fails.
```