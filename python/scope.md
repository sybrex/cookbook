# Scope

LEGB lookup rule.

Local scope. Names assigned in any way within a function (def or lambda) and not declared global in that function

Enclosing function locals. Names in the local scope of any and all enclosing functions (def or lambda) from inner to outer

Global (module). Names assigned at the top-level of a module file or declared global in a def within the file

Bult-in (Python). Names preassigned in the bult-in names module: open, range, SyntaxError ...