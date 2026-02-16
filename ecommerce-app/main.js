import { products } from "./modules/products.js";
import { addToCart } from "./modules/cart.js";
import { formatCurrency } from "./modules/utils.js";

const productsDiv = document.getElementById("products");

products.forEach(product => {
    const btn = document.createElement("button");

    btn.innerHTML = `
        ${product.name} - ${formatCurrency(product.price)}
    `;

    btn.addEventListener("click", () => {
        addToCart(product);
    });

    productsDiv.appendChild(btn);
    productsDiv.appendChild(document.createElement("br"));
});
