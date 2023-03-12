<?php

namespace App\Models;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExperienceDetails extends Model
{
    use HasFactory;
    protected $table = 'experience_details';
    protected $fillable = ['id','experience_id','picture', 'scope', 'details', 'cost', 'statistics'];
    /*protected $guarded =[];

    public function getRouteKeyName(){
        return 'uuid';
    }
    public function experience(){
        return $this->belongsTo(Experience::class);
    }*/
}
