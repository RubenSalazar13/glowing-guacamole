# glowing-guacamole

Project Structure (10%) - 20 points possible
Create the following folder/file structure in your csis2440 folder on your computer:

catalog
img
css
style.css
js
script.js
index.php
catalog.php
create-account.php
product.php
cart.php
logout.php
All of the pages will have a navigation menu with (at least) the following links:

products (this goes to catalog.php)
log in (this only shows if they are not logged in and goes to index.php)
log out (this only shows if they are logged in) - logs them out and redirects to the login (index.php) page
create account (this only shows if they are not logged in)
cart (this only shows if they are logged in)
Any other pages you want to make, feel free. :)
Database Details (20%) - 40 points possible
Step 1 (Up to 10 points) - Create (or use one you've already created) a table called "user" with the following fields:
id (be sure to set this as an auto increment primary key)
username (varchar 50)
password (varchar 512)
Step 2 (Up to 10 points) - Create a table called "product" with the following fields:
id (be sure to set this as an auto increment primary key)
name (varchar 50) - holds product name
description (varchar 500)
image (varchar 100) - holds the image file url & name
price (float)
Step 3 (Up to 20 points) - Add the products. You can create 20 products on your own, or you can use the 20 below. Note, you'll need to create your own descriptions and prices. 
Anvil
Axle Grease
Atom Re-Arranger
Bed Springs
Bird Seed
Blasting Powder
Cork
Disintegration Pistol
Earthquake Pills
Female Roadrunner costume
Giant Rubber Band
Instant Girl
Iron Carrot
Jet Propelled Unicycle
Out-Board Motor
Railroad Track
Rocket Sled
Super Outfit
Time Space Gun
X-Ray
Back-End Details (40%) - 80 points possible
Index, "Create Account", and Log Out Pages (Up to 20 points)

The index.php file will ask the user to log in to the system with a log in form
If they already have an account, then they will be able to log in.
Create a link on the home page (below the log in form) that says "create account" that will redirect them to the create-account.php page.
The create-account.php page has them fill out a form for creating an account.
It won't allow them to use a username that already exists - be sure to display a proper error message if they try.
Be sure to hash and salt their password before entering it in the database
The form on this page will have a field for username, password, "verify password", reset button, and "create account" button
Use real-time JavaScript validation (and regex) to:
Verify that the password and "verify password" match as they are typing.
Verify that the password contains at least one number and is at least 8 characters long
Be sure to display user feedback messages on the screen as they type, e.g.:
Password must contain a number
Password must be 8 characters long
Password and Verify Password do not match.
Disable the "create account" button until the above conditions are met
If they're logged in, the home page will NOT show the log in form. It will show a "welcome to our store" type of message.
The logout.php page will:
Destroy all sessions (and cookies if you've created any). 
Redirect you to the home page showing the log in form
Catalog, and Product Pages (Up to 40 points)

The catalog.php page will display a  table (not necessarily a <table> tag) that shows all 20 of the products. This will be created from the database using PHP code.
The "table" will show the product name, image, price, and a "view product details" button/link.
The "view product details" button will take them to a new page (product.php). This page will display the following:
The Name from the database
The Description from the database
The price from the database
An image of the product. Use your own 20 images or these 20 images. Download these 20 images.
A quantity field that allows them to pick how many they want
An "Add to Cart" button
Which product to display will be determined by URL variables passed in via the "view product details" link from the catalog page.
When the user tries to add to cart:
If they're not logged in, a message will appear telling them to log in first with a link to the log in page.
Do not allow negative quantities to be entered.
If they're logged in, when clicking "add to cart" a session will be created (if it hasn't been created already) for storing the product info.
Cart Page (Up to 20 points)

The cart.php page will show all of their products in a table-style layout. 
If there is nothing in their cart, a message stating "your cart is empty" will be displayed instead.
It will display each product, name, price per unit, quantity, and total price for each product (qty * price)
The quantity will be displayed in an "editable" field (i.e., a text box).
The total shopping cart price will also be displayed.
There will also be an "update cart" button which will do the following:
Modify the session variables to hold the new quantity
If the quantity is set to 0, it will completely remove the item from the session variables (and thus the cart)
Lastly, there will also be a "place order" button which will:
Display a "thank you" message
The message will include a list of what they ordered
Front-End Details (30%) - 60 Points Possible
As a web programmer / site developer, we can't fall into the trap of only caring about the back-end of the site. We also must consider the front-end. I'm not looking for master-lever design and layout skills, but I am asking you to be thoughtful about your HTML and your CSS.

Content (Up to 20 points)

I will be expecting you to stretch your creative muscles a bit
Be sure to include some (non-lorem) text on your site to give the user feedback
The home page should have a welcome/about message
The product page should have a "blurb" about the products
The cart page should have some sort of text (e.g, "view your shopping cart", etc.)
Do your best to create as a realistic of a store/shopping experience as possible
HTML (Up to 20 points)

Take the time to create proper HTML structure
Remember, HTML is meant to describe content
Use semantic markup
Use clear class and id names 
CSS (Up to 20 points)

Take the time to give the site some personality
Be conscious of spacing (margin, and padding)
Be thoughtful about font choices, colors (both foreground and background)
A "20 line CSS" file won't cut it here folks. :)
