# Pixlr
Pixlr is online platform for young artist and photgraphers to show there work to the world.

## Features
1. Form based Registration.
2. Login Authentication.
3. Follow | like | comment.
4. Upload images

## Software Stack

### Front-end
* HTML/CSS
* Bootstrap

### Back-end
* php
* Mysql
* JavaScript

## Instructions
1. Import the sql database in the config folder from [phpmyadmin](https://www.phpmyadmin.net/) or any other database management tool.
2. Change the Sql user and password in files.
3. Change directory to yours distribution HTML folder. For Apache 2.0 its listed below.
```
$cd /var/www/html
```
4. Clone this repository.
```
$ sudo git clone https://github.com/abhijeet2096/pixlr
```
5. Move your current directory to clone folder.
```
$ cd  /var/www/html/pixlr
```
6. Give right permission to images folder
```
$ sudo chown -R http:http images
$ sudo chmod -R 755 images
```
7. Restart apache2 service
```
$ sudo service apache2 restart
```
8 Now move to your browser and type
```
localhost/pixlr
```

## ScreenShots
Start Screen Explore Section
![Start Screen](screenshots/login_screen1.png?raw=true "Start Screen")

Start Screen Login/Signup Section
![Start Screen 2](screenshots/login_screen2.png?raw=true "Start Screen")

Signup Modal
![Signup Modal](screenshots/signup_modal.png?raw=true "Signup Modal")

Login Modal
![Signin Modal](screenshots/login_modal.png?raw=true "Login Modal")

Home Screen
![Home Screen](screenshots/homescreen_mainlayout.png?raw=true "Home Screen")

Home Screen Gallery Section
![Home Screen Gallery Section](screenshots/home_gallareytab.png?raw=true "Home Screen Gallery Section")

Home Screen Following Section
![Home Screen Following Section](screenshots/following_tab.png?raw=true "Home Screen Following Section")

Navigation Bar
![Navigation Bar](screenshots/sidebar.png?raw=true "Navigation Bar")

Profile Page
![Profile Page](screenshots/profile_page.png?raw=true "Profile Page")


Search Result
![Search Result](screenshots/search_page.png?raw=true "Search Result")

## About
The Assignment's aim was to learn about databases. This Assignment was under Prof. [ Arti Kashyap](http://faculty.iitmandi.ac.in/~arti/).

## Future work
* Reorganize the Php Functions
* Having Single Authentication and connection in a different config section.

## Contributors

[Abhijeet sharma](http://students.iitmandi.ac.in/~abhijeet_sharma) [Backend Developer]
1. Github: http://github.com/abhijeet2096
2. Email: sharma.abhijeet2096@gmail.com
3. Mobile: +91-8629015433

[Mohit sharma](https://www.facebook.com/profile.php?id=100009376469653) [UI Designer]
1. Github: https://github.com/mohitsharma1996
2. Email: mohit21sharma.ms@gmail.com
3. Mobile: +91-8629015362

[Akhil singhal](https://www.facebook.com/akhilsinghal1234) [Backend Deve]oper]
1. Github: https://github.com/akhilsinghal1234
2. Email: akhilsinghal1234@gmail.com
3. Mobile: +91-8629015410
