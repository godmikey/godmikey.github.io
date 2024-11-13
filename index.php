<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produktów</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="header-content">
                <h1><i class="fas fa-shopping-bag"></i></h1>
                <div class="logo">
                    <img src="CNFANSBEST.png" alt="Logo" class="header-logo">
                </div>
                <div class="search-container">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" id="searchBar" placeholder="Wyszukaj produkt...">
                </div>
            </div>
        </header>

        <main class="main-content">
            <div id="loading" class="loading">
                <i class="fas fa-spinner fa-spin"></i> Ładowanie produktów...
            </div>
            <div id="products" class="products-grid"></div>
        </main>

        <div id="productModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 id="modalTitle"></h2>
                    <span class="close"><i class="fas fa-times"></i></span>
                </div>
                <div class="modal-body">
                    <div class="main-image-container">
                        <img id="modalImage" src="" alt="">
                    </div>
                    <div class="price-info">
                        <div class="price-box">
                            <i class="fas fa-tag"></i>
                            <span class="label">Cena produktu</span>
                            <span id="modalPrice" class="value"></span>
                        </div>
                        <div class="price-box">
                            <i class="fas fa-shipping-fast"></i>
                            <span class="label">Koszt wysyłki</span>
                            <span id="modalShipping" class="value"></span>
                        </div>
                    </div>
                    <div class="buy-button-container">
                        <a href="#" id="buyButton" class="buy-button" target="_blank">
                            <i class="fas fa-shopping-cart"></i>
                            Kup teraz
                        </a>
                    </div>
                    <div class="qc-photos-section">
                        <h3><i class="fas fa-images"></i> Zdjęcia QC</h3>
                        <div id="qcPhotos" class="qc-photos-grid"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="qcImageViewer" class="qc-image-viewer">
            <div class="viewer-content">
                <button class="close-viewer">
                    <div class="x-icon">✕</div>
                </button>
                <img id="qcViewerImage" src="" alt="QC Photo Full Size">
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html> 
