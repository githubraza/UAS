<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function book(){
        return $this->belongsTo(Book::class, "book_id", "id");
    }

    public function order(){
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
