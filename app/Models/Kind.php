<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Kind
 * 
 * @property int $id
 * @property string $kind_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Alcohol[] $alcohols
 *
 * @package App\Models
 */
class Kind extends Model
{
	protected $table = 'kinds';

	protected $fillable = [
		'kind_name'
	];

	public function alcohols()
	{
		return $this->hasMany(Alcohol::class);
	}
}
