# Simple Blog

<<<<<<< HEAD
Simple Blog is a web application for sharing news and announcement inside organization.
 
 # Features
  - Post news
  - Edit News 
  - Delete News
  - Sign up
  - Login

![screenshot](./docs/app_screenshot.png)

This web application is developing for educational purposes.

## Built With

- PHP
- Codeignitor PHP framework
- HTML5,
- CSS
- Bootstrap

## Live Demo

-  Comming Soon

## Getting Started

**Install on Your Own Machine.**

Setup your machine setup

### Server Requirements

  - PHP version 5.6 or newer is recommended
  - Apache 2
  - MySQL

### Setup

- Clone the repository
  > to clone the repository simply run the code below on your computer termial
  >`git clone https://github.com/abredi/youtube-clone.git youtube`
- Create Database 
  `CREATE DATABASE blogs`
- Create news table
  ```
  CREATE TABLE news (
      id int(11) NOT NULL AUTO_INCREMENT,
      title varchar(128) NOT NULL,
      slug varchar(128) NOT NULL,
      text text NOT NULL,
      PRIMARY KEY (id),
      KEY slug (slug)
    );
  ```
- table users

  ```
  create table users (
    id int(11) not null auto_increment,
    username varchar(45),
    u_password varchar(255),
    primary key (id)
  );
  ```
- Change configurations in `application/config/config.php` and `application/config/database.php` files
  > In `application/config/config.php` change localhost by your domain name 
  e.g. `$config['base_url'] = 'http://localhost/blog/';`

  > In `application/config/database.php` file change as follows
    ```
    $db['default'] = array(
      //... 
      'hostname' => 'your_host_name',
      'username' => 'your_database_user_name',
      'password' => 'somepassword',
      'database' => 'your_database',
      //...
    )
    ```
      

### Usage

Open your browser and go to http://localhost:port/ci-blog

## Authors

👤 **Abdulaziz Ali**

- Github: [@abredi](https://github.com/abredi)
- Twitter: [@rediabdulaziz](https://twitter.com/rediabdulaziz)
- Linkedin: [linkedin](https://www.linkedin.com/in/abdulaziz-ali-98948011a)

## 🤝 Contributing

Contributions, issues and feature requests are welcome!

Feel free to check the [issues page](issues/).

## Show your support

Give a ⭐️ if you like this project!


## 📝 License

This project is [MIT](LICENSE) licensed.
=======
# Blog

## Blog is a simple web app to to sharing news and announcement

# Features

## Create news
## Edit News 
## Delete News
## Sign up
## Login

# Server Requirements

<ol>
<li>PHP version 5.6 or newer is recommended</li>
<li>Apache 2</li>
<li>MySQL</li>
</ol>

# Installation


## Create Database
## Create news table

<code>
CREATE TABLE news (<br>
        id int(11) NOT NULL AUTO_INCREMENT, <br>
        title varchar(128) NOT NULL,<br>
        slug varchar(128) NOT NULL,<br>
        text text NOT NULL,<br>
        PRIMARY KEY (id),<br>
        KEY slug (slug)<br>
);
 </code>

## Create table users

 <code>
 create table users (<br>
    id int(11) not null auto_increment,<br>
    username varchar(45),<br>
    u_password varchar(255),<br>
    primary key (id)<br>
);
 </code>

 ## Change some configurations in two files
### In <code>application/config/config.php</code> change localhost by YOUR_DOMAIN name<br>
<code>
$config['base_url'] = 'http://localhost/blog/';
</code>

### in <code> application/config/database.php</code> file change as follows
<code>
$db['default'] = array(<br>
	//... <br>
	'hostname' => 'your_host_name',<br>
	'username' => 'your_database_user_name',<br>
	'password' => 'somepassword',<br>
	'database' => 'your_database',<br>
    //...<br>
)
</code>
>>>>>>> c0359cbe335fb8f4b8392f9392a4e63dcbfaa07e
