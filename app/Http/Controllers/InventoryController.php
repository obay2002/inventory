<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */

     public function showMain()
    {
        return view('main');
    }

    public function showPersonalConvenat()
    {
        return view('PersonalCovenant');
    }

    public function showExchangeDocument()
    {
        return view('Documents.Exchange');
    }

    public function showReceivingDocument()
    {
        return view('Documents.Receiving');
    }

    public function showExternalTransfer()
    {
        return view('Transfer.External');
    }

    public function showInternalTransfer()
    {
        return view('Transfer.Internal');
    }

    public function showPureDsclosure()
    {
        return view('Reveal.PureDsclosure');
    }

    public function showReceiptDetection()
    {
        return view('Reveal.ReceiptDetection');
    }

    public function showTheFindings()
    {
        return view('Reveal.TheFindings');
    }

    public function index()
    {
        // return view('main');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function CreateReceivingdocument()
    {
        return view('Documents.Receiving_document');
    }

    public function CreateExchangeDocument()
    {
        return view('Documents.Exchange_document');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
