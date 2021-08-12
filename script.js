const $partyNumber = document.getElementById('party');
const $total = document.getElementById('total');

$partyNumber.addEventListener('change', (e) => {
    if(e.target.value === '') {
        $total.innerText = 'Donation* per person: $100.00'
    } else {
        const total = e.target.value * 100.00;
        $total.innerText = `Your total is $${total.toFixed(2)}`;
    }
})