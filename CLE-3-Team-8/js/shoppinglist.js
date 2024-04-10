window.addEventListener("load", init)
const selectedStore = localStorage.getItem('selectedStore');
const storeURL = `http://localhost/cle-3-team-8/services/webservice/index.php/GetPart?id=${selectedStore}`;
let productList;
let localStorageArray = localStorage.getItem("shoppingList")
let shoppingArray = JSON.parse(localStorageArray)

function init() {
    ajaxCallHandler(storeURL, showStoreProducts)
    productList = document.getElementById('product-list');
    productList.addEventListener('click', removeProduct);
}

function ajaxCallHandler(url, successHandler) {
    fetch(url)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(successHandler)
        .catch(ajaxErrorHandler)
}

function showStoreProducts(data) {

    productList = document.getElementById('product-list')
    shoppingArray = localStorage.getItem("shoppingList")

    let shoppingList = JSON.parse(shoppingArray)

    for (let item of data.products) {
        for (let shoppingItem of shoppingList) {
            console.log(item.naam)
            if ( item.naam === shoppingItem) {
                let product = document.createElement('div');
                product.classList.add('product-list');
                product.classList.add('product');
                productList.appendChild(product);

                let productText = document.createElement('p');
                productText.innerHTML = item.naam;
                product.appendChild(productText);

                let deleteIcon = document.createElement('i');
                deleteIcon.classList.add('fa-solid');
                deleteIcon.classList.add('fa-trash-can');
                deleteIcon.id = 'trashCan';
                deleteIcon.setAttribute('product-name', item.naam)
                product.appendChild(deleteIcon);
            }
        }
    }
}
function ajaxErrorHandler(data) {
    console.error(data);
    const error = document.createElement('div');
    error.classList.add('error');
    error.innerHTML = 'oeps';
    storeContainer.before(error);
}

function removeProduct(event) {
    // Check if the clicked element is an <i> element
    if (event.target.nodeName === 'I') {
        // Get the parent element of the delete icon
        const productElement = event.target.parentElement;

        // Get the product name from the attribute set on the delete icon
        const productName = event.target.getAttribute('product-name');

        // Retrieve shoppingList from local storage
        let shoppingList = JSON.parse(localStorage.getItem("shoppingList"));

        // Remove the productName from the shoppingList
        const index = shoppingList.indexOf(productName);
        if (index !== -1) {
            shoppingList.splice(index, 1);
            // Update the shoppingList in local storage
            localStorage.setItem("shoppingList", JSON.stringify(shoppingList));
            console.log("Product removed from shoppingList:", productName);

            // Remove the product element from the page
            productElement.remove();
        } else {
            console.log("Product not found in shoppingList:", productName);
        }
    }
}
