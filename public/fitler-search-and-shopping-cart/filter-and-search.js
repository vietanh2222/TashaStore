

let renderProducts = document.getElementById('renderProducts');
let navigation = document.getElementById('pagination-container');

// renderproduct from javacrips

function PrintProduct(priceMin, priceMax, category) {
    renderProducts.innerHTML = "";
    let found = 0;
    for(let product of products) {
        if (product.price < priceMax && product.price >= priceMin && (product.category === category || category === 'all')) {
            renderProducts.innerHTML = renderProducts.innerHTML + " <div class=\"col list-item\">\n" +
                "                    <div class=\"card card-gape border border-info\">\n" +
                "                        <a href=\"" + product.detail + "\">\n" +
                "                            <img style=\"width: 100%; height: 200px \" src=\"" + product.image + "\" class=\"card-img-top\" alt=\"products\">\n" +
                "                        </a>\n" +
                "                        <div class=\"card-body\">\n" +
                "                            <a href = \"" + product.detail + "\">\n" +
                "                                <h5 class=\"card-title\">" + product.name + "</h5>\n" +
                "                                 <p>$" + product.price + "</p>\n" +
                "                            </a>\n" +
                "                            <div class=\"col text-center\">\n" +
                "                                <button type=\"button\" class=\"btn btn-outline-dark flex-shrink-0\" onclick='addNewItemToCart("+ product.id + ",1)'>Add to cart</button>\n" +
                "                            </div>\n" +
                "                        </div>\n" +
                "                    </div>\n" +
                "                </div>"
            found++;
        }
    }
    if(found === 0){
        navigation.style.display = "none";
        renderProducts.innerHTML = "<h2 class=\"text-secondary d-block col-12 text-center text-uppercase\">No Product Found !</h2>";
    }else {
        navigation.style.display = "block";
    };
    makePagination();
}

// get choice from user and filter product
var selectMenu= document.getElementById("select_menu");

function filterProduct(category){
    var strUser = selectMenu.options[selectMenu.selectedIndex].value;

    switch (strUser) {
        case '0':
            PrintProduct(0, 1000000, category);
            break;
        case '1':
            PrintProduct(0, 20, category);
            break;
        case '2':
            PrintProduct(20, 60, category);
            break;
        case '3':
            PrintProduct(60, 1000000, category);
            break;
    }
}

// search products

function searchProductByName(category){
    let keySearch = document.getElementById("search_product").value.toLowerCase();
    renderProducts.innerHTML = "";

    let found = 0;
    for(let product of products){
        if(product.name.toLowerCase().includes(keySearch) && (product.category === category || category === "all")){
            renderProducts.innerHTML = renderProducts.innerHTML + " <div class=\"col list-item\">\n" +
                "                    <div class=\"card card-gape border border-info\">\n" +
                "                        <a href=\"" + product.detail + "\">\n" +
                "                            <img style=\"width: 100%; height: 200px \" src=\"" + product.image + "\" class=\"card-img-top\" alt=\"products\">\n" +
                "                        </a>\n" +
                "                        <div class=\"card-body\">\n" +
                "                            <a href = \"" + product.detail + "\">\n" +
                "                                <h5 class=\"card-title\">" + product.name + "</h5>\n" +
                "                                 <p>$" + product.price + "</p>\n" +
                "                            </a>\n" +
                "                            <div class=\"col text-center\">\n" +
                "                                <button type=\"button\" class=\"btn btn-outline-dark flex-shrink-0\" onclick='addNewItemToCart("+ product.id + ",1)'>Add to cart</button>\n" +
                "                            </div>\n" +
                "                        </div>\n" +
                "                    </div>\n" +
                "                </div>"
            found++;
        }
    }
    if(found === 0){
        navigation.style.display = "none";
        renderProducts.innerHTML = "<h2 class=\"text-secondary d-block col-12 text-center text-uppercase\">No Product Found !</h2>";
    } else {
        navigation.style.display = "block";
    }
    makePagination();
}
