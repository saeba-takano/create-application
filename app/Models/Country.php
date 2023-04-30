<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 * 
 * @property int $id
 * @property string $country_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Alcohol[] $alcohols
 *
 * @package App\Models
 */
class Country extends Model
{
	protected $table = 'countries';

	protected $fillable = [
		'country_name'
	];

	public function alcohols()
	{
		return $this->hasMany(Alcohol::class);
	}
}
