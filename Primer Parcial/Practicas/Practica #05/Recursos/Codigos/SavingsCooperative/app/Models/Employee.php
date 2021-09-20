<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed employee_code
 * @property string name
 * @property string identification
 * @property string sex
 * @property string marital_status
 * @property string profession
 * @property string nationality
 * @property DateTime date_of_birth
 * @property DateTime date_of_admission
 * @property DateTime departure_date
 * @property string internal_mail
 * @property string personal_mail
 * @mixin Builder
 */
class Employee extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    public $primaryKey = 'employee_code';

    /**
     * @var string[]
     */
    protected $guarded = ['employee_code'];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'identification',
        'sex',
        'marital_status',
        'profession',
        'nationality',
        'date_of_birth',
        'date_of_admission',
        'departure_date',
        'internal_mail',
        'personal_mail'
    ];

    /**
     * @var bool
     */
    public $incrementing = true;
}
