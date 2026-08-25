<div class="container-xl py-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1">SMO Portfolio Management</h3>
            <p class="text-muted small mb-0">Manage Social Media Marketing portfolios and multi-image galleries</p>
        </div>
        <button class="btn btn-primary" wire:click="openModal">
            <i class="ti ti-plus me-1"></i> Add SMO Portfolio
        </button>
    </div>

    <!-- Search Bar -->
    <div class="card mb-3 border-0 shadow-sm">
        <div class="card-body p-2">
            <div class="input-icon">
                <span class="input-icon-addon">
                    <i class="ti ti-search"></i>
                </span>
                <input
                    wire:model.live.debounce.300ms="search"
                    type="text"
                    class="form-control"
                    placeholder="Search SMO portfolios by title or description..."
                >
            </div>
        </div>
    </div>

    <!-- TABLE CARD -->
    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table align-middle card-table table-vcenter text-nowrap">
                <thead class="bg-light">
                    <tr>
                        <th style="width: 160px;">Images</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($items as $item)
                        <tr>
                            <td>
                                <div class="d-flex flex-wrap gap-1" style="max-width: 160px;">
                                    @forelse($item->images ?? [] as $idx => $img)
                                        @if($idx < 3)
                                            <img src="{{ asset('storage/' . $img) }}"
                                                 alt="{{ $item->title }}"
                                                 class="rounded border"
                                                 style="width: 45px; height: 45px; object-fit: cover;">
                                        @endif
                                    @empty
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center text-muted"
                                             style="width: 45px; height: 45px;">
                                            <i class="ti ti-photo"></i>
                                        </div>
                                    @endforelse
                                    @if(count($item->images ?? []) > 3)
                                        <span class="badge bg-secondary-lt align-self-center">
                                            +{{ count($item->images) - 3 }}
                                        </span>
                                    @endif
                                </div>
                            </td>
                            <td class="fw-semibold text-wrap" style="max-width: 200px;">
                                {{ $item->title }}
                            </td>
                            <td class="text-muted text-wrap" style="max-width: 300px;">
                                {{ \Illuminate\Support\Str::limit($item->description, 80) }}
                            </td>
                            <td>
                                <label class="form-check form-switch mb-0">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        wire:click="toggleActive({{ $item->id }})"
                                        {{ $item->is_active ? 'checked' : '' }}>
                                    <span class="form-check-label text-muted small">
                                        {{ $item->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </label>
                            </td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-primary"
                                        wire:click="openModal({{ $item->id }})">
                                    <i class="ti ti-edit me-1"></i> Edit
                                </button>
                                <button class="btn btn-sm btn-outline-danger ms-1"
                                        wire:click="confirmDelete({{ $item->id }})">
                                    <i class="ti ti-trash me-1"></i> Delete
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">
                                No SMO portfolios found. Click "Add SMO Portfolio" to create one.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- CREATE / EDIT MODAL -->
    @if($showModal)
        <div class="modal fade show d-block" style="background: rgba(0,0,0,.6);" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">
                            {{ $editId ? 'Edit SMO Portfolio' : 'Create SMO Portfolio' }}
                        </h5>
                        <button type="button" class="btn-close" wire:click="closeModal"></button>
                    </div>

                    <form wire:submit.prevent="save">
                        <div class="modal-body row g-3">
                            <!-- TITLE -->
                            <div class="col-12">
                                <label class="form-label fw-semibold">Title <span class="text-danger">*</span></label>
                                <input type="text"
                                       class="form-control @error('title') is-invalid @enderror"
                                       wire:model="title"
                                       placeholder="e.g. Social Media Campaign for Brand X"
                                       required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- DESCRIPTION -->
                            <div class="col-12">
                                <label class="form-label fw-semibold">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                          wire:model="description"
                                          rows="3"
                                          placeholder="Enter details about this SMO portfolio project..."></textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- MULTIPLE IMAGES UPLOAD -->
                            <div class="col-12">
                                <label class="form-label fw-semibold">Upload Images (Multiple)</label>
                                <input type="file"
                                       class="form-control @error('newImages.*') is-invalid @enderror"
                                       wire:model="newImages"
                                       multiple
                                       accept="image/*">
                                <small class="text-muted d-block mt-1">Select one or multiple images (Max 4MB each: JPG, PNG, WEBP)</small>
                                
                                <div wire:loading wire:target="newImages" class="text-primary mt-2">
                                    <span class="spinner-border spinner-border-sm me-1" role="status"></span>
                                    Uploading selected images...
                                </div>

                                @error('newImages.*')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror

                                <!-- PREVIEW NEW IMAGES -->
                                @if(!empty($newImages))
                                    <div class="mt-3">
                                        <label class="form-label small text-muted font-weight-bold">New Images Preview</label>
                                        <div class="d-flex flex-wrap gap-2">
                                            @foreach($newImages as $index => $image)
                                                <div class="position-relative border rounded p-1 bg-light text-center">
                                                    <img src="{{ $image->temporaryUrl() }}"
                                                         class="rounded"
                                                         style="width: 90px; height: 90px; object-fit: cover;">
                                                    <button type="button"
                                                            class="btn btn-sm btn-danger position-absolute top-0 end-0 p-0 rounded-circle"
                                                            style="width: 22px; height: 22px; line-height: 1; transform: translate(30%, -30%);"
                                                            wire:click="removeNewImage({{ $index }})"
                                                            title="Remove image">
                                                        ×
                                                    </button>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                <!-- EXISTING IMAGES PREVIEW -->
                                @if(!empty($existingImages))
                                    <div class="mt-3">
                                        <label class="form-label small text-muted font-weight-bold">Existing Images</label>
                                        <div class="d-flex flex-wrap gap-2">
                                            @foreach($existingImages as $index => $imagePath)
                                                <div class="position-relative border rounded p-1 bg-light text-center">
                                                    <img src="{{ asset('storage/' . $imagePath) }}"
                                                         class="rounded"
                                                         style="width: 90px; height: 90px; object-fit: cover;">
                                                    <button type="button"
                                                            class="btn btn-sm btn-danger position-absolute top-0 end-0 p-0 rounded-circle"
                                                            style="width: 22px; height: 22px; line-height: 1; transform: translate(30%, -30%);"
                                                            wire:click="removeExistingImage({{ $index }})"
                                                            title="Delete image">
                                                        ×
                                                    </button>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <!-- ACTIVE STATUS -->
                            <div class="col-12">
                                <label class="form-check form-switch">
                                    <input class="form-check-input"
                                           type="checkbox"
                                           wire:model="is_active">
                                    <span class="form-check-label fw-semibold">
                                        Active Status
                                    </span>
                                </label>
                                <small class="text-muted d-block">Enable to show this portfolio on the SMO Portfolio page</small>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" wire:click="closeModal">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="ti ti-device-floppy me-1"></i> Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

    <!-- DELETE MODAL -->
    @if($showDeleteModal)
        <div class="modal fade show d-block" style="background: rgba(0,0,0,.6);" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">Delete SMO Portfolio</h5>
                        <button type="button" class="btn-close" wire:click="$set('showDeleteModal', false)"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this SMO portfolio and all attached images?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" wire:click="$set('showDeleteModal', false)">
                            Cancel
                        </button>
                        <button type="button" class="btn btn-danger" wire:click="delete">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
