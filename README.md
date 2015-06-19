# Pavlowa 1.0

Starter HTML boilerplate application for web development with Bootstrap, Font Awesome and pretty URLs


## Features

*   [Bootstrap](http://getbootstrap.com/)
*   [Font Awesome](http://fortawesome.github.io/Font-Awesome/)
*   [Fake Loader](http://codepen.io/vivinantony)
*   Contact form with Ajax
*   Pretty URLs



## Instalation

*   copy files in to server directory <br />
*   update **index.php** line 4 and linve 7 with correct details <br />
*   create page file in **/view** directory (exemple: /view/test.php )<br />
*   add page to **$safe_pages** array in index.php line 14 
```javascript
$safe_pages = array("home", "contact", "test" );
```

*   go to: **https://your-application/test** to view your page <br />


## Defaults

*   header for page are located in **/included** folder, to include in page add:
```php
$home = true; //set home menu to current
include('included/header.php'); 
```

*   footer for page are located in **/included** folder, to include in page add:
```php
include('included/footer.php'); 
```

*   default view: **/view/home.php**
*   default 404 view: **/view/404.php**  



## Menu

This is how you can set current menu item to active state:

```php

      <ul class="nav navbar-nav">
        <li class="<?php if (isset($home)){ echo 'active';} ?>"><a href="home">Home</a></li>
        <li class="<?php if (isset($contact)){ echo 'active';} ?>"><a href="contact">Contact</a></li>
      </ul>

```


## Contact form

For contact form to work fill out tows details in **/included/subscribe.php** 

```javascript
$masterEmail = 'XXXXXXXXXX'; // email address you wish to post form to
$from = 'XXXXXXXXXX'; // sender
```


## Google map

Set latitude and longitude in **/view/contact.php** 

```javascript
var pos = new google.maps.LatLng( 53.2205654, -6.6593078);
```



## License

MIT License http://opensource.org/licenses/MIT

Copyright (c) 2015 Pawel Jankowski,  [78points.com](http://78points.com/)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.