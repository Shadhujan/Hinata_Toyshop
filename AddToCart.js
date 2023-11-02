// JavaScript Document
// Function to add items to cart
function addToCart(productName, price){
    let cartItems = localStorage.getItem('cart') ? localStorage.getItem('cart').split(',') : [];

    cartItems.push(`${productName} $${price.toFixed(2)}`);

    localStorage.setItem('cart', cartItems);

    displayCart(); // Assuming displayCart() is defined elsewhere
}

// Function to clear the cart
function clearCart() {
    // Clear the cart in localStorage
    localStorage.removeItem('cart');

    // Refresh the cart display
    displayCart(); // Assuming displayCart() is defined elsewhere
}

// Function to display the items in the cart
function displayCart() {
    let cartItems = localStorage.getItem('cart') ? localStorage.getItem('cart').split(',') : [];
    let cartItemsElement = document.getElementById('cartlist');

    cartItemsElement.innerHTML = '';

    cartItems.forEach(item => {
        let div = document.createElement('div');
        div.textContent = item;
        cartItemsElement.appendChild(div);
    });
}
function updateTotal() {
    let quantity = parseInt(document.getElementById('quantity').value, 10);
    let pricePerItem = 1200; // Assuming the price per item is Rs. 1200

    let totalAmountElement = document.querySelector('.total-amount');
    let totalAmount = quantity * pricePerItem;

    totalAmountElement.textContent = `Rs. ${totalAmount}`;
}

function updateTotal() {
    let quantity = parseInt(document.getElementById('quantity').value, 10);
    let pricePerItem = 1200; // Assuming the price per item is Rs. 1200

    let totalAmountElement = document.getElementById('totalAmount');
    let itemCountElement = document.getElementById('itemCount');

    let totalAmount = quantity * pricePerItem;

    totalAmountElement.textContent = totalAmount;
    itemCountElement.textContent = quantity > 1 ? `${quantity} items` : `${quantity} item`;
}
