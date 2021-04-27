function ready() {
    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}

function purchaseClicked() {
    var totalPurchase = document.getElementsByClassName('cart-total-price')[0].innerText;

    if (totalPurchase === "0 dt.") {
        alert('Le panier est vide!')
    } else {
        alert('Bonne écoute!')
        var cartItems = document.getElementsByClassName('cart-items')[0]
        console.log();
        while (cartItems.hasChildNodes()) {
            cartItems.removeChild(cartItems.firstChild)
        }
    }

}