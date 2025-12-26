<div>
    <div class="container-xl">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h3 class="card-title">Blogs</h3>
                <div class="ms-auto d-flex gap-2">
                    <input wire:model.debounce.500ms="search" class="form-control" placeholder="Search posts..." style="min-width:240px;">
                    <select wire:model="perPage" class="form-select">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                    <a href="{{ route('admin.add-blog') }}" class="btn btn-primary">Add New</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ optional($post->category)->name }}</td>
                            <td>{{ optional($post->author)->name }}</td>
                            <td>
                                @if($post->status)
                                    <span class="badge bg-success">Published</span>
                                @else
                                    <span class="badge bg-muted">Draft</span>
                                @endif
                            </td>
                            <td>{{ $post->created_at->format('Y-m-d') }}</td>
                            <td class="text-end">
                                <div class="btn-list">
                                    <button wire:click="edit({{ $post->id }})" class="btn btn-sm btn-outline-primary">Edit</button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">No posts found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
                <div>
                    Showing {{ $posts->firstItem() ?? 0 }} to {{ $posts->lastItem() ?? 0 }} of {{ $posts->total() }}
                </div>
                <div>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
