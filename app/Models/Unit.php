<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $table = 'units';
    protected $primaryKey = 'unitNo';
    protected $fillable = [
        'unitNo',
        'unitName',
    ];

    public function invoiceDetails()
    {
        return $this->hasMany(InvoiceDetail::class, 'UnitNo', 'unitNo');
    }
}
