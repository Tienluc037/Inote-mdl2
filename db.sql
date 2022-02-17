create database `caseinote` collate utf8_unicode_ci;

use caseinote;

create table note_type (
                           id int(11) primary key auto_increment,
                           name varchar(255),
                           description varchar(255)
);


create table note(
                     id int(11) primary key auto_increment,
                     title varchar(255),
                     content varchar(500),
                     type_id int,
                     foreign key (type_id) references note_type(id)
);

drop table note_type;
drop table note;

