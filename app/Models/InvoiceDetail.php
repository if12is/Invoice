<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;

    protected $table = 'invoice_details';
    protected $primaryKey = 'lineNo';

    protected $fillable = [
        'lineNo',
        'productName',
        'UnitNo',
        'price',
        'quantity',
        'total',
        'expiryDate',
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'UnitNo', 'unitNo');
    }
}
