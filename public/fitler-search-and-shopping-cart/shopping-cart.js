let cartListItems = [];
let renderNumberOfItem = document.getElementById("number_Of_Item");

(function editFontSizeforChomreAndEgde () {
    const fontSize = Number(window.getComputedStyle(document.body).getPropertyValue('font-size').match(/\d+/)[0])
    if(fontSize > 16){
      document.querySelector('html').style.fontSize = '16px';
    }
})();
//get data from localStorage
function getDataFromLocalStorage() {
    let getDataFromLocal = window.localStorage.getItem('cart');
    let isCartNull = JSON.parse(getDataFromLocal);
    if (isCartNull === null) {
        cartListItems = [];
    }else{
        cartListItems = isCartNull;
    }
}
//render item of cart

function renderItemOfCard(){
    getDataFromLocalStorage();
        renderItem.innerHTML = "";
        if(cartListItems.length === 0){
            renderItem.innerHTML = " <div id=\"renderEmptyCart\" class=\"d-flex flex-column position-relative\">\n" +
                "                                    <div class=\"position-absolute text-center w-100\" style=\"top: 40px;\">\n" +
                "                                        <h2 class=\"text-dark\">Oops ! YOUR CART IS CURRENTLY EMPTY</h2>\n" +
                "\n" +
                "                                    </div>\n" +
                "                                    <div class=\"position-absolute text-center w-100\" style=\"bottom: 40px;\">\n" +
                "                                        <button class=\"btn btn-success\"><a href=\"AllProduct.html\" class=\"text-white px-2\">Shop Now !</a></button>\n" +
                "                                    </div>\n" +
                "                                </div>";
        } else {
            for (let item of cartListItems) {
                renderItem.innerHTML = renderItem.innerHTML + "<div class=\"ibox-content\">\n" +
                    "                                    <div class=\"table-responsive\">\n" +
                    "                                        <table class=\"table shoping-cart-table\">\n" +
                    "                                            <tbody>\n" +
                    "                                            <tr>\n" +
                    "                                                <td width=\"90\" class=\"align-middle\">\n" +
                    "                                                    <img src=\"" + item.image + "\" style=\"max-width: 100px; max-height: 100px;\"/>\n" +
                    "                                                </td>\n" +
                    "                                                <td class=\"desc\">\n" +
                    "                                                    <h3>\n" +
                    "                                                        <a href=\"" + item.detail + "\" class=\"text-navy\" >\n" +
                    "                                                            " + item.name + "\n" +
                    "                                                        </a>\n" +
                    "                                                    </h3>\n" +
                    "                                                    <dl class=\"small m-b-none\">\n" +
                    "                                                        <dt>Description:</dt>\n" +
                    "                                                        <dd id='shopping_detail_product'>" + item.description + "</dd>\n" +
                    "                                                    </dl>\n" +
                    "\n" +
                    "                                                    <div class=\"m-t-sm\">|\n" +
                    "                                                        <a href=\"#\" class=\"text-muted\" onclick=\"removeItemById("+ item.id +")\"><i class=\"fa fa-trash\"></i> Remove item</a>\n" +
                    "                                                    </div>\n" +
                    "                                                </td>\n" +
                    "\n" +
                    "                                                <td class=\"align-middle\" width=\"85\">\n" +
                    "                                                    " + item.price + "\t <strong>X</strong> \n" +
                    "\n" +
                    "                                                </td>\n" +
                    "                                                <td width=\"85\" class=\"align-middle\">\n" +
                    "                                                    <input oninput=\"getValueFromUserChange(" + item.id + ")\" id=\"value_user_change"+ item.id +"\" type=\"number\" class=\"form-control\" value=\"" + item.quantity + "\" min=\"0\">\n" +
                    "                                                </td>\n" +
                    "                                                <td class=\"align-middle\">\n" +
                    "                                                    <h4 id=\"total_price"+ item.id +"\">\n" +
                    "                                                        " + item.totalPrice + "\n" +
                    "                                                    </h4>\n" +
                    "                                                </td>\n" +
                    "                                            </tr>\n" +
                    "                                            </tbody>\n" +
                    "                                        </table>\n" +
                    "                                    </div>\n" +
                    "\n" +
                    "                                </div>"
            }
            renderGrandTotal.innerText = `$ ${getGrandTotal()}`;
            rederNumberOfItem.innerText = `${getAllNumberItem()}`;
        }
}

