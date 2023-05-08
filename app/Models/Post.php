<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * 
 * @property int $id
 * @property string $comment
 * @property int $votes
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $alcohol_id
 * 
 * @property Alcohol $alcohol
 * @property Collection|HashtagPost[] $hashtag_posts
 *
 * @package App\Models
 */
class Post extends Model
{
	protected $table = 'posts';

	protected $casts = [
		'votes' => 'int',
		'alcohol_id' => 'int'
	];

	protected $fillable = [
		'comment',
		'votes',
		'alcohol_id'
	];
	

	public function alcohol()
	{
		return $this->belongsTo(Alcohol::class);
	}

	public function hashtag_posts()
	{
		return $this->hasMany(HashtagPost::class);
	}
}
