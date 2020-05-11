# Simple Blog

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
