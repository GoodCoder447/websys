Parker Slote
661387065



Part 1: Semantic HTML

In order to correctly display the information to both computers and people, I listed my song entries into unordered lists. The unordered lists allowed me to easily visually organize all of the information associated with a song into an ordered collection. Not only that, but each list had an id with the song's associated band in order to be able to distinguish them with tools like jQuery. Further, each list item with the unordered lists had associated classes like track, artist, ect. This is in order to be able to process the information without the need for the screen to be rendered.



Part 2: XML

In order to organize my list in a semantially correct way, I made my root element "SongList". That way I was able to encapsulate each song (so there was 6 "Song" elements) and the song's artist, album, etc. With the information all in one place, it is both readable by machines and people.



Part 3: HTML and CSS

In order to properly format the songs' attributes, I created divs and turned them into columns similar to the Faux Columns from the in class example. Unfortunately as a result of creating six columns, the information was semantically collected into the categories of artists, song names, albums, ect. as opposed to a collection of songs and their qualities (as it was in part 1). To counter act this semantic fault, I created a class for each artist and attached it to each of the songs' attributes so that someone using a service could search for an artist name and get all of the attributes.



Part 4: XML and CSS

I followed the instructions, but unfortuantely this was a really hard portion. I couldn't find many resources that showed how to link html in xml, as most sites didn't have the assumption that someone would use both HTML links and CSS within an xml file. I didn't format it as I had already had done in Part 1 and Part 3 and this part didn't ask for it. I included the requirements about colors and sizes of the atrtibutes, as well as the inclusion of a black line at the bottom of each entry.
