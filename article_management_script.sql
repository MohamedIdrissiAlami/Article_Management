CREATE DATABASE article_management;
USE article_management;


create table users(
	UserID int auto_increment primary key,
    Name nvarchar(100) not null ,
    role nvarchar(50) not null,
    email nvarchar(100) unique not null,
    password nvarchar(255) not null
);



show tables;  
describe users;


create table article(
	ArticleID int auto_increment primary key,
    userID int not null,
    title nvarchar(255) not null,
    content text not null,
    reading_time int not null,
    views_count int default 0,
    likes int default 0,
    foreign key (UserID) references users(UserID) on delete cascade
);

show tables;
describe article;


create table comments(
	CommentID int auto_increment primary key,
    ArticleID int not null,
    Content text not null,
    foreign key (ArticleID) references article(ArticleID)
);

show tables;
describe comments;


