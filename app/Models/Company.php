<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Get the category that owns the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    /**
     * Get the location that owns the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        return $this->belongsTo('App\Models\Location', 'location_id', 'id');
    }

    /**
     * Get the title that owns the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function title()
    {
        return $this->belongsTo('App\Models\Title', 'title_id', 'id');
    }

    /**
     * Get all of the jobs for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobs()
    {
        return $this->hasMany('App\Models\Job', 'company_id', 'id');
    }
}
