<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TRANG CHU </title>
    {{-- lien ket css bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    {{-- lien ket js bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <header class="py-2 border-bottom">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                <div class="d-flex align-items-center gap-3">
                    {{-- logo --}}
                    <a class="navbar-brand p-0" href="#">
                        <img src="{{ asset('assets/image/logo.jpg') }}" alt="Logo">
                    </a>
                </div>
                {{-- timkiem --}}
                <form class="flex-grow-1" role="search">
                    <div class="input-group rounded-pill bg-light px-3 py-2">
                        <span class="input-group-text bg-transparent border-0 px-0">
                            <i class="bi bi-search text-secondary"></i>
                        </span>
                        <input type="search" class="form-control border-0 bg-transparent"
                            placeholder="Bạn muốn mua gì..." aria-label="Search">
                    </div>
                </form>

                <div class="d-flex align-items-center gap-3 flex-wrap">

                    <a href="#" class="text-success fs-4"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="text-success fs-4"><i class="bi bi-person-circle"></i></a>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container-fluid justify-content-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="mainNav">
                <ul class="navbar-nav gap-lg-4 fw-semibold text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle text-success" href="#" data-bs-toggle="dropdown">Menu</a>
                        <div class="dropdown-menu mega-menu p-4 border-0 shadow">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="fw-bold text-success">THỨC UỐNG</h6>
                                    <a class="dropdown-item" href="#">Bst tết 2026</a>
                                    <a class="dropdown-item" href="#">Best seller</a>
                                    <a class="dropdown-item" href="#">Trà trái cây</a>
                                    <a class="dropdown-item" href="#">Trà sữa</a>
                                    <a class="dropdown-item" href="#">Kem silky</a>
                                    <a class="dropdown-item" href="#">Cà phê</a>
                                    <a class="dropdown-item" href="#">Đá xay</a>
                                    <a class="dropdown-item" href="#">Trà nguyên bản</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="fw-bold text-success">BÁNH</h6>
                                    <a class="dropdown-item" href="#">Bánh lạnh</a>
                                    <a class="dropdown-item" href="#">Bánh cookies - croissant</a>
                                    <a class="dropdown-item" href="#">Bánh mì</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="fw-bold text-success">BST TẾT 2026</h6>
                                    <h6 class="fw-bold text-success mb-2">TRÀ</h6>
                                    <a class="dropdown-item" href="#">Trà hộp giấy</a>
                                    <a class="dropdown-item" href="#">Trà gói cao cấp</a>
                                    <a class="dropdown-item" href="#">Trà túi lọc</a>
                                    <a class="dropdown-item" href="#">Trà túi tam giác</a>
                                    <a class="dropdown-item" href="#">Trà lài</a>
                                    <a class="dropdown-item" href="#">Trà xanh</a>
                                    <a class="dropdown-item" href="#">Trà sen</a>
                                    <a class="dropdown-item" href="#">Trà đen</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Sản phẩm đóng gói</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Về chúng tôi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Khuyến mãi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Hội viên</a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>