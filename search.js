// JavaScript code

  function search_animal() {
  	let input = document.getElementById('searchbar').value
  	input=input.toLowerCase();
  	let x = document.querySelectorAll('.content, .image ');

  	for (i = 0; i < x.length; i++) {
  		if (!x[i].innerHTML.toLowerCase().includes(input)) {
  			x[i].style.display="none";
  		}
  		else {
  			x[i].style.display="list-item";
  		}
  	}
  }

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
