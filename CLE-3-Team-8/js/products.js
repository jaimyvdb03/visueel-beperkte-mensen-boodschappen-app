window.addEventListener("load", init)
const selectedStore = localStorage.getItem('selectedStore');
const storeURL = `http://localhost/cle-3-team-8/services/webservice/index.php/GetPart?id=${selectedStore}`;
let productList;
let categoryList;
let selectedCategory = "";
let shoppingArray = [];


function init() {
    console.log(storeURL)
    ajaxCallHandler(storeURL, showStoreProducts)
    productList = document.getElementById('product-list');
    productList.addEventListener('change', productClickHandler)
    categoryList = document.getElementById('category-list')
    categoryList.addEventListener("click", categoryHandler);
    shoppingArray = [];
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
    productList.innerHTML = "";
    for (let item of data.products) {
        if (item.product_type === selectedCategory) {
            let product = document.createElement('div');
            product.classList.add('product-list');
            product.classList.add('product');
            productList.appendChild(product);
            let productText = document.createElement('p')
            productText.innerHTML = item.naam;
            product.appendChild(productText)
            let productBox = document.createElement('input')
            productBox.setAttribute('type', 'checkbox')
            productBox.setAttribute('value', item.naam)
            productBox.classList.add('productBox')
            product.appendChild(productBox)
        } else if (selectedCategory === "") {
            let product = document.createElement('div');
            product.classList.add('product-list');
            product.classList.add('product');
            productList.appendChild(product);
            let productText = document.createElement('p')
            productText.innerHTML = item.naam;
            product.appendChild(productText)
            let productBox = document.createElement('input')
            productBox.setAttribute('type', 'checkbox')
            productBox.setAttribute('value', item.naam)
            productBox.classList.add('productBox')
            product.appendChild(productBox)
        }
    }
    setCheckboxFromStorage(data)
}

function setCheckboxFromStorage(data) {
    if (localStorage.getItem('shoppingList') === null) {
        return;
    }
    const localStorageArray = localStorage.getItem('shoppingList');
    shoppingArray = JSON.parse(localStorageArray);
    console.log(shoppingArray)

    for (let item of shoppingArray) {
        const checkboxStorage = document.querySelector(`.productBox[value='${item}']`)
        checkboxStorage.checked = true;
    }
}

function productClickHandler (e) {
    let clickedItem = e.target;
    if (clickedItem.checked) {
        addProductToList(e);
    } else {
        removeProductFromList(e);
    }
}

function addProductToList(e) {
    let clickedItem = e.target;

    const productName = clickedItem.value;
    shoppingArray.push(productName);
    localStorage.setItem('shoppingList', JSON.stringify(shoppingArray))
}

function removeProductFromList(e) {
    let clickedItem = e.target;
    const productName = clickedItem.value;
    const storageHasProduct = shoppingArray.indexOf(productName);
    shoppingArray.splice(storageHasProduct, 1);
    localStorage.setItem('shoppingList', JSON.stringify(shoppingArray))
}


function categoryHandler(e) {
    selectedCategory = e.target.id;
    ajaxCallHandler(storeURL, showStoreProducts)
}

function ajaxErrorHandler() {

}