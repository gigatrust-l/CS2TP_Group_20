<?php

namespace App\Http\Controllers;
use App\Models\Address;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function update(Request $request)
    {
        //validates input from form
        $validated = $request->validate([
            'caid' => 'required|integer',
            'addressLine1' => 'required|string|max:255',
            'addressLine2' => 'nullable|string|max:255',
            'addressCity' => 'required|string|max:255',
            'addressCounty' => 'nullable|string|max:255',
            'addressPostcode' => 'required|string|max:20',
            'addressCountry' => 'required|string|max:255'

        ]);

        $address = Address::findOrFail($validated['caid']);

        $address->update([
            'ca_line1' => $validated['addressLine1'],
            'ca_line2' => $validated['addressLine2'],
            'ca_city' => $validated['addressCity'],
            'ca_county' => $validated['addressCounty'],
            'ca_postcode' => $validated['addressPostcode'],
            'ca_country' => $validated['addressCountry'],
        ]);

        return redirect()->to('/dashboard/addresses/' . $validated['caid'])->with('status', 'address-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request)
    {

        $address = $request->caid;

        $address->delete();

        return Redirect::to('/dashboard/addresses');
    }

}