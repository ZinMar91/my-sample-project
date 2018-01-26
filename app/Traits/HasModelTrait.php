<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/19/2017
 * Time: 3:13 PM
 */

namespace App\Traits;

use Carbon\Carbon;

trait HasModelTrait
{
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('m-d-Y');
    }

    public function showStatusOf($record)
    {
        switch ($record) {
            case $record->status_id == 10:
                return 'Active';
                break;
            case $record->status_id == 7:
                return 'Inactive';
                break;
            default:
                return 'Inactive';
        }
    }
}
