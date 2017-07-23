#/bin/bash
root="/var/www/rob_me"
api_key=$(cat "$root/private/beta_giphy_api_key")
limit=25
list_path="$root/gif.list"
rating="pg-13"

function search_giphy(){
    search_term=$1
    #fetch results from giphy for search term using $api_key, under $limit and ensure rating is SFW
    curl -s "https://api.giphy.com/v1/gifs/search?api_key=$api_key&q=$search_term&limit=$limit&rating=$rating" | jq ".data[].images.fixed_height.webp" | sed 's/"//g'
}

function get_gif_urls(){
    search_terms="Money Cash Make+It+Rain"
    for search_term in $search_terms; do
        search_giphy $search_term
    done
}

get_gif_urls | sort | uniq > "$list_path"
