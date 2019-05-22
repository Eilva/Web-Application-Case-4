create table coffee
  (
    id int not null auto_increment primary key,
    catergory varchar(50) not null,
    name  varchar(50) not null,
    price float(2) not null,
    qty int not null,
    sales float(2) not null
);
