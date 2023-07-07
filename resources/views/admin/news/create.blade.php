@extends('admin.layouts.app')

@section('content')
    <div class="fix-header fix-sidebar card-no-border">
        <div id="main-wrapper">
            @include('admin/includes/header')
            @include('admin/includes/sidebar')

            <div class="page-wrapper">
                <div class="container-fluid">

                    <button class="btn btn-info mb-5" id="backButton">Back</button>
                    <script>
                        // JavaScript
                        const backButton = document.getElementById('backButton');

                        backButton.addEventListener('click', goBack);

                        function goBack() {
                        history.back();
                        }
                    </script>

                    <div class="mx-5">
                        <h2>{{ __('Add News & Events') }}</h2>
                        <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                @error('title')
                                    <div class="bg-danger text-white p-2">{{ $message }}</div>
                                @enderror
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                @error('category')
                                    <div class="bg-danger text-white p-2">{{ $message }}</div>
                                @enderror
                                <label for="category">Category:</label>
                                
                                <select class="form-select" name="category" aria-label="Select option">
                                    @foreach ($news_cats as $news_cat)
                                        <option value="{{ $news_cat->id }}">{{ $news_cat->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                @error('photo')
                                    <div class="bg-danger text-white p-2">{{ $message }}</div>
                                @enderror
                                <label for="photo">Photo:</label>
                                <input type="file" class="form-control-file" name="photo" id="photo" accept=".jpg,.jpeg,.png,.pdf">
                            </div>

                            <button type="submit" class="btn btn-info">Add</button>
                        </form>
                    </div>
                

                </div>


                @include('admin/includes/footer')

            </div>
        </div>

    </div>
@endsection
