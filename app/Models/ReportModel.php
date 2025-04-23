<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportModel extends Model
{
    protected $table = 'reports'; 
    protected $fillable =[
        'user_id',
        'category',
        'location',
        'description',
        'images', 
        'status',
        'is_deleted', 
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}

}
