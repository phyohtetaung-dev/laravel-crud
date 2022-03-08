<x-app-layout>
    <div class="container" style="max-width: 35rem;">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="card mt-5 m-auto" style="max-width: 50rem;">
                <div class="card-header">
                    <h1 class="text-lg">{{ __('Post Create') }}</h1>
                </div>
                <div class="card-body">
                    <div class="form-floating mb-3">
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                            id="title" placeholder="Title" value="{{ old('title') }}">
                        <label for="title">{{ __('Title') }}</label>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                            id="description" placeholder="Description"
                            style="height: 150px">{{ old('description') }}</textarea>
                        <label for="description">{{ __('Description') }}</label>
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                        <a href="{{ route('posts.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>