// get user order quantity from detail product
function getUserOrderQuantity() {
    let quantityUserchoice = document.getElementById("inputQuantity").value;
    return Number(quantityUserchoice);
}

function addNewItemToCart(itemId, quantity) {
    getDataFromLocalStorage();
    // create item to add in cart
    let newItem = {};
    for(let product of products){
        if(itemId === product.id){
            newItem.id = product.id;
            newItem.image = product.image;
            newItem.detail = product.detail;
            newItem.name = product.name;
            newItem.description = product.description;
            newItem.price = product.price;
            newItem.quantity = quantity;
            newItem.totalPrice = (quantity * product.price).toFixed(2);
        }
    }
    // see if item is exist in cart and add
    if(cartListItems.length === 0){
        cartListItems.push(newItem);
    }else {
        let isNewItemExist = cartListItems.some(item => item.id === itemId);
        if(isNewItemExist){
            for(let item of cartListItems){
                if( item.id === itemId){
                    item.quantity += quantity;
                    // total Price per item
                    item.totalPrice = (item.quantity * item.price).toFixed(2);
                }
            }
        }else{
            cartListItems.push(newItem);
        }
    }
    window.localStorage.setItem('cart', JSON.stringify(cartListItems));
    renderNumberOfItem.innerText = `${getAllNumberItem()}`;
    console.log(cartListItems);
}

// window.localStorage.clear();

function removeItemById(itemId) {
    getDataFromLocalStorage();
    let indexOfItemRemove = cartListItems.findIndex(item => item.id === itemId);
    cartListItems.splice(indexOfItemRemove, 1);
    console.log(cartListItems);
    window.localStorage.setItem('cart', JSON.stringify(cartListItems));
    renderItemOfCard();
    renderGrandTotal.innerText = `$ ${getGrandTotal()}`;
    renderNumberOfItem.innerText = `${getAllNumberItem()}`;
    rederNumberOfItem.innerText = `${getAllNumberItem()}`;
}

function removeAllItem(){
    cartListItems = [];
    window.localStorage.clear();
    renderItemOfCard();
    renderGrandTotal.innerText = `$ ${getGrandTotal()}`;
    renderNumberOfItem.innerText = `${getAllNumberItem()}`;
    rederNumberOfItem.innerText = `${getAllNumberItem()}`;
}

// get Grandtotal

function getGrandTotal(){
    let grandTotal = 0;
    getDataFromLocalStorage();
    for(let item of cartListItems){
        grandTotal += Number(item.totalPrice);
    }
    return grandTotal.toFixed(2);
}

//get All number item in cart


function getAllNumberItem() {
    let numberOfItem = 0;
    getDataFromLocalStorage();
    for(let item of cartListItems){
        numberOfItem += item.quantity;
    };
    return numberOfItem;
}

renderNumberOfItem.innerText = `${getAllNumberItem()}`;

function getValueFromUserChange(itemId) {
    getDataFromLocalStorage();
    let totalPrice = 0;
    let idItem = "value_user_change" + itemId;
    let valueFromUserChange = document.getElementById(idItem).value;
    console.log(valueFromUserChange);

    for(let item of cartListItems){
        if(item.id === itemId){
            item.quantity = Number(valueFromUserChange);
            item.totalPrice = Number(item.quantity * item.price);
            totalPrice = item.totalPrice;
        }
    }

    window.localStorage.setItem('cart', JSON.stringify(cartListItems));
    let totalOneItem = "total_price" + itemId;

    let renderTotalPrice = document.getElementById(totalOneItem);

    renderTotalPrice.innerText = `${totalPrice.toFixed(2)}`;
    renderGrandTotal.innerText = `$ ${getGrandTotal()}`;
    renderNumberOfItem.innerText = `${getAllNumberItem()}`;
    rederNumberOfItem.innerText = `${getAllNumberItem()}`;
}
