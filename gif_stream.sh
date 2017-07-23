#/bin/bash
#Grab html content from giphy for search "money"
#Then grab all secure high res images
#Then bypass Giphy load balancing for effective dedupe
curl -s https://giphy.com/search/money | egrep -o 'https[^\"]*giphy.gif' | sed -r 's/media[0-9]+\.giphy\.com/media.giphy.com/g' | uniq | sort -R
