<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\TicketbResource;
use App\Http\Controllers\Controller;
use App\Services\TicketbService;

class TicketbController extends Controller
{
    public function index(TicketbService $ticketService)
    {
        return response()->json(TicketbResource::collection($ticketService->getOpenTickets()));
    }
}