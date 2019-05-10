# insi-iim-laravel-api


---
## Software Requirements:
- laravel-version: 5.8
- php-version: 7.2


---
### create virtual host on your system [optional]
- with name: insilaraapi.local.com


---
## About API

### 1) fetch_feeds_from_domain
- [URL]
	- http://insilaraapi.local.com/fetch_feeds_from_domain
- [method]
	- POST
- [parameter]
```
{
    "search_tags": "salt,onions",
    "token": "insi001laraAPI"
}
```

- [respoonse]
```
{
    "title": "Recipe Puppy",
    "version": 0.1,
    "href": "http://www.recipepuppy.com/",
    "results": [
        {
            "title": "Roast Chicken with Rosemary",
            "href": "http://allrecipes.com/Recipe/Roast-Chicken-with-Rosemary/Detail.aspx",
            "ingredients": "onions, salt",
            "thumbnail": "http://img.recipepuppy.com/18294.jpg"
        },
        {
            "title": "Easy Black Bean Salsa",
            "href": "http://allrecipes.com/Recipe/Easy-Black-Bean-Salsa/Detail.aspx",
            "ingredients": "onions, salt",
            "thumbnail": "http://img.recipepuppy.com/13675.jpg"
        },
        {
            "title": "Caramelized Onions",
            "href": "http://www.recipezaar.com/Caramelized-Onions-356677",
            "ingredients": "olive oil, onions, salt",
            "thumbnail": "http://img.recipepuppy.com/618394.jpg"
        },
        {
            "title": "Crock Pot Caramelized Onions",
            "href": "http://www.recipezaar.com/Crock-Pot-Caramelized-Onions-24750",
            "ingredients": "margarine, onions, salt",
            "thumbnail": "http://img.recipepuppy.com/36539.jpg"
        },
        {
            "title": "Farmer's Pork Chops",
            "href": "http://www.recipezaar.com/Farmers-Pork-Chops-247113",
            "ingredients": "onions, potato, salt",
            "thumbnail": "http://img.recipepuppy.com/555289.jpg"
        },
        {
            "title": "Savory Grilled Onions",
            "href": "http://allrecipes.com/Recipe/Savory-Grilled-Onions/Detail.aspx",
            "ingredients": "butter, onions, salt",
            "thumbnail": "http://img.recipepuppy.com/24097.jpg"
        },
        {
            "title": "Okra, Corn and Tomatoes",
            "href": "http://allrecipes.com/Recipe/Okra-Corn-and-Tomatoes/Detail.aspx",
            "ingredients": "bacon, onions, salt",
            "thumbnail": "http://img.recipepuppy.com/15860.jpg"
        },
        {
            "title": "Sweet Onion Burgers",
            "href": "http://allrecipes.com/Recipe/Sweet-Onion-Burgers/Detail.aspx",
            "ingredients": "ground beef, salt, onions",
            "thumbnail": "http://img.recipepuppy.com/20139.jpg"
        },
        {
            "title": "Grilled Onion Potatoes",
            "href": "http://allrecipes.com/Recipe/Grilled-Onion-Potatoes/Detail.aspx",
            "ingredients": "potato, onions, salt",
            "thumbnail": "http://img.recipepuppy.com/671.jpg"
        },
        {
            "title": "\n                  Grilled Onion Recipe\n                  \n",
            "href": "http://cookeatshare.com/recipes/grilled-onion-128",
            "ingredients": "onions, olive oil, salt",
            "thumbnail": "http://img.recipepuppy.com/648066.jpg"
        }
    ]
}
```


---
## 1) Postman Success Response
	- sucess msg..
<kbd><img src="/imgs-readme/Screenshot_from_2019-05-11_00-10-27_2_censored.jpg" alt="" title=""></img></kbd>


---
## 2) Postman Error Response
	- error msg..
<kbd><img src="/imgs-readme/Screenshot from_2019-05-11_00-35-28_2_censored.jpg" alt="" title=""></img></kbd>


---
## 3) Postman Error Response, Invalid Response from API domain
	- error msg..
<kbd><img src="/imgs-readme/Screenshot_from_2019-05-11_01-19-39_censored.jpg" alt="" title=""></img></kbd>
