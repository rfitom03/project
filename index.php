<?php
$url = file_get_contents('https://suitmedia-backend.suitdev.com/api/ideas');
$data = json_decode($url, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percobaan</title>
    <!-- Library untuk ikon (misal: Font Awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
    <nav>
        <div class="logo">
            <img src="suitmedia.png" alt="logo" />
        </div>
        <ul>
            <li>
                <a href="#work">Work</a>
            </li>
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#service">Services</a>
            </li>
            <li>
                <a href="#ideas">Ideas</a>
            </li>
            <li>
                <a href="#careers">Careers</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </nav>
    <section class="kata">
      <div class="text-above">
        <h2>Ideas</h2>
      </div>
      <div class="text-below">
        <p>Where All our great things begin</p>
      </div>
    </section>
    <!--catalog-->
    <section class="page" id="pageList">
      <!-- Product items will be dynamically added here -->
      <div class="left-content">
        <label for="showingInfo">Showing 1 - 10 of 100</label>
      </div>
      <div class="right-content">
        <div class="sort-by">
          <label for="sort">Sort by:</label>
          <select id="sort" onchange="sortProducts()">
            <option value="priceLowToHigh">Price: terbaru</option>
            <option value="priceHighToLow">Price: terlama</option>
          </select>
        </div>
        <div class="show-per-page">
          <label for="perPage">Show per page:</label>
          <select id="perPage" onchange="showPerPage()">
            <option value="4">10</option>
            <option value="6">20</option>
            <option value="8">50</option>
          </select>
        </div>
      </div>
    </section>
      
        <script src="scripts.js"></script>
      </header>
      <main>
        <section class="products">
          <div class="product">
            <img src="image 1.webp" alt="informasi">
            <h2>Informasi</h2>
            <p>kenali tingkat kategori informasi</p>
          </div>
    
          <div class="product">
            <img src="image 2.webp" alt="overload">
            <h2>overload</h2>
            <p>kenali tingkat kategori overload</p>
          </div>

          <div class="product">
            <img src="image 2.webp" alt="overload">
            <h2>overload</h2>
            <p>kenali tingkat kategori overload</p>
          </div>

          <div class="product">
            <img src="image 2.webp" alt="overload">
            <h2>overload</h2>
            <p>kenali tingkat kategori overload</p>
          </div>
          <div class="product">
            <img src="image 2.webp" alt="overload">
            <h2>overload</h2>
            <p>kenali tingkat kategori overload</p>
          </div>

          <div class="product">
            <img src="image 2.webp" alt="overload">
            <h2>overload</h2>
            <p>kenali tingkat kategori overload</p>
          </div>

          <div class="product">
            <img src="image 2.webp" alt="overload">
            <h2>overload</h2>
            <p>kenali tingkat kategori overload</p>
          </div>

          <div class="product">
            <img src="image 2.webp" alt="overload">
            <h2>overload</h2>
            <p>kenali tingkat kategori overload</p>
          </div>


        </section>
        <div class="pagination">
    <button onclick="prevPage()">
      <i class="fas fa-chevron-left"></i>
      <span>Prev</span>
    </button>
    <span class="page-number"><span id="currentPage">1 </span> 2 <span id="maxPage">10</span></span>
    <button onclick="nextPage()">
      <span>Next</span>
      <i class="fas fa-chevron-right"></i>
    </button>
  </div>
        
</body>
</html>