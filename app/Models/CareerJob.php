<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerJob extends Model
{
    protected $fillable = [
        'title',
        'major',
        'salary',
        'work_location',
        'work_type',
        'company_name',
        'company_logo_char',
        'company_img',
        'company_bg',
        'location',
        'location_group',
        'posted_time',
        'post_time_category',
        'apply_url',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Scope query untuk hanya mengambil lowongan yang aktif.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
