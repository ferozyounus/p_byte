<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserSubscription;
class Subscription extends Model
{
    protected $guarded = [];
    protected $table = "subscriptions";
    public function userSubscription()
    {
        return $this->hasMany(UserSubscription::class);
    }
}
