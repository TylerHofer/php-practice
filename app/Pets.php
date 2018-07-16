<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
        /**
         * Name of Pet
         *
         * @var string
         */
        protected $name;
        /**
         * Created at
         *
         * @var date
         */
        protected $date;
        /**
         * Modified at
         *
         * @var date
         */
        protected $Modified_at; 
}
