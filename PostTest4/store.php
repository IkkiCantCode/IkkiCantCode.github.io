<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> Store </title> 
        <link rel="stylesheet" href="store.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico"> 
    </head>
    <body class="light-mode">
        <nav class="navbar">
            <div class="logo">
                <a href="index.php"><img src="pokedolllogo.png" alt="#"></a>
            </div>
            <div class="aboutme">
                <a class="main-page" href="store.php"> STORE </a>
            </div>
            <div class="nav-items">
                <a class="link" href="index.php"> Home </a>
                <a class="link" href="aboutme.php"> About Me </a>
                <a class="link" href="limited.php"> Limited Items</a>
                <a class="link-active" href="store.php"> Store </a>
                <a class="link" onclick="showAlert()" href="#" id="cart-link"> Shopping Cart </a>
                <a class="link" onclick="showAlert()" href="#" id="pokedex-link"> Pokedex </a>
                <button class="link-active">
                    <a href="profile.php">
                        Profile
                    </a>
                </button>
                <img id="toggle-mode" src="sun.png" alt="">
            </div>
        </nav>
        <section>
            <div class="under-cons">
                <div class="center-content">
                    <img id="litwick-image" src="litwick.png" alt="litwick">
                    <audio id="litwick-cry" src="litwickcry.mp3"></audio>
                    <div class="card">
                        <h2>Store Is Still Unfinished</h2>
                        <p>Will Mostly Be Fixed On the Next PostTest!</p>
                        <p>Sorry For The Inconvenience 🙏 </p>
                    </div>
                </div>
                <div class="click-litwick" id="clickwick">
            </div>
        </section>
        <section>
            <div class="product-form">
                <h2>Add a Product</h2>
                <form id="add-product-form">
                    <label for="product-name">Product Name:</label>
                    <input type="text" id="product-name" required>
                    <label for="product-price">Price (in dollars):</label>
                    <input type="number" id="product-price" required>
                    <label for="product-image">Product Image:</label>
                    <input type="file" id="product-image" accept="image/*" required>
                    <img id="image-preview" src="#" alt="Preview" style="display: none;">
                    <label for="product-description">Product Description:</label>
                    <textarea id="product-description" required></textarea>
                    <button type="button" onclick="addProduct()">Add Product</button>
                </form>
            </div>
            <div class="product-card" id="product-preview">
            </div>
        </section>
        <footer>
            <p> Please Nintendo Don't Sue Me, This Is Just For a College Project </p>
            <p> Contact Person : mrizkynoob@gmail.com </p>
        </footer>
        <script src="Script.js"></script>
    </body>
</html>