Part 1:
	Huge improvement ! Now only 1 listener is attached. 



Optimizations

1) Moved CSS to the top of the page
	This way, any time an element is rendered, it will be rendered in the 
	fashion that it will later show up in. Conversely if you didn't do this,
	the computer would end up just writing all of the html, then re going 
	over all of it in order to style it. So this is a pretty large improvement.


2) Removed "#Bar" from the original jQueryelement selector 
	Originally the jquery query was ("#bar"), which would search through 
	the entire DOM for every single loop iteration. Now, with just ("#foo")
	the entire DOM doesn't need to be searched. Instead it will immediately just 
	go to the "#Foo", rather than returning to "#Bar" and "#foo" for every iteration.


3) Unrolled the loop
	Did a basic loop unroll for the dynamic adding of the list items. So basically
	the loop only needs to iterate 1/4 the time it orginally did. Very important
	before I saved the jquery selector to a variable.
	

4) Saved jQuery selector object to a variable
	Rather than query the DOM constantly, I just saved the "#foo" element to a 
	variable so that jQuery need only run once. This is a huge improvement, as 
	previously there was 5000 jQuery calls compared to 1 now.

5) Changed css image from square to background color
	Before the css would add a block over and over and over, instead I just changed
	the background color to a similar color. Not only is this huge because it is built
	into CSS, but now the program doesn't need the connect to the internet in order to
	get the image from the address.

6) Changed the "show hidden" button, to only loop through elements that are hidden
	So now rather than loop though all 10,000 instances of the list item, I need only
	run through the handful of list items that have been made hidden. Very large improvement.

7) For the loop, added all list items to string
	Rather than constantly append the element, I create a large, large string with the entirety
	of the 5,000 dynamic list elements, then added the entire string a single time. This is pretty 
	huge at string concatenation is much less intensive than a jQuery call. 


Creativity:
	Created a header title
	Underlined it
	Change the href into a button to be more clear
	Centered the entire ul so that the items are in the center of the screen
	Picked a nice color

