<div style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; max-width: 600px; margin: 0 auto; border: 1px solid #eee; padding: 20px;">
    
    <div style="text-align: center; margin-bottom: 30px;">
        <img src="{{ asset('media/media_webp/logo.webp') }}" alt="Naturale Logo" style="width: 180px; height: auto;">
    </div>

    <h2 style="color: #2d3748; text-align: center;">Order Completed</h2>
    
    <p>Hi {{ $name }},</p>
    
    <p>
        Thank you for your order.
        Your order number is <strong>#{{ $order->oid }}</strong>.
    </p>

    <h3 style="border-bottom: 2px solid #edf2f7; padding-bottom: 10px;">Items in your order:</h3>
    
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="text-align: left; font-size: 12px; color: #718096; text-transform: uppercase;">
                <th style="padding: 10px 0;">Product</th>
                <th style="padding: 10px 0; text-align: center;">Qty</th>
                <th style="padding: 10px 0; text-align: right;">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
                <tr style="border-top: 1px solid #edf2f7;">
                    <td style="padding: 15px 0;">{{ $item->product->p_name ?? 'Product' }}</td>
                    <td style="padding: 15px 0; text-align: center;">{{ $item->oi_quantity }}</td>
                    <td style="padding: 15px 0; text-align: right;">£{{ number_format($item->oi_ind_price, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr style="border-top: 2px solid #edf2f7; font-weight: bold;">
                <td colspan="2" style="padding: 15px 0;">Total</td>
                <td style="padding: 15px 0; text-align: right;">£{{ number_format($order->o_price, 2) }}</td>
            </tr>
        </tfoot>
    </table>

    @if (!$subscribed)
    <p>Did you know you could have saved £4.99 on shipping if you join our subscription service!.</p>
    @else
    <P>You saved £4.99 on this order by being subscribed!</P>
    @endif

    <div style="margin-top: 30px; font-size: 12px; color: #a0aec0; text-align: center;">
        <p>Naturale | Sustainable Beauty</p>
    </div>
</div>