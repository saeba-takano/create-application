<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Alcohol
 * 
 * @property int $id
 * @property string $alcohol_name
 * @property int $vote_average
 * @property string|null $introduction
 * @property string|null $purchase_URL
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $country_id
 * @property int|null $prefecture_id
 * @property int $degree_id
 * @property int $kind_id
 * 
 * @property Country $country
 * @property Degree $degree
 * @property Kind $kind
 * @property Collection|HashtagAlcohol[] $hashtag_alcohols
 * @property Collection|Post[] $posts
 *
 * @package App\Models
 */
class Alcohol extends Model
{
	protected $table = 'alcohols';

	protected $casts = [
		'vote_average' => 'int',
		'country_id' => 'int',
		'prefecture_id' => 'int',
		'degree_id' => 'int',
		'kind_id' => 'int'
	];

	protected $fillable = [
		'alcohol_name',
		'vote_average',
		'introduction',
		'purchase_URL',
		'country_id',
		'prefecture_id',
		'degree_id',
		'kind_id'
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
