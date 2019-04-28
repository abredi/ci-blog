
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
