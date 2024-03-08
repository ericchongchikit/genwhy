<?php 

    function sum($products){
        $sum = 0;

        foreach($products as $product){
            $sum += $product["amount"]; 
        };

        return $sum;
    }

    $products =[
        ["name"=>"pen", "amount"=>100],
        ["name"=>"mouse", "amount"=>200],
        ["name"=>"clock", "amount"=>30],
        ["name"=>"desk", "amount"=>400],
    ];

    echo sum($products)
?>