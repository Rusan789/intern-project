//for price calculation of seat
function calculate() {
    var seat = 47;
    var n1 = parseInt(document.getElementById('seatNumber').value);
    var n2 = parseInt(document.getElementById('seatPrice').value);
    var res = document.getElementById('result').value;

    //calculate total price
    if(res === '*') {
        document.getElementById('totalPrice').innerHTML = n1*n2;
        // document.getElementById('remSeat').innerHTML = seat-n1;
    }

    //if value is less than 0
    if(document.getElementById('totalPrice').innerHTML<=0){
        document.getElementById('totalPrice').innerHTML = 0;
    }

    //if value is more than 47
    if(document.getElementById('seatNumber').value>seat){
        document.getElementById('totalPrice').innerHTML = 0;
    }

    //if given value is less than 0
    if(n1<=0) {
        document.getElementById('error').innerHTML = "Seat cannot be less than 0";
    }

    //if given value is more than 47
    if(n1>seat) {
        document.getElementById('error').innerHTML = "Please choose less than 47 seats.";
    }
}

// function payWithKhalti() {
//     var config = {
//         // replace the publicKey with yours
//         "publicKey": "{{ confi }}",
//         "productIdentity": "1234567890",
//         "productName": "Tourist Bus By Kathmandu Yatayat",
//         "productUrl": "http://127.0.0.1:8000/busDetails/1",
//         "paymentPreference": [
//             "KHALTI",
//             "EBANKING",
//             "MOBILE_BANKING",
//             "CONNECT_IPS",
//             "SCT",
//             ],
//         "eventHandler": {
//             onSuccess (payload) {
//                 // hit merchant api for initiating verfication
//                 console.log(payload);
//                 if(payload.idx) {
//                     $.ajaxSetup({
//                         headers: {
//                             'X-CSRF-TOKEN': '{{csrf_token()}}'
//                         }
//                     });

//                     $.ajax({
//                         method: 'POST',
//                         url: "{{ route('getTicket') }}",
//                         data: payload,

//                     //     success: function(response) {
//                     //         if(response.success == 1) {
//                     //             window.location = response.redirecto;   
//                     //         }else{
//                     //             checkout.hide();
//                     //         }
//                     //     }
//                     // });

//                     // $.ajax({
//                     //     type: 'POST',
//                     //     url: "{{ route('getTicket') }}",
//                     //     data: {
//                     //         token: 
//                     //     },
//                     });
                
//                 }
//             },
//             onError (error) {
//                 console.log(error);
//             },
//             onClose () {
//                 console.log('widget is closing');
//             }
//         }
//     };

//     var checkout = new KhaltiCheckout(config);
//     var btn = document.getElementById("payment-button");
//     btn.onclick = function () {
//         // minimum transaction amount must be 10, i.e 1000 in paisa.
//         checkout.show({amount: 1000});
//     }
// }

