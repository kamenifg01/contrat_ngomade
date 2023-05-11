<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Contrat
 *
 * @property int $id
 * @property string $type
 * @property string $numero
 * @property Carbon $dateSignature
 * @property int $duree
 * @property int $id_client
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Client $client
 *
 * @package App\Models
 */
class Contrat extends Model
{
    use HasFactory;
	protected $table = 'contrat';

	protected $casts = [
		'dateSignature' => 'datetime',
		'duree' => 'int',
		'id_client' => 'int'
	];

	protected $fillable = [
		'type',
		'numero',
		'dateSignature',
		'duree',
		'id_client'
	];

	public function client()
	{
		return $this->belongsTo(Client::class, 'id_client');
	}
}
