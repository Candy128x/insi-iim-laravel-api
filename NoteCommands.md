# Comands

---
### Download composer if you not have
[URL]
>https://getcomposer.org/download/
- => composer global require "laravel/installer"


---
### Install laravel 
- => composer create-project --prefer-dist laravel/laravel laravel-api "5.7.*"
- ~ It's take 10-15 minutes to install all it's framework dependency/library files.


---
### clear cache
- => bash clear.sh

---
# Notes for programmer


[API-URL]
- URL: fetch_feeds_from_twitter
- @param: (string) $search_tags


---
## Development Flow..

### v 1.1 (2019-05-09)
- add url in route/web.php
- create controller in app/http/controllers/FetchFeedsFromTwitterController.php