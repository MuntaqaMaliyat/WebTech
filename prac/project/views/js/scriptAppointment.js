var confirmButton = document.querySelector('#appointment-form button');

confirmButton.addEventListener('click', function(event) {
  event.preventDefault();

  showReceiptModal();
});

function showReceiptModal() {
  var receiptModal = document.getElementById('receipt-modal');
  receiptModal.style.display = 'block';

  var receiptDetails = document.getElementById('receipt-details');
  receiptDetails.textContent = 'Thank you for your appointment! Your receipt details go here.';
}

var closeButton = document.querySelector('.close');
closeButton.addEventListener('click', function() {
  var receiptModal = document.getElementById('receipt-modal');
  receiptModal.style.display = 'none';
});
