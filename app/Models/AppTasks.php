<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppTasks extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_parent_id',
        'name',
        'description',
        'main_task_parent_id',
        'by_user_id',
        'to_user_id',
        'dt_starting',
        'dt_done',
        'is_done',
        'is_active',
    ];

    public function parent()
    {
        return $this->belongsTo(AppTasks::class, 'task_parent_id');
    }

    public function mainParent()
    {
        return $this->belongsTo(AppTasks::class, 'main_task_parent_id');
    }

    public function byUser()
    {
        return $this->belongsTo(User::class, 'by_user_id');
    }

    public function toUser()
    {
        return $this->belongsTo(User::class, 'to_user_id');
    }
}
