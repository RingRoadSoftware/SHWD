# HTML DOCUMENTATION

## index page
The index page has many skeleton/placeholder features. For instance, the `home-prodlist` class will be used to create tile like featured products on the front page. You can add products by updating the page it references and the image and it will take the user to the page upon a click. 

The html below here that references each product can be reworked to reference the `sql/products.sql` database so that we can pull products from the database instead of embedding the products we show on the homepage in html. This allows category pages where the products are pulled from the database as long as they have the attribute required. 
__Example__
**Categories**
* **Wired** 
* **Wireless**
* **Open-Back** <- each of these links to a specific page that has a php function that will pull all items from the sql database with that category and embed their images and links as tiles. 



