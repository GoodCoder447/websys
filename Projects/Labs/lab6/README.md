Style:

Styled with jQuery UI. Added a bg color, added title and rules. 
Centered text, and seperated basic buttons from advanced ones.

============================================================

Questions:

1. So made a class for every operation, pretty basic OOP. Made
sure that each operation checks the operands it needs.

Flow: So someone inputs the operands, and clicks a button. This 
sends out a POST requests, so at line 126, the code will  
attach an operation class to its associated button. Then the button's
function calls the associated operation class. It will call the 
getEquation(), which in turn then called the operate() method of 
the function. Finally the code in inputted into the '<pre id="result">'
tag.

2. For our application not much would change. We'd have to go change 
all references of "POST" to "GET", but we are using the form type
as more of a switch than actually using it. So if something is a "POST",
we do something. The largest change would be, that currently when we get
to the website, we call a "GET", so we would have to find a way to
make sure the form doesn't evaluate on the first load, as no operands
have been inputted. (Or we could handle that in the code with exceptions.)

3. There are a few things we can do. For one, we could change the giant
if sequence into a switch, which would be more readable and fast. We 
could also right code that will attach each button to its function
on page load, rather than do it dyanically. This would be useful, but
would require slightly longer (milliseconds) load time. Lastly, it could
be possible to bypass attach functions without POST, so that the page
would not have to reload everytime we use the calculator.

