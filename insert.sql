SELECT p.*, c.`name` 
FROM `products` AS p 
        JOIN `categories` AS c 
                ON p.`category_sid` = c.`sid`;


--left outer join 

SELECT p.*, c.`name` cate_name 
FROM `categories` p 
        LEFT JOIN `products`c 
            ON p.`category_sid` = c.`sid`;