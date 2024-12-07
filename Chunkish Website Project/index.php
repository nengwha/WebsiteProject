<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Chunkish</title>
	<link rel="shortcut icon" href="img/chunkicon.png">
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- Iconscout Link -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left side contact info -->
                <div class="col-md-6 d-flex align-items-center">
                    <a href="tel:+18885555555" class="me-4">
                        <i class="fas fa-phone me-3"></i> Call us at 1 (800) 
                    </a>
                    <br>
                    <a href="mailto:info@chunkish.com">
                        <i class="fas fa-envelope me-3"></i> info@chunkish.com
                    </a>
                </div>
                
                <!-- Right side options -->
                <div class="col-md-6">
                    <div class="d-flex justify-content-end align-items-center p-2">
                        <a href="contact.html" class="btn btn-sm btn-outline-light">Contact Us</a>
                        <select class="form-select form-select-sm me-3" style="width: auto;" aria-label="Language">
                            <option value="en" selected>English</option>
                            <option value="fil">Filipino</option>
                        </select>
                        <select class="form-select form-select-sm me-3" style="width: auto;" aria-label="Currency">
                            <option value="usd" selected>PHP</option>
                            <option value="php">USD</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Bar -->


    <!-- Mid Bar -->
    <div class="mid-bar" id="midBar">
        <div class="container">
            <div class="chunkish-logo">
                <a href="index.html" class="navbar-brand"><img src="img/C H U N K I S H.png" alt="Logo" title="Logo"></a>
            </div>

            <div class="search-box">
                <form action="">
                    <input type="text" name="search" id="srch" placeholder="Search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>

        <div class="container1 pr-5">
            <div class="sign-in">
                <?php if (isset($_SESSION['email'])): ?>
                    <a href="logout.php" class="fa fa-sign-out-alt" id="logoutButton"><span class="text"> Logout</span></a>
                <?php else: ?>
                    <a href="login.html" class="fa fa-user" id="signInButton"><span class="text"> Sign in</span></a>
                <?php endif; ?>
            </div>

            <div class="shopping-cart">
                <a href="#" class="cart-link" onclick="toggleCart(event)">
                    <i class="fa fa-shopping-cart"><span class="text"> Cart</span></i>
                    <span class="badge bg-danger" id="cartCount">0</span>
                </a>
                <div class="dropdown-menu" id="cartItems" style="display: none;">
                    <div class="p-3" style="min-width: 300px;">
                        <h6 class="mb-3">Shopping Cart</h6>
                        <div id="cartList"></div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Total:</span>
                            <span id="cartTotal">₱0.00</span>
                        </div>
                        <button class="btn btn-success w-100 mt-3" onclick="checkout()">Checkout</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>    
    <!-- End Mid Bar-->


    <!-- Nav Bar -->
        <nav class="navbar navbar-light navbar-expand-lg">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>

                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">

                            <div class="homebutton">
                                <button class="nav-item"><a href="index.php" class="nav-link">Home</a></button>
                            </div>

                            <div class="productsdropdown">
                                <button class="nav-item"><a href="" class="nav-link">Products</a></button>
                                    <div class="productscontent">
                                        <a href="">Dolls</a>
                                        <a href="">Rose</a>
                                        <a href="">Tulips</a>
                                    </div>
                            </div>

                            <div class="servicesdropdown">
                                <button class="nav-item"><a href="" class="nav-link">Services</a></button>
                                    <div class="servicescontent">
                                        <a href="">Jelqing</a>
                                        <a href="">Edging</a>
                                        <a href="">Gooning</a>
                                    </div>
                            </div>

                            <div class="contactsbutton">
                                <button class="nav-item"><a href="" class="nav-link">Contacts</a></button>
                            </div>

                            <div class="blogbutton">
                                <button class="nav-item"><a href="" class="nav-link">Blog</a></button>
                            </div>

                        </ul>
                        
                    </div>
                </div>
        </nav>

        
    <!-- End Nav Bar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4"><br><br></h1>
        </div>
      </div>

    <!-- End Jumbotron -->

    <!-- Main Content -->
    <div style="height: 1px; padding: 0px;">
	</div>
    <div class="container">
    <!-- Products Section -->
    <section class="products-section mb-5"> 
        <h2 class="text-center mb-4">OUR PRODUCTS</h2>
        <div class="row">
            <!-- Product Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <h6 class="text-primary">₱100</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="number" class="form-control w-20" min="1" value="1" style="width: 70px;">
                            <button class="btn btn-success w-75 ms-2" style="width: calc(100% - 90px);"><i class="fas fa-shopping-cart ms-1"> Add to Cart</i></button>
                        </div>  
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <h6 class="text-primary">₱200</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="number" class="form-control w-20" min="1" value="1" style="width: 70px;">
                            <button class="btn btn-success w-75 ms-2" style="width: calc(100% - 90px);"><i class="fas fa-shopping-cart ms-1"> Add to Cart</i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <h6 class="text-primary">₱300</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="number" class="form-control w-20" min="1" value="1" style="width: 70px;">
                            <button class="btn btn-success w-75 ms-2" style="width: calc(100% - 90px);"><i class="fas fa-shopping-cart ms-1"> Add to Cart</i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 4">
                    <div class="card-body">
                        <h5 class="card-title">Product 4</h5>
                        <h6 class="text-primary">₱400</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="number" class="form-control w-20" min="1" value="1" style="width: 70px;">
                            <button class="btn btn-success w-75 ms-2" style="width: calc(100% - 90px);"><i class="fas fa-shopping-cart ms-1"> Add to Cart</i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 5">
                    <div class="card-body">
                        <h5 class="card-title">Product 5</h5>
                        <h6 class="text-primary">₱500</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="number" class="form-control w-20" min="1" value="1" style="width: 70px;">
                            <button class="btn btn-success w-75 ms-2" style="width: calc(100% - 90px);"><i class="fas fa-shopping-cart ms-1"> Add to Cart</i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 6">
                    <div class="card-body">
                        <h5 class="card-title">Product 6</h5>
                        <h6 class="text-primary">₱600</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="number" class="form-control w-20" min="1" value="1" style="width: 70px;">
                            <button class="btn btn-success w-75 ms-2" style="width: calc(100% - 90px);"><i class="fas fa-shopping-cart ms-1"> Add to Cart</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <!-- End Products Section -->

    <!-- End Main Content -->

    <!-- Footer -->
  
    <footer class="text-center py-4 w-100" style="margin: 0; padding: 0; position: relative; left: 0; right: 0;">
        <!-- <div class="container-fluid">
            <div class="my-5">
                <a href="index.php"><img src="img/C H U N K I S H.png" alt="Logo" class="mb-3"></a>
                <div class="sub-box">
                <form action="">
                    <input type="text" name="submit" id="srch" placeholder="Submit">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                </div>
                <p class="lead">Chunkish is a mini side business of a Chiang Kai Shek College Student. Chunkish sells a variety of handmade crochet items such as mini crochet dolls, keychains, crochet animals, and crochet flowers.</p>
            </div>
            <p>&copy; 2024 - Chunkish. All rights reserved.</p>
            <div class="my-3">
                <h6>Follow Us</h6>
                <a href="#" class="mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="my-3">
                <h6>Payment Methods</h6>
                <img src="img/gcash.png" alt="Visa" class="mx-2">
                <img src="img/maya.png" alt="MasterCard" class="mx-2">
                <img src="img/paypal.png" alt="PayPal" class="mx-2">
            </div>
        </div> -->
        <!-- Grid Layout -->
        <!-- Grid Layout -->
        <!-- Grid Layout -->
