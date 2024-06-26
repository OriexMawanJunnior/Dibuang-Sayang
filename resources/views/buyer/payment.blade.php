<x-buyer-layout> 
    <form id="paymentForm">
        <div class="container mx-auto p-4 flex flex-row items-center">
            <div class="w-full max-w-3xl flex flex-col items-center space-y-4"> 
                <!-- Alamat Pengambilan -->
              <div class="w-full text-center mt-6">
                  <h1 class="text-indigo-900 text-4xl font-bold">{{$store->name}}</h1>
                </div>
                <div class="w-full h-auto flex flex-col justify-center items-center bg-white rounded shadow p-6 mt-6">
                  <h2 class="text-black text-3xl font-bold">Alamat Pengambilan</h2>
                  <div class="w-full mt-4">
                      <p class="text-black text-xl font-normal">{{ $store->address }}, {{ $store->district }}, {{ $store->city }}, {{ $store->province }}, {{ $store->postal_code }}</p>
                  </div>
              </div>
            
              <!-- Pesanan -->

              <div class="bg-white rounded shadow p-4 w-full flex flex-col">
                <div class="text-3xl font-bold font-['Quicksand'] mb-4">Pesanan</div>
                <div class="border-b border-indigo-900 opacity-80 mb-4"></div>
                <div class="flex flex-col space-y-4">
                  <div class="flex items-center">
                    <img class="w-36 h-36 rounded-lg" src="{{$product->getFirstMediaUrl('products') ?: 'https://via.placeholder.com/269x200'}}" alt="Donut" />
                    <div class="ml-4 flex-grow">
                      <div class="text-xl font-semibold font-['Quicksand']">{{$product->name}}</div>
                      <div class="text-xl font-normal font-['Quicksand']">Rp {{$product->price}}</div>
                      <input type="number" id="price" class="hidden" value="{{$product->price}}">
                      <input type="number" id="user_id" class="hidden" value="{{$user->id}}">
                    </div>
                    <div class="flex items-center space-x-2">
                      <div class="w-28 h-12 px-3 rounded-lg border border-indigo-900 flex justify-center items-center">
                        <input type="number" id="stock" class="w-full h-full text-center text-indigo-900 text-base font-semibold rounded-lg focus:outline-none font-['Quicksand']">
                        <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
              <!-- Rincian Pembayaran -->
              
              <div class="bg-white rounded shadow p-4 w-full flex flex-col">
                <div class="text-3xl font-bold font-['Quicksand'] mb-4">Rincian Pembayaran</div>
                <div class="border-b border-indigo-900 opacity-80 mb-4"></div>
                <div class="grid grid-cols-2 gap-4">
                  <div class="text-2xl font-semibold font-['Quicksand']">Total</div>
                  <div class="text-right text-2xl font-semibold font-['Quicksand']">Rp {{$product->price}}</div>
                </div>
                <div class="border-b border-indigo-900 opacity-80 my-4"></div>
                <div class="bg-slate-300 rounded-lg flex justify-center items-center h-12 mb-4">
                  <button type="submit" id="pay-button" class="text-indigo-900 text-xl font-semibold font-['Quicksand']">Bayar Sekarang</button>
                </div>
              </div>
          
              <!-- Nama Toko -->
          </div>
          
    </form>
    
    <script>
        const appUrl = '{{ config('app.url') }}';
        const payButton = document.getElementById('pay-button');

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('paymentForm');
            const stockInput = document.getElementById('stock');

            // Disable submit button if stock input is empty
            stockInput.addEventListener('input', function() {
                if (stockInput.value.trim() === '') {
                    payButton.disabled = true;
                } else {
                    payButton.disabled = false;
                }
            });

            // Initial check
            if (stockInput.value.trim() === '') {
                payButton.disabled = true;
            }
        });

        document.getElementById('paymentForm').addEventListener('submit', async function (event) {
          event.preventDefault();
    
          const data = {
            product_id: '{{ $product->id }}',
            user_id: '{{ auth()->user()->id }}',
            stock: document.getElementById('stock').value
          };
    
          disableButton();
    
          const response = await fetch(`http://localhost:8000/api/payment`, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              Accept: 'application/json',
              'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify(data),
          }).catch((error) => {
            console.error('Error:', error);
            // showToast('An error occurred', 'error');
            enableButton();
          });
    
          const result = await response.json();
          console.log(result.data);
          if (result.status === 'error') {
            // showToast('An error occurred', 'error');
            return;
          }
          if (result.errors) {
            // showToast(result.message, 'error');
            enableButton();
            return;
          }
    
          snap.pay(result.data.token, {
            onSuccess: function (result) {
            //   showToast('Payment successful', 'success');
              disableButton('Payment successful');
              console.log(result);
            },
            onPending: function (result) {
              console.log('pending');
              console.log(result);
            },
            onError: function (result) {
              showToast('Payment failed', 'error');
              enableButton();
              console.log(result);
            },
            onClose: function () {
              console.log('customer closed the popup without finishing the payment');
              enableButton();
            },
          });
        });
    
        function disableButton(message = 'Processing...') {
          payButton.disabled = true;
          payButton.textContent = message;
          payButton.classList.add('cursor-not-allowed', 'opacity-50');
        }
    
        function enableButton() {
          payButton.disabled = false;
          payButton.textContent = 'Bayar';
          payButton.classList.remove('cursor-not-allowed', 'opacity-50');
        }
      </script>
</x-buyer-layout>
   