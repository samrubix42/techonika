<div>
    <div class="container-xl">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h3 class="card-title mb-0">Blogs</h3>

                <div class="ms-auto d-flex gap-3 align-items-center">
                    <div class="input-icon" style="min-width:320px;">
                        <span class="input-icon-addon">
                            <i class="ti ti-search"></i>
                        </span>
                        <input wire:model.debounce.500ms="search" class="form-control" placeholder="Search posts...">
                    </div>

                    <select wire:model.live="perPage" class="form-select me-2" style="width:90px;">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>

                    <a href="{{ route('admin.add-blog') }}" class="btn btn-primary px-3">Add New</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap table-hover align-middle">
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
                            <td class="text-muted">{{ $post->id }}</td>
                            <td class="text-start fw-medium">{{ $post->title }}</td>
                            <td class="text-center">
                                @if(optional($post->category)->name)
                                    <span class="badge bg-azure-lt text-azure">{{ optional($post->category)->name }}</span>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td class="text-center">
                                @if(optional($post->author)->name)
                                    <span class="badge bg-gray-lt text-dark">{{ optional($post->author)->name }}</span>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td class="text-center">
                                @if($post->status)
                                    <span class="badge bg-success-lt text-success">Published</span>
                                @else
                                    <span class="badge bg-muted-lt text-muted">Draft</span>
                                @endif
                            </td>
                            <td class="text-center"><small class="text-muted">{{ $post->created_at->format('Y-m-d') }}</small></td>
                            <td class="text-end">
                                <div class="btn-list d-inline-flex">
                                    <button wire:click="edit({{ $post->id }})" class="btn btn-outline-primary px-3 py-1">
                                        <i class="ti ti-edit me-1"></i> Edit
                                    </button>
                                    <button wire:click="showDelete({{ $post->id }})" class="btn btn-outline-danger px-3 py-1 ms-2">
                                        <i class="ti ti-trash me-1"></i> Delete
                                    </button>
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
    <!-- Delete confirmation modal -->
    @if($confirmingDelete)
        <div class="modal modal-blur fade show d-block" tabindex="-1">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-title">Delete Post</div>
                        <p>Are you sure you want to delete <strong>{{ $deleteTitle }}</strong>?</p>
                    </div>
                    <div class="modal-footer">
                        <button wire:click="cancelDelete" class="btn btn-secondary">Cancel</button>
                        <button wire:click="deleteConfirmed" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    @endif
</div>
