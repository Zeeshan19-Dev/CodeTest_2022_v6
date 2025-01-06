<?php

namespace DTApi\Models\User;

use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    const CUSTOMER_TYPE = 'customer';
    const TRANSLATOR_TYPE = 'translator';
}