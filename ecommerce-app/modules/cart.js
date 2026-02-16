let cart = [];

export function addToCart(product) {
    cart.push(product);
    renderCart();
}

export function getCartTotal() {
    return cart.reduce((total, item) => total + item.price, 0);
}

export function renderCart() {
    const cartDiv = document.getElementById("cart");
    cartDiv.innerHTML = "";

    cart.forEach(item => {
        cartDiv.innerHTML += `<p>${item.name} - Rs. ${item.price}</p>`;
    });

    cartDiv.innerHTML += `<h3>Total: Rs. ${getCartTotal()}</h3>`;
}
