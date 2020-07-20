# Inspire

![[AhmedAtef]]

## Project Overview

  this code  solve back-end task for Inspire  
  This is a Blog to allow manage some featuers  in data by any of the following:

  +  Users page.
1. User list.
2. Option to delete user.
3. Option to edit user.
4. Option to add user.
  + Posts page.
1. Posts list.
2. Option to delete post.
3. Option to edit post (with WYSIWYG editor).
4. Option to add post.
  + Pages page.
1. Pages list.
2. Option to delete page.
3. Option to edit page (with WYSIWYG editor).
4. Option to add page.

  

 -Setting Pages
   1. Option to edit site name.

2. Option to edit site menu.

  This is including search by multiple criteria at the same time as search by destination and price together.

## How to run 

##### first cd to project directory

##### Install Composer Dependencies:

``` 
composer install
```

##### Install NPM Dependencies

``` 
npm install
```

##### Create a copy of your .env file

``` 
cp .env.example .env
```

##### Generate an app encryption key

``` 
php artisan key:generate
```

##### Create an empty database for our application

##### In the .env file, add database information to allow Laravel to connect to the database

##### Migrate the database

``` 
php artisan migrate
```

##### Seed the database

``` 
php artisan db:seed
```

##### Run the project

``` 
php artisan serve
```

##### Default account:

* email: admin@admin.test
* password: 123456

 

## Routes

<pre>
&gt; POST http://127.0.0.1:8000/register
&gt; POST http://127.0.0.1:8000/login
&gt; GET http://127.0.0.1:8000
&gt; GET http://127.0.0.1:8000/home
&gt; GET http://127.0.0.1:8000/custom/{feature}
&gt; GET http://127.0.0.1:8000/posts/{id}

dashboard:
&gt; PUT http://localhost:8000/dashboard/posts/update/{id}
&gt; PUT http://localhost:8000/dashboard/pages/update/{id}
&gt; PUT http://localhost:8000/dashboard/settings/update/{id}
&gt; PUT http://localhost:8000/dashboard/users/update/{id}

&gt; POST http://localhost:8000/dashboard/posts
&gt; POST http://localhost:8000/dashboard/pages
&gt; POST http://localhost:8000/dashboard/users
&gt; DELETE http://localhost:8000/dashboard/posts/{id}
&gt; DELETE http://localhost:8000/dashboard/users/{id}
&gt; DELETE http://localhost:8000/dashboard/pages/{id}

&gt; GET http://127.0.0.1:8000/dashboard/home
&gt; GET http://127.0.0.1:8000/dashboard/users
&gt; GET http://127.0.0.1:8000/dashboard/create/users
&gt; GET http://localhost:8000/dashboard/posts
&gt; GET  http://localhost:8000/dashboard/pages
&gt; GET  http://localhost:8000/dashboard/settings/edit
&gt; GET http://localhost:8000/dashboard/pages/{id}/edit
&gt; GET http://127.0.0.1:8000/dashboard/posts?page={paginate}
&gt; GET http://localhost:8000/dashboard/posts/{id}/edit
&gt; GET http://localhost:8000/dashboard/users/13/edit
&gt; GET http://localhost:8000/dashboard/settings/edit

</pre>

## Tools I used

* PhP 
* Laravl
* Blade
* TinyMCE
* php intellisense
* vsCode
* github
