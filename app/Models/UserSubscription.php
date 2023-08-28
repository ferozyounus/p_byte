<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subscription;
class UserSubscription extends Model
{
    protected $guarded = [];
    protected $table = "user_subscription";
    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
