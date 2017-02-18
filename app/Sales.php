<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{

     protected $fillable = ['sales_person_name', 'name_of_cafe','street', 'suburb',
            'postcode', 'pos', 'contact_person', 'contact_number', 'email', 'website',
        'comment', 'size', 'level_of_interest'];

}
