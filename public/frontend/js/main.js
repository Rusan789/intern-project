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
    if(document.getElementById('totalPrice').innerHTML<0){
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


    