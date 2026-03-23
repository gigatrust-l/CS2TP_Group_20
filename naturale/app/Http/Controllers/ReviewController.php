<?php


namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{


    public function update(Request $request, $id)
    {
        $request->validate([
            'r_title' => 'nullable|string|max:255',
            'r_rating' => 'required|integer|min:1|max:5',
            'r_description' => 'nullable|string|max:1000',
            'r_anonymous' => 'boolean',
        ]);

        $review = Review::where('rid', $id)
            ->where('r_cid', Auth::user()->customer->cid) // scoped to the logged-in user
            ->firstOrFail();

        $review->update([
            'r_title' => $request->r_title,
            'r_rating' => $request->r_rating,
            'r_description' => $request->r_description,
            'r_anonymous'   => $request->has('r_anonymous') ? 1 : 0,
        ]);

        return redirect()->back()->with('success', 'Review updated successfully.');
    }

    public function store(Request $request)
    {
        $customer = auth()->user()->customer;

        $request->validate([
            'r_pid' => 'required|integer',
            'r_title' => 'nullable|string|max:255',
            'r_rating' => 'required|integer|min:1|max:5',
            'r_description' => 'nullable|string|max:1000',
            'r_anonymous' => 'boolean',
        ]);

        // Verify the customer actually purchased this product
        $purchased = Product::where('pid', $request->r_pid)
            ->whereHas('orderItems.order', function ($query) use ($customer) {
                $query->where('o_cid', $customer->cid)
                    ->where('o_status', 'completed');
            })->exists();

        if (!$purchased) {
            return redirect()->back()->withErrors(['r_pid' => 'You can only review products you have purchased.']);
        }

        // Prevent duplicate reviews
        $alreadyReviewed = Review::where('r_cid', $customer->cid)
            ->where('r_pid', $request->r_pid)
            ->exists();

        if ($alreadyReviewed) {
            return redirect()->back()->withErrors(['r_pid' => 'You have already reviewed this product.']);
        }

        Review::create([
            'r_cid' => $customer->cid,
            'r_pid' => $request->r_pid,
            'r_title' => $request->r_title,
            'r_rating' => $request->r_rating,
            'r_description' => $request->r_description,
            'r_anonymous' => $request->has('r_anonymous') ? 1 : 0,
        ]);

        return redirect()->back()->with('success', 'Review submitted successfully.');
    }
}