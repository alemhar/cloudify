<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deliveries = auth()->user()->company->transactions()->with(['transactionItems', 'recipient'])->get();
        return Inertia::render('Deliveries/Index', [
            'deliveries' => $deliveries,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Deliveries/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $transaction = $request->user()->company->transactions()->create([
            "grand_total" => $request->grand_total,
            "recipient_id" => $request->recipient_id,
            "notes" => $request->notes,
            "discount" => $request->discount,
            "type" => $request->type,
            "user_id" => $request->user()->id,
            "status" => $request->status,
            "shipped_at" => Carbon::now(),
        ]);

        foreach ($request->items as $item) {
            $transaction->transactionItems()->create([
                "item_id" => $item['id'],
                "name" => $item['name'],
                "sku" => $item['sku'] ?? null,
                "price" => $item['price'],
                "quantity" => $item['order_quantity'],
                "category_id" => $item['category_id'],
                "company_id" => $request->user()->company->id,
                "shipped_at" => Carbon::now(),
            ]);
        }
        // $transaction->items()->createMany($request->items);

        return redirect()->route('deliveries')->with('success', 'Delivery created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
