<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property int $id
 * @property string $nom
 * @property int $numero
 * @property string $telephone
 * @property string $ville
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Contrat[] $contrats
 *
 * @package App\Models
 */
class Client extends Model
{
    use HasFactory;
	protected $table = 'client';

	protected $casts = [
		'numero' => 'int',
	];

	protected $fillable = [
		'nom',
		'numero',
		'telephone',
		'ville'
	];

	public function contrats()
	{
		return $this->hasMany(Contrat::class, 'id_client');
	}
}
