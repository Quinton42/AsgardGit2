# ASGARD-CMS

## INSTRUCTION FOR GIT CLONE AND USAGE

1) Clone project 

2) Create database 

3) run 
```sh 
$ php artisan asgard:install
```
you'll have to connect your database and create admin account
then with a **php artisan serve** you can connect to the database

4) In admin **User->Roles->Admin->Permission** select all for block module then update , you'll see the block module in the admin sidebar

5) Then create a block give it a name and call your block in your theme view (**in Theme/Your-theme-name/views/...**) with 
   
   ```sh
   {!! Block::get('block-name') !!}
   ```
   (inside of your blocks add sections of your templates)
   
6) Activate the theme in Settings->Non_translatables_fields->Front_end_template and select the theme you want


# HOW THIS PROJECT WAS CREATED ?

### Create PROJECT
```sh
$ composer create-project asgardcms/platform your-project-name
```
with mamp add sql socket in  **config/database.php** 

change the cipher in **config/app.php** replace by AES-128-CBC or AES-256-CBC
```sh
'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
```


### Install Project
```sh
php artisan asgard:install
```

## BLOCK MODULE
 
 Run
```sh
$ composer require asgardcms/block
```
```sh
$ php artisan module:migrate Block
```
Then give permission in admin User->Roles->Admin->Permission select all for block module then update , you'll see the block module in the admin sidebar

Then create a block give it a name and call your block in your view with 

```sh
{!! Block::get('block-name') !!}
```

## CUSTOM FIELD 

### create module
```sh
$ php artisan asgard:module:scaffold
```
```sh
php artisan module:migrate modulename
```

#### Rollback syntax
```sh
php artisan module:migrate-rollback modulename
```

### PUBLISH VENDOR 
```sh
php artisan vendor:publish --provider="Modules\Page\Providers\PageServiceProvider" --force --tag="cofig"
```

### ADD CUSTOM MENU 

in **app/http/Presenters** add **/TrustPresenter.php** (or the name you want for the menu here it's the menu for Trust theme).

And use this kind of code _https://asgardcms.com/docs/v1/menu-module/displaying-menus_
 
in **config/menus.php**  & **config/menus.styles.php**
add 
```sh
'trust-presenter'  =>  'App\Http\Presenters\TrustPresenter', 
```
(an exemple for trust theme)

call in **Theme/themeName/views/partials/navigation.blade.php**
```sh
{!! Menu::render('mainMenu', 'trust-presenter') !!}  
``
(an exemple for trust theme)