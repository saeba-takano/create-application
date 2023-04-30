<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HashtagName
 * 
 * @property int $id
 * @property string $hashtag_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|HashtagAlcohol[] $hashtag_alcohols
 * @property Collection|HashtagPost[] $hashtag_posts
 *
 * @package App\Models
 */
class HashtagName extends Model
{
	protected $table = 'hashtag_name';

	protected $fillable = [
		'hashtag_name'
	];

	public function hashtag_alcohols()
	{
		return $this->hasMany(HashtagAlcohol::class);
	}

	public function hashtag_posts()
	{
		return $this->hasMany(HashtagPost::class);
	}
}
