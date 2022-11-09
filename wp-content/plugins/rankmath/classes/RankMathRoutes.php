<?php

class RankMathRoutes
{

    public function __construct()
    {
        // Action
        add_action('rest_api_init', [$this, 'createRoutes']);
    }

    public function createRoutes()
    {
        register_rest_route('rankmath/v1', 'customer', [
            'method' => 'GET',
            'callback' => [$this, 'getCustomers'],
            'permissions_callback' => [$this, 'getCustomerPermission']
        ]);
    }

    public function getCustomers()
    {
        $customers = [];

        // Add database connection get data from database.
        try {
            $con = new PDO("mysql:host=localhost;port=8889;dbname=RankMath", 'root', 'root');

            $query = "SELECT * FROM Customers";
            //
            $statement = $con->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll();

            foreach ($results as $customer) {
                array_push(
                    $customers,
                    [
                        'name' => $customer['Name'],
                        'grossSalary' => intVal($customer['GrossSalary']),
                        'netSalary' => intVal($customer['NetSalary'])
                    ]
                );
            }
        } catch (error) {
            echo 'error';
        }

        return rest_ensure_response($customers);
    }


    public function getCustomerPermission()
    {
        return true;
    }
}

new RankMathRoutes();
