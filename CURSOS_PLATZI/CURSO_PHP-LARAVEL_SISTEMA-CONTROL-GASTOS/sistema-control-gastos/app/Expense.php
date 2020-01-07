<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'expenses';

    public function expenseReport()
    {
        //Pertenece a un expense report
        return $this->belongsTo(ExpenseReport::class);
    }
}
