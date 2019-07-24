<?php

namespace App\Observers;

use App\Models\Production;

class ProductionObserver
{
	public function creating(Production $production)
	{
		$production->bsrate = round($production->bs / $production->wip, 4) * 100;
	}
}
