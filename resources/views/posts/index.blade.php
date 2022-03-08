<x-app-layout>
    <div class="container" style="max-width: 60rem;">
        <div class="row m-auto my-3">
            <div class="col px-0">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">
                    {{ __('Create') }}
                </a>
            </div>
            <div class="col px-0">
                <form>
                    <div class="input-group">
                        <input type="search" class="form-control" name="search" value="{{ old('search') }}"
                            placeholder="Search">
                        <button class="btn btn-outline-primary" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card m-auto">
            <div class="card-header">
                <h1 class="text-lg">{{ __('Post List') }}</h1>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ __('ID') }}</th>
                            <th>{{ __('Username') }}</th>
                            <th>{{ __('Title') }}</th>
                            <th>{{ __('Description') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td class="d-flex">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm mr-2">
                                    {{ __('Edit') }}
                                </a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure want to delete?')">
                                        {{ __('Delete') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">{{ __('There is no data.') }}</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <!-- Pagination -->
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>