<?php

namespace App\Http\Controllers;

use App\Http\Resources\TicketbResource;
use App\Services\TicketbService;

class TicketbController extends Controller
{
    public function index(TicketbService $ticketService)
    {
        return response()->json(TicketbResource::collection($ticketService->getOpenTickets()));
    }
}