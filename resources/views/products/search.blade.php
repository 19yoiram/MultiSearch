<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Search Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Search Results</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($results as $product)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        {{-- <img src="{{ asset('storage/' . $product->main_image) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $product->title }}"> --}}
                        <img src="{{ $product->main_image }}" class="img-fluid" alt="{{ $product->title }}">

                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text text-muted">₹{{ number_format($product->price, 2) }}</p>
                            <p class="card-text"><strong>Brand:</strong> {{ $product->brand->name }}</p>
                            <p class="card-text"><strong>Category:</strong> {{ $product->category->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $results->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>

    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
