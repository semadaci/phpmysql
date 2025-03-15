CREATE table catgories(
    id INTEGER PRIMARY KEY,
name VARCHAR(255) NOT NULL
);

CREATE table products(
    id INTEGER PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    catgories_ID INTEGER NOT NULL,
    FOREIGN KEY(catgories_ID) REFERENCES catgories(id)
);


INSERT INTO catgories(id, name) VALUES
(1, 'Fruit'),
(2,'Bakery'),
(3,'Dry Goods'),
(4,'Vegetables');

INSERT INTO products(id, name, catgories_ID) VALUES
(1,'Banana', 1 ),
(2,'Appes', 1),
(3, 'Bread' ,2),
(4,'Cake', 2),
(5,'Pasta', 3),
(6,'Cereal', 3);

-- sql query to use
-- select * from products AS P JOIN catgories AS c ON p.catgories_ID = c.id; 