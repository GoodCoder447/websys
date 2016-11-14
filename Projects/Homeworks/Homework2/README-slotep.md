RCS - Parker Slote

Members: Barry Chau, Adeel Minhas, Andrew Aquino, Vince Cerati

1. Plugins really make people use good design patterns and properly
organize your code. With plugins, not only does code easily get 
ported to new projects, but the code itself is much easier to 
conceptualize. Not only that, but because you can have private and
public methods in a plugin, developers can easily design proper
interfaces for their plugins.

2. I just realized that I answered a lot of question two in that
first paragraph. 
One thing I didn't mention previously was that
with plugins, developers can easily chain their function calls. 
Ironically, this can also make code incredibly hard to understand
and follow. Also all and variables in a plugin are located in the
plugin's personal namespace so there is little chance of something
accidently getting overriden.

3. I'm not exactly sure why this question is included at all? Doesn't
seem like we have gone over POST much in class yet, we did the day
the lab is due, but for php in not Javasript. 

After Googling, I found that you can easily just use an ajax call, with
type "POST", and in the url section, simply find an address on a different
domain, and if the address is a server that is accepting POSTs, then we
should recieve a confirmation.
You can also apparently do this with just javscript but creating a form
object, attaching a url as an action and sending it off in the same 
fashion.


Sources: Mostly just used w3 and associated websites. Mostly canvas and
all of the functions.