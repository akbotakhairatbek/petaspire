const productsContainer = document.querySelector('.products .box-container')
const cartBoxNumber = document.querySelector('.cart-total-quantity')
const favoriteBtn = document.getElementById('favorite-btn')
const favoriteContainer = document.querySelector('.favorite-container')
const favoriteListContainer = document.getElementById('favorite-list-container')
const emptyFavoriteListbtn = document.querySelector('.remove-all-btn')
const removefromfavoriteBtn = document.getElementById('remove-from-favorite-btn')


const FAVORITE_KEY = 'floral-favorite'



favoriteBtn.addEventListener('click', (e) => {
    favoriteContainer.classList.toggle('active')
    updateFavoriteContainer()
})

function renderProducts() {
    products.forEach(product => {
        productsContainer.innerHTML += `
            <div class="box">
                <span data-id='${product.id}' onclick='addToFavoriteList(${product.id})' class="fas fa-heart favorite"></span>
                <div class="image">
                    <img src="${product.imgSrc}" alt="${product.name}">
                </div>
                <div class="content">
                    <span>${product.name}</span>
                    <div class="price">${product.price} ₸</div>
                    <p class="description">${product.description}</p>

                </div>
            </div>
        `
    })
}

let favoriteList = JSON.parse(localStorage.getItem(FAVORITE_KEY)) || []

renderProducts()
updateCartBoxNumber()
updateFavoriteListIcons()


function addToFavoriteList(id) {
    const addToFavoriteElements = Array.from(document.querySelectorAll('.favorite'))
    addToFavoriteElements.forEach(element => {
        if (parseInt(element.getAttribute('data-id').trim()) === id) {
            element.classList.toggle('active')
        }
    })


    if (favoriteList.some(item => item.id === id)) {
        favoriteList = favoriteList.filter(listItem => listItem.id !== id)
        updateFavoriteList()
    } else {
        const newItem = products.find(product => product.id === id)
        favoriteList.push(newItem)
        updateFavoriteList()
    }

    updateFavoriteContainer()
}

function updateFavoriteList() {
    localStorage.setItem(FAVORITE_KEY, JSON.stringify(favoriteList))
}

// heart icons being active or not

function updateFavoriteListIcons() {
    const addToFavoriteElements = Array.from(document.querySelectorAll('.favorite'))
    addToFavoriteElements.forEach(element => {
        favoriteList.forEach(favorite => {
            if (favorite.id === parseInt(element.getAttribute('data-id').trim())) {
                element.classList.add('active')
            }
        })
    })
}


function updateFavoriteContainer() {
    favoriteListContainer.innerHTML = ''

    if(favoriteList.length == 0){
        favoriteListContainer.innerHTML = `
            <p class='empty-list'> your favorite list is empty</p>
        `
    }

    favoriteList.forEach(favorite => {
        favoriteListContainer.innerHTML += `
            <div class="favorite-list">
                <div class="favorite-box">
                    <div class="image">
                        <img src="${favorite.imgSrc}" alt="${favorite.name}">
                    </div>
                    <div class="content">
                        <h2 class="name">${favorite.name}</h2>
                        <div class="price">${favorite.price} ₸</div>
                    </div>
                </div>
                <div class="remove-from-favorite"><i onclick='removefromfavorite(${favorite.id})' class="fas fa-multiply"></i></div>
            </div>
        `
    })
}

function removefromfavorite(id){
    favoriteList = favoriteList.filter(favorite => favorite.id !== id)
    const addToFavoriteElements = Array.from(document.querySelectorAll('.favorite'))
    addToFavoriteElements.forEach(element => {
        if(parseInt(element.getAttribute('data-id').trim()) === id){
            element.classList.remove('active')
        }
    })
    updateFavoriteList()
    updateFavoriteContainer()
}


emptyFavoriteListbtn.addEventListener('click' ,()=>{
    favoriteList = []
    updateFavoriteList()
    updateFavoriteContainer()
    const addToFavoriteElements = Array.from(document.querySelectorAll('.favorite'))
    addToFavoriteElements.forEach(element => {
        element.classList.remove('active')
    })
})