<!-- Grid Layout -->
        <div class="container">
            <div class="row">
                <!-- First Row -->
                <div class="col-md-3">
                    <!-- First Component -->
                    <div class="p-3"><a href="index.php"><img src="img/C H U N K I S H.png" alt="logo"></a></div>
                </div>
                <div class="col-md-9">
                    <!-- Second Component -->
                    <div class="search-box">
                        <form action="" class="sub">
                            <input type="text" name="search" id="search" placeholder="Submit">
                        </form>
                        <button class="sub-button" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <!-- Second Row -->
                <div class="col-md-3">
                    <!-- First Component in Second Row -->
                    <div class="p-3 border">Component 3</div>
                </div>
                <div class="col-md-3">
                    <!-- Second Component in Second Row -->
                    <div class="p-3 border">Component 4</div>
                </div>
                <div class="col-md-3">
                    <!-- Third Component in Second Row -->
                    <div class="p-3 border">Component 5</div>
                </div>
                <div class="col-md-3">
                    <!-- Fourth Component in Second Row -->
                    <div class="p-3 border">Component 6</div>
                </div>
            </div>
        </div>




    </footer>
    <!-- End Footer -->


    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
     
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
		window.addEventListener('scroll', function() {
			const midBar = document.getElementById('midBar');
			if (window.scrollY > 50) { 
				midBar.classList.add('shrink');
			} else {
				midBar.classList.remove('shrink');
			}
		});
	</script>
    <script>
        const searchInput = document.querySelector('.search-box input');
        const searchButton = document.querySelector('.search-box button');
      
        window.addEventListener('scroll', function() {
          if (window.scrollY > 50) {
            searchInput.classList.add('shrink');
            searchButton.classList.add('shrink');
          } else {
            searchInput.classList.remove('shrink');
            searchButton.classList.remove('shrink');
          }
        });
      </script>

    <script>
        let cart = [];
        let total = 0;
        let currentLanguage = 'en';
        let currentCurrency = 'PHP';
        
        const conversionRates = {
            USD: 0.018, 
            PHP: 1
        };
        
        const translations = {
            en: {
                contactUs: "Contact Us",
                cart: "Cart",
                addToCart: "Add to Cart",
                checkout: "Checkout",
                total: "Total",
                product: "Product",
                emptyCart: "Your cart is empty!",
                proceeding: "Proceeding to checkout..."
            },
            fil: {
                contactUs: "Makipag-ugnayan",
                cart: "Kariton",
                addToCart: "Idagdag sa Kariton",
                checkout: "Bayaran",
                total: "Kabuuan",
                product: "Produkto",
                emptyCart: "Walang laman ang iyong kariton!",
                proceeding: "Nagpapatuloy sa pagbabayad..."
            }
        };
        
        function formatPrice(price, currency) {
            const convertedPrice = currency === 'USD' ? price * conversionRates[currency] : price;
            return currency === 'USD' 
                ? `$${convertedPrice.toFixed(2)}`
                : `₱${price.toFixed(2)}`;
        }
        
        function updateProductPrices() {
            document.querySelectorAll('.text-primary').forEach(priceElement => {
                const basePrice = parseFloat(priceElement.dataset.basePrice || priceElement.textContent.replace(/[₱$]/, ''));
                if (!priceElement.dataset.basePrice) {
                    priceElement.dataset.basePrice = basePrice;
                }
                priceElement.textContent = formatPrice(basePrice, currentCurrency);
            });
        }
        
        function toggleCart(event) {
            event.preventDefault();
            const cartItems = document.getElementById('cartItems');
            cartItems.style.display = cartItems.style.display === 'none' ? 'block' : 'none';
        }
        
        function addToCart(productId, name, price, quantity) {
            const existingItem = cart.find(item => item.id === productId);
            const basePrice = price;
            
            if (existingItem) {
                existingItem.quantity += quantity;
            } else {
                cart.push({
                    id: productId,
                    name: name,
                    price: basePrice,
                    quantity: quantity
                });
            }
            
            updateCart();
        }
        
        function updateCart() {
            const cartList = document.getElementById('cartList');
            const cartCount = document.getElementById('cartCount');
            const cartTotal = document.getElementById('cartTotal');
            
            cartList.innerHTML = '';
            total = 0;
            let count = 0;
            
            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                total += itemTotal;
                count += item.quantity;
                
                cartList.innerHTML += `
                    <div class="cart-item d-flex justify-content-between align-items-center mb-2">
                        <div>
                            ${item.name} x${item.quantity} (${formatPrice(item.price, currentCurrency)} each)
                            <button class="btn btn-sm btn-danger ms-2" onclick="removeFromCart('${item.id}')">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                        <span>${formatPrice(itemTotal, currentCurrency)}</span>
                    </div>
                `;
            });
            
            cartCount.textContent = count;
            cartTotal.textContent = formatPrice(total, currentCurrency);
            
            if (cart.length === 0) {
                cartList.innerHTML = `<p class="text-muted">${translations[currentLanguage].emptyCart}</p>`;
            }
        }
        
        function removeFromCart(productId) {
            cart = cart.filter(item => item.id !== productId);
            updateCart();
        }
        
        function checkout() {
            if (cart.length === 0) {
                alert(translations[currentLanguage].emptyCart);
                return;
            }
            alert(`${translations[currentLanguage].total}: ${formatPrice(total, currentCurrency)}\n${translations[currentLanguage].proceeding}`);
        }
        
        function updateLanguage() {
            document.querySelector('.btn-outline-light').textContent = translations[currentLanguage].contactUs;
            document.querySelector('.cart-link .text').textContent = translations[currentLanguage].cart;
            
            document.querySelectorAll('.btn-success').forEach(button => {
                button.innerHTML = `<i class="fas fa-shopping-cart ms-1"> ${translations[currentLanguage].addToCart}</i>`;
            });
            
            if (document.querySelector('#cartItems')) {
                document.querySelector('#cartItems h6').textContent = translations[currentLanguage].cart;
                document.querySelector('#cartItems .btn-success').textContent = translations[currentLanguage].checkout;
            }
            
            updateCart();
        }
        
        document.addEventListener('DOMContentLoaded', function() {
            const languageSelect = document.querySelector('select[aria-label="Language"]');
            languageSelect.addEventListener('change', function() {
                currentLanguage = this.value;
                updateLanguage();
            });
            
            const currencySelect = document.querySelector('select[aria-label="Currency"]');
            currencySelect.addEventListener('change', function() {
                currentCurrency = this.value;
                updateCart();
                updateProductPrices();
            });
            
            const addToCartButtons = document.querySelectorAll('.btn-success');
            addToCartButtons.forEach((button, index) => {
                button.addEventListener('click', function() {
                    const card = this.closest('.card');
                    const productId = `product-${index + 1}`;
                    const name = card.querySelector('.card-title').textContent;
                    const price = parseFloat(card.querySelector('.text-primary').textContent.replace(/[₱$]/, ''));
                    const quantity = parseInt(card.querySelector('input[type="number"]').value) || 1;
                    
                    addToCart(productId, name, price, quantity);
                });
            });
            
            updateProductPrices();
        });
        
        document.addEventListener('click', function(event) {
            const cart = document.getElementById('cartItems');
            const cartLink = document.querySelector('.cart-link');
            
            if (!cart.contains(event.target) && !cartLink.contains(event.target)) {
                cart.style.display = 'none';
            }
        });
    </script>
    

</body>
</html>