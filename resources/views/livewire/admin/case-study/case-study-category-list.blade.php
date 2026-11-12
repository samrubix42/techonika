<div>
    <div class="page-header mb-3">
        <h2 class="page-title">Case Study Categories</h2>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="d-flex gap-2 align-items-center">
                <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search..." class="form-control form-control-sm">
                <button class="btn btn-sm btn-primary text-nowrap" wire:click="showCreateModal">
                    <i class="ti ti-plus"></i> Add Category
                </button>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-vcenter text-nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Case Studies</th>
                            <th>Status</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                            <tr wire:key="cs-cat-{{ $category->id }}">
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->slug }}</td>
                                <td><span class="badge bg-azure-lt text-azure">{{ $category->case_studies_count }}</span></td>
                                <td>
                                    @if($category->is_active)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-info me-1" wire:click="showEditModal({{ $category->id }})">
                                        <i class="ti ti-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" wire:click="showDeleteModal({{ $category->id }})">
                                        <i class="ti ti-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">No categories found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3 d-flex justify-content-end">
                {{ $categories->links() }}
            </div>
        </div>
    </div>

    <!-- Create/Edit Modal -->
    <div class="modal fade @if($modalFormVisible) show d-block @endif" tabindex="-1" style="@if($modalFormVisible) background-color: rgba(0,0,0,.5); @endif">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $categoryId ? 'Edit' : 'Add' }} Category</h5>
                    <button type="button" class="btn-close" wire:click="closeModal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" wire:model.live.debounce.400ms="title" class="form-control @error('title') is-invalid @enderror">
                        @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Slug</label>
                        <input type="text" wire:model="slug" class="form-control @error('slug') is-invalid @enderror">
                        @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" wire:model="is_active" id="cs_cat_is_active">
                        <label class="form-check-label" for="cs_cat_is_active">Active</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal">Cancel</button>
                    <button type="button" class="btn btn-primary" wire:click="save" wire:loading.attr="disabled">{{ $categoryId ? 'Update' : 'Save' }}</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade @if($modalConfirmDeleteVisible) show d-block @endif" tabindex="-1" style="@if($modalConfirmDeleteVisible) background-color: rgba(0,0,0,.5); @endif">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Delete</h5>
                    <button type="button" class="btn-close" wire:click="closeModal"></button>
                </div>
                <div class="modal-body text-center">
                    <i class="ti ti-alert-triangle text-warning fs-1"></i>
                    <p class="mt-2">Are you sure you want to delete this category?<br>
                        <small class="text-muted">Case studies in it are kept but left without a category.</small></p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-outline-secondary" wire:click="closeModal">Cancel</button>
                    <button type="button" class="btn btn-danger" wire:click="delete">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
