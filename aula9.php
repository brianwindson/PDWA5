create:
http://localhost:81/api/create.php (Post)
Json:
{
    "name" : "Amazing Pillow 2.0",
    "price" : "199",
    "description" : "The best pillow for amazing programmers.",
    "category_id" : 2,
    "created" : "2018-06-01 00:35:07"
}

http://localhost:81/api/delete.php (Post ou Delete)
Json:
{
    "id" : "106"
}

readProducts (Get)
http://localhost:81/api/readProducts.php
Json:

{
    "id" : "106"
}

update (Post ou PUT)
http://localhost:81/api/update.php
Json:
{
    "name" : "Amazing Pillow 2.0",
    "price" : "199",
    "description" : "The best pillow for amazing programmers.",
    "category_id" : 2,
    "created" : "2018-06-01 00:35:07"
}


create 
http://localhost:81/api/update.php
Json:
{
    "name" : "Gamer socks",
    "price" : "99",
    "description" : "Gaming while comfy.",
    "category_id" : 2,
    "created" : "2022-07-01 00:43:07"
}


readProducts (Get)
http://localhost:81/api/readProducts.php
Json:

{
    "id" : "404"
}