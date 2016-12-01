<?php

namespace App\Models;

use T4\Orm\Model;

/**
 * Class User
 * @package App\Models
 *
 *
 * @property string $firstName
 * @property string $middleName
 * @property string $lastName
 * @property string $email
 */
class User
    extends Model
{
    protected static $schema = [
        'table'   => '__users',
        'columns' => [
            'firstName'  => ['type' => 'string'],
            'middleName' => ['type' => 'string'],
            'lastName'   => ['type' => 'string'],
            'email'      => ['type' => 'string'],
            'password'   => ['type' =>'string'],
            'registered' => ['type' => 'date'],
        ]
    ];

    public function getFullName()
    {
        if (!empty($this->firstName)
            &&
            !empty($this->middleName)
            &&
            !empty($this->lastName))
        {
            return $this->firstName . ' ' . $this->middleName . ' ' . $this->lastName;
        };

        if (!empty($this->firstName)
            &&
            !empty($this->lastName))
        {
            return $this->firstName . ' ' . $this->lastName;
        }

        if (empty($this->firstName)
            ||
            empty($this->lastName))
        {
            return $this->email;
        }

        return '';
    }
}