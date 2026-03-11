<div style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; max-width: 600px; margin: 0 auto; border: 1px solid #eee; padding: 20px;">
    
    <div style="text-align: center; margin-bottom: 30px;">
        <img src="{{ $message->embed(public_path('media/media_webp/logo.webp')) }}" alt="Naturale Logo" style="width: 180px; height: auto;">
    </div>

    <h2 style="color: #2d3748; text-align: center;">Order Status Update</h2>
    
    <p>Hi {{ auth()->user()->name }},</p>
    
    <p>
        @if(strtolower($statusText) == 'refund requested')
            A refund has been requested for order number <strong>#{{ $order->oid }}</strong>.
        @elseif(strtolower($statusText) == 'cancelled')
            Your order number <strong>#{{ $order->oid }}</strong> has been cancelled.
        @else
            The status of your order <strong>#{{ $order->oid }}</strong> has been updated to: <strong>{{ strtoupper($statusText) }}</strong>.
        @endif
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

    <div style="margin-top: 30px; font-size: 12px; color: #a0aec0; text-align: center;">
        <p>Naturale | Sustainable Beauty</p>
    </div>
</div>