<div class="container-xl mt-4">

    <!-- HEADER -->
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-bottom py-4">
            <div class="d-flex justify-content-between w-100 align-items-center">
                <div>
                    <h3 class="mb-1 fw-bold">Portfolio Management</h3>
                    <p class="text-muted mb-0 small">Manage and organize your portfolio projects</p>
                </div>
                <button class="btn btn-primary px-4" wire:click="openModal">
                    Add Portfolio
                </button>
            </div>
        </div>

        <div class="card-body">

            <!-- SEARCH & FILTERS -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <input type="text" class="form-control form-control"
                           placeholder="Search portfolios..."
                           wire:model.live.debounce.500ms="search">
                </div>
                <div class="col-md-6 text-end">
                    <p class="text-muted mb-0 mt-3 small">
                        {{ $portfolios->total() }} total portfolios
                    </p>
                </div>
            </div>

            <!-- TABLE -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="border-bottom">
                            <th class="text-muted fw-normal small text-uppercase ps-0">Image</th>
                            <th class="text-muted fw-normal small text-uppercase">Title</th>
                            <th class="text-muted fw-normal small text-uppercase">Category</th>
                            <th class="text-muted fw-normal small text-uppercase">Description</th>
                            <th class="text-muted fw-normal small text-uppercase">Tags</th>
                            <th class="text-muted fw-normal small text-uppercase text-end pe-0">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($portfolios as $portfolio)
                            <tr class="align-middle">
                                <td class="ps-0" style="width: 80px;">
                                    @if($portfolio->image)
                                        <img src="{{ asset('storage/'.$portfolio->image) }}"
                                             class="rounded" style="width: 60px; height: 60px; object-fit: cover;">
                                    @else
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center text-muted" 
                                             style="width: 60px; height: 60px;">
                                            <small>No Image</small>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <div class="fw-semibold">{{ $portfolio->title }}</div>
                                    @if($portfolio->project_url)
                                        <a href="{{ $portfolio->project_url }}" target="_blank" 
                                           class="text-decoration-none small text-primary">
                                            View Project →
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark border">
                                        {{ $categories->find($portfolio->category_id)?->name ?? 'Uncategorized' }}
                                    </span>
                                </td>
                                <td class="text-muted small" style="max-width: 300px;">
                                    {{ Str::limit($portfolio->description, 80) }}
                                </td>
                                <td>
                                    @if(is_array($portfolio->tags) && count($portfolio->tags) > 0)
                                        <div class="d-flex flex-wrap gap-1">
                                            @foreach(array_slice($portfolio->tags, 0, 3) as $tag)
                                                <span class="badge bg-light text-secondary border">{{ $tag }}</span>
                                            @endforeach
                                            @if(count($portfolio->tags) > 3)
                                                <span class="badge bg-light text-secondary border">+{{ count($portfolio->tags) - 3 }}</span>
                                            @endif
                                        </div>
                                    @else
                                        <span class="text-muted small">—</span>
                                    @endif
                                </td>
                                <td class="text-end pe-0">
                                    <button class="btn btn-sm btn-light border me-1" 
                                            wire:click="edit({{ $portfolio->id }})">
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-light border text-danger" 
                                            wire:click="confirmDelete({{ $portfolio->id }})">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-5">
                                    <div class="text-muted">
                                        <p class="mb-2">No portfolios found</p>
                                    
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{ $portfolios->links() }}
        </div>
    </div>

    <!-- ================= MODAL ================= -->
    @if($showModal)
    <div class="modal fade show d-block" tabindex="-1"
         style="background: rgba(0,0,0,0.5)">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">

                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold">
                        {{ $editId ? 'Edit Portfolio' : 'Add New Portfolio' }}
                    </h5>
                    <button class="btn-close" wire:click="closeModal"></button>
                </div>

                <form wire:submit.prevent="save">
                    <div class="modal-body px-4 py-4">
                        <div class="row g-4">

                            <div class="col-md-8">
                                <label class="form-label fw-semibold">Title</label>
                                <input type="text" class="form-control form-control"
                                       placeholder="Enter portfolio title"
                                       wire:model.defer="title" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Category</label>
                                <select class="form-select form-select"
                                        wire:model.defer="category_id" required>
                                    <option value="">Select</option>
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}">
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">Description</label>
                                <textarea class="form-control" rows="4"
                                          placeholder="Describe the project..."
                                          wire:model.defer="description"></textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Project URL</label>
                                <input type="url" class="form-control"
                                       placeholder="https://example.com"
                                       wire:model.defer="project_url">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Tags</label>
                                <input type="text" class="form-control"
                                       placeholder="React, Laravel, Design"
                                       wire:model.defer="tags">
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">Project Image</label>
                                <input type="file" class="form-control"
                                       wire:model="imageFile" accept="image/*">
                                @if ($imageFile || $image)
                                    <div class="mt-3 p-3 bg-light rounded text-center">
                                        @if ($imageFile)
                                            <img src="{{ $imageFile->temporaryUrl() }}"
                                                 class="img-fluid rounded shadow-sm"
                                                 style="max-height: 200px;">
                                        @elseif ($image)
                                            <img src="{{ asset('storage/'.$image) }}"
                                                 class="img-fluid rounded shadow-sm"
                                                 style="max-height: 200px;">
                                        @endif
                                    </div>
                                @endif
                                <div wire:loading wire:target="imageFile"
                                     class="text-primary mt-2 small">
                                    Uploading image...
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer border-0 pt-0">
                        <button type="button" class="btn btn-light px-4"
                                wire:click="closeModal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary px-4">
                            {{ $editId ? 'Update Portfolio' : 'Create Portfolio' }}
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @endif

    <!-- ================= DELETE MODAL ================= -->
    @if($showDeleteModal)
    <div class="modal fade show d-block" tabindex="-1"
         style="background: rgba(0,0,0,0.5)">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">

                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold">Delete Portfolio</h5>
                    <button class="btn-close"
                            wire:click="$set('showDeleteModal', false)"></button>
                </div>

                <div class="modal-body px-4">
                    <p class="text-muted mb-0">Are you sure you want to delete this portfolio? This action cannot be undone.</p>
                </div>

                <div class="modal-footer border-0">
                    <button class="btn btn-light px-4"
                            wire:click="$set('showDeleteModal', false)">
                        Cancel
                    </button>
                    <button class="btn btn-danger px-4" wire:click="delete">
                        Delete Portfolio
                    </button>
                </div>

            </div>
        </div>
    </div>
    @endif

</div>
