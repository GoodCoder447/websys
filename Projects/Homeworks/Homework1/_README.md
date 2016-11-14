Parker Slote
661387065

1. I chose strict XHTML because the last html file I wrote had it and I copied the root over. After doing a little research, I confirmed that I had the right syntax and that XHTML wouldn't conflict with what I planned to do.



2. In my opinion, it seems like the my page with the strict XHTML doctype looks similar to other doctypes. There is no use of any deprecated functions or otherwise bad code.



3. Overall i would say that my markup is semantically correct. In general, I added a class to every element indicating what type of information it was, from the id of "Seagate" from my work experience to the id of "contactInfo".

I used on <span> on lines 21, as I needed to add hCard semantic information, and the examples I looked up used <span> to seperate the locality from the region from the zip code. https://en.wikipedia.org/wiki/HCard

I also used <span> on lines 42, 54, 71, 89, and 110 to seperate the timeline values from my associated epxierience. It was a stlying choice, as I wanted to seperate the years from the links to said experience's webpages.



4. hCard is useful for people using machine reading to understand a web page's semantics. If a program is made looking for elements with hcard, they will know exactly how to parse and store that information. For a human, it can be useful if you are trying to get a quick sense of information from looking at raw HTML code. 


=========
Challenge:

In order to have my website promote progressie enhancement, I first start by creating the semantic markup for the overall information that resides in the resume. The next obvious step was to creat some basic formatting with CSS. I created borders to section off some data, floated the picure, and orgnaized the general makeup of my HTML file. Next I added webfonts which I downloaded from Google's free web fonts. Other steps toward progressive enhancement could include creating a java script file that would allow the website to be dynamic and include other features, like highlighting when hovering or other nifty functions.