const productList = [
    { name: "Product 1", description: "Description of Product 1", price: 19.99 },
    { name: "Product 2", description: "Description of Product 2", price: 24.99 },
    // Add more products here
  ];
  
  let itemsPerPage = 10;
  let currentPage = 1;
  
  function displayProducts(products) {
    const productContainer = document.getElementById("productList");
    productContainer.innerHTML = '';
  
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
  
    const paginatedProducts = products.slice(startIndex, endIndex);
  
    paginatedProducts.forEach(product => {
      const productDiv = document.createElement('div');
      productDiv.classList.add('product');
      productDiv.innerHTML = `
        <h2>${product.name}</h2>
        <p>${product.description}</p>
        <p class="price">$${product.price.toFixed(2)}</p>
      `;
      productContainer.appendChild(productDiv);
    });

    // Menampilkan informasi jumlah item yang sedang ditampilkan
  const totalItems = products.length;
  const firstItem = startIndex + 1;
  const lastItem = Math.min(startIndex + itemsPerPage, totalItems);
  const showingInfo = document.getElementById("showingInfo");
  showingInfo.textContent = `Showing ${firstItem}-${lastItem} of ${totalItems}`;

  }
  
  function sortProducts() {
    const sortType = document.getElementById("sort").value;
    if (sortType === "priceLowToHigh") {
      productList.sort((a, b) => a.price - b.price);
    } else if (sortType === "priceHighToLow") {
      productList.sort((a, b) => b.price - a.price);
    }
    displayProducts(productList);
  }
  
  function showPerPage() {
    itemsPerPage = parseInt(document.getElementById("perPage").value);
    currentPage = 1;
    displayProducts(productList);
  }
  
  document.addEventListener("DOMContentLoaded", function () {
    displayProducts(productList);
  });

  // Fungsi untuk menampilkan nomor halaman saat ini
function updatePaginationUI() {
    const currentPageElement = document.getElementById('currentPage');
    const maxPageElement = document.getElementById('maxPage');
  
    currentPageElement.textContent = currentPage;
    // Hitung jumlah halaman maksimum (total produk dibagi dengan produk per halaman)
    const totalProducts = 100; // Ubah sesuai kebutuhan
    const maxPage = Math.ceil(totalProducts / itemsPerPage);
    maxPageElement.textContent = maxPage;
  }
  
  // Fungsi untuk menampilkan produk pada halaman saat ini
  function displayCurrentPage(products) {
    // ... Code untuk menampilkan produk pada halaman saat ini tetap sama ...
    // Setelah menampilkan produk, panggil fungsi updatePaginationUI untuk memperbarui nomor halaman
    updatePaginationUI();
  }
  
  // Fungsi untuk navigasi ke halaman berikutnya
  function nextPage() {
    // ... Code untuk navigasi ke halaman berikutnya tetap sama ...
    // Setelah mengubah nomor halaman, panggil fungsi updatePaginationUI
    updatePaginationUI();
  }
  
  // Fungsi untuk navigasi ke halaman sebelumnya
  function prevPage() {
    // ... Code untuk navigasi ke halaman sebelumnya tetap sama ...
    // Setelah mengubah nomor halaman, panggil fungsi updatePaginationUI
    updatePaginationUI();
  }

  
  