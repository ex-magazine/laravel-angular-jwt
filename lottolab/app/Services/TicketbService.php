<?php

namespace App\Services;

use App\Models\Ticketb;
use Illuminate\Support\Collection;

class TicketbService
{
    public function getOpenTickets(): Collection
    {
      
        return Ticketb::with(['user', 'agent'])
            ->incomplete()
            ->orderBy('priority_id', 'desc')
            ->get();
    }
}