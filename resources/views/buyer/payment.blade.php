<x-buyer-layout> 
    <form action="{{ route('pay') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <input type="hidden" name="payment_type" value="bank_transfer">
        <input type="hidden" name="payment_channel" value="bca">
        <input type="hidden" name="total_amount" value="24500">
    
        <button type="submit" class="bg-slate-300 text-indigo-900 text-sm font-semibold rounded-lg py-3 px-6 hover:bg-slate-400 transition">
            Beli Sekarang
        </button>
    </form>
    
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function(){
            // Trigger Snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            snap.pay('TRANSACTION_TOKEN_HERE', {
                // Optional
                onSuccess: function(result){
                    /* You may add your own implementation here */
                    alert("payment success!"); console.log(result);
                },
                // Optional
                onPending: function(result){
                    /* You may add your own implementation here */
                    alert("wating your payment!"); console.log(result);
                },
                // Optional
                onError: function(result){
                    /* You may add your own implementation here */
                    alert("payment failed!"); console.log(result);
                }
            });
        };
    </script>
</x-buyer-layout>
   