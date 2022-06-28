<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container page">
    <a type="button" class="btn btn-primary mb-3" href="{{ route('products.index') }}">Back to products</a>
    <form
        @if(isset($product))
            action="{{ route('products.update', $product) }}"
        @else
            action="{{ route('products.store') }}"
        @endif
        method="POST">
        @csrf  {{--чтобы не было 419 ошибки--}}
       @isset($product) {{--При edit метод пост нам не подходит, поэтому через токен меняем метод на PUT--}}
            @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
                <input name="name"
                       value="{{ isset($product) ? $product->name : null }}"
                       type="text" class="form-control" placeholder="Название товара" aria-label="Название товара">
            </div>
            <div class="col">
                <input name="description"
                       value="{{ isset($product) ? $product->description : null }}"
                       type="text" class="form-control" placeholder="Описание" aria-label="Описание">
            </div>
            <div class="col">
                <input name="photo"
                       value="{{ isset($product) ? $product->photo : null }}"
                       type="url" class="form-control" placeholder="Ссылка на фото" aria-label="Ссылка на фото">
            </div>
            <div class="col">
                <input name="price"
                       value="{{ isset($product) ? $product->price : null }}"
                       type="number" class="form-control" placeholder="Цена" aria-label="Цена">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success">Создать</button>
            </div>
        </div>
    </form>
</div>
@yield('scripts')
</body>
</html>




