<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Prefecture
 * 
 * @property int $id
 * @property string $prefecture_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Prefecture extends Model
{
	protected $table = 'prefectures';

	protected $fillable = [
		'prefecture_name'
	];
}
