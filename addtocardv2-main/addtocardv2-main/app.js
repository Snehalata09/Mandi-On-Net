let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'Fresh Oranges',
        image: 'product-1.png',
        price: 30
    },
    {
        id: 2,
        name: 'Fresh Apples',
        image: 'product-9.png',
        price: 40
    },
    {
        id: 3,
        name: 'Fresh Banana',
        image: 'product-11.png',
        price: 20
    },
    {
        id: 4,
        name: 'Fresh Grapes',
        image: 'product-13.png',
        price: 25
    },
    {
        id: 5,
        name: 'Fresh Chickoo',
        image: 'product-12.png',
        price: 25
    },
    {
        id: 6,
        name: 'Sweet Lime',
        image: 'product-14.png',
        price: 35
    },
    {
        id: 7,
        name: 'Fresh Tomatoes',
        image: 'product-15.png',
        price: 20
    },
    {
        id: 8,
        name: 'Fresh Lemons',
        image: 'product-8.png',
        price: 2
    },
    {
        id: 9,
        name: 'Fresh Onions',
        image: 'product-2.png',
        price: 20
    },
    {
        id: 10,
        name: 'Fresh Carrots',
        image: 'product-7.png',
        price: 25
    },
    {
        id: 11,
        name: 'Fresh Cabbages',
        image: 'product-4.png',
        price: 15
    },
    {
        id: 12,
        name: 'Fresh Potatoes',
        image: 'product-5.png',
        price: 10
    },
    {
        id: 13,
        name: 'Capsicum',
        image: 'product-16.png',
        price: 15
    },
    {
        id: 14,
        name: 'Fresh Peas',
        image: 'product-17.png',
        price: 20
    },
    {
        id: 15,
        name: 'Coriander',
        image: 'product-20.png',
        price: 10
    },
    {
        id: 16,
        name: 'Green Chilies',
        image: 'product-21.png',
        quantity: '1/4 kg',
        price: 5
    },
    {
        id: 17,
        name: 'Garlic',
        image: 'product-10.png',
        price: 20
    },
    {
        id: 18,
        name: 'Ginger',
        image: 'product-19.png',
        price: 5
    },
    {
        id: 19,
        name: 'Wheat',
        image: 'product-22.png',
        price: 30
    },
    {
        id: 20,
        name: 'Rice',
        image: 'product-23.png',
        price: 40
    },
    {
        id: 21,
        name: 'Jowar',
        image: 'product-24.png',
        price: 28.50
    },
    {
        id: 22,
        name: 'Shabudana',
        image: 'product-26.png',
        price: 35
    },
    {
        id: 23,
        name: 'Corn Grains',
        image: 'product-27.png',
        price: 37
    },
    {
        id: 24,
        name: 'Red Chillie Powder ',
        image: 'product-29.png',
        price: 55
    },
    {
        id: 25,
        name: 'Turmaric Powder',
        image: 'product-28.png',
        price: 50
    },
    {
        id: 26,
        name: 'Cloves',
        image: 'product-31.png',
        price: 40
    },
    {
        id: 27,
        name: 'Cumin Seeds',
        image: 'product-32.png',
        price: 40
    },

];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}
