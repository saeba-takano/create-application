<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alcohol extends Model
{
    use HasFactory;
    
    protected $fillable = [
		'alcohol_name',
		'vote_average',
		'introduction',
		'purchase_URL',
		'country_id',
		'prefecture_id',
		'degree',
		'kind_id',
	];

    
    public function country()
	{
		return $this->belongsTo(Country::class);
	}

	public function kind()
	{
		return $this->belongsTo(Kind::class);
	}

	public function hashtag_alcohols()
	{
		return $this->hasMany(HashtagAlcohol::class);
	}

	public function posts()
	{
		return $this->hasMany(Post::class);
	}
}
