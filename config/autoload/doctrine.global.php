<?php

return [
    'doctrine'=>[
        'connection'=>[
            'orm_default'=>[
                'driverClass'=>'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params'=>[
                    'host'=>'localhost',
                    'port'=>'3306',
                    'user'=>'homestead',
                    'password'=>'secret',
                    'dbname'=>'codeemailmkt',
                    'driverOptions'=>[
                        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
                    ]
                ]
            ]
        ]
    ]
];