<?php

namespace DTApi\Models\Job;

use Illuminate\Database\Eloquent\Model;
class Job extends Model
{
    const PENDING_STATUS = 'pending';
    const ASSIGNED_STATUS = 'assigned';
    const STARTED_STATUS = 'started';

    const RWS_TYPE = 'rws';
    const UNPAID_TYPE = 'unpaid';
}