<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;

    protected $table = 'experiences';
    protected $fillable = ['id','uuid','user_id','header', 'years', 'detailsscope', 'picture'];
    
    /*protected $guarded =[];

    public function getRouteKeyName(){
        return 'uuid';
    }
    public function user(){
        return $this->belongsTo(User::class);
    }*/
}
