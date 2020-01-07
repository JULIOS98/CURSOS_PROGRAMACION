<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseReport extends Model
{
    protected $table = 'expense_reports';

    public function expenses(){
        
        //Existe una relacion con muchos gastos
        return $this->hasMany(Expense::class); 
    }
}
