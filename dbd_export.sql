CREATE TABLE user (
  UserID int AUTO_INCREMENT PRIMARY KEY,
  FIO varchar(255),
  phone varchar(255),
  mail varchar(255),
  bank_requisits varchar(255),
  password varchar(255),
  role int
);

CREATE TABLE product (
  ProductID int AUTO_INCREMENT PRIMARY KEY,
  name varchar(255),
  amount int,
  description varchar(255),
  picture varchar(255),
  price float
);

CREATE TABLE address (
  AddressID int AUTO_INCREMENT PRIMARY KEY,
  address varchar(255),
  UserID int,
  FOREIGN KEY (UserID) REFERENCES user(UserID) 
    ON UPDATE CASCADE 
    ON DELETE CASCADE
);

CREATE TABLE cart (
  CartID int AUTO_INCREMENT PRIMARY KEY,
  UserID int,
  ProductID int,
  TotalAmount int,
  Status int,
  TotalPrice float,
  FOREIGN KEY (UserID) REFERENCES user(UserID) 
    ON UPDATE CASCADE 
    ON DELETE CASCADE,
  FOREIGN KEY (ProductID) REFERENCES product(ProductID) 
    ON UPDATE CASCADE 
    ON DELETE CASCADE
);

CREATE TABLE `order` (
  OrderID int AUTO_INCREMENT PRIMARY KEY,
  ProductID int,
  AddressID int,
  TotalAmount int,
  TotalPrice float,
  Status int,
  FOREIGN KEY (ProductID) REFERENCES product(ProductID) 
    ON UPDATE CASCADE 
    ON DELETE CASCADE,
  FOREIGN KEY (AddressID) REFERENCES address(AddressID) 
    ON UPDATE CASCADE 
    ON DELETE CASCADE
);

CREATE TABLE favourites (
  FavouritesID int AUTO_INCREMENT PRIMARY KEY,
  UserID int,
  ProductID int,
  FOREIGN KEY (UserID) REFERENCES user(UserID) 
    ON UPDATE CASCADE 
    ON DELETE CASCADE,
  FOREIGN KEY (ProductID) REFERENCES product(ProductID) 
    ON UPDATE CASCADE 
    ON DELETE CASCADE
);

CREATE TABLE feedback (
  FeedbackID int AUTO_INCREMENT PRIMARY KEY,
  UserID int,
  ProductID int,
  Mark int,
  comment varchar(255),
  photo varchar(255),
  FOREIGN KEY (UserID) REFERENCES user(UserID) 
    ON UPDATE CASCADE 
    ON DELETE CASCADE,
  FOREIGN KEY (ProductID) REFERENCES product(ProductID) 
    ON UPDATE CASCADE 
    ON DELETE CASCADE
);
