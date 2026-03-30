<div>
    <!-- PAGE HEADER -->
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="page-title">Video Sliders</h2>
                <div class="text-muted fs-14">Manage homepage video slider items</div>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" wire:click="openModal">
                    <i class="ti ti-plus me-1"></i> Add Video Slider
                </button>
            </div>
        </div>
    </div>

    <!-- FILTERS -->
    <div class="card mb-4">
        <div class="card-body py-3">
            <div class="row align-items-center g-3">
                <div class="col-md-6">
                    <div class="input-icon">
                        <span class="input-icon-addon">
                            <i class="ti ti-search"></i>
                        </span>
                        <input
                            type="text"
                            wire:model.debounce.400ms="search"
                            class="form-control"
                            placeholder="Search title / url / type..."
                        >
                    </div>
                </div>

                <div class="col-md-3 ms-auto">
                    <select wire:model="perPage" class="form-select">
                        <option value="10">10 per page</option>
                        <option value="25">25 per page</option>
                        <option value="50">50 per page</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- TABLE -->
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                <thead class="bg-light">
                    <tr>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Video URL</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($items as $item)
                        <tr>
                            <td class="fw-500">{{ $item->title }}</td>
                            <td>
                                <span class="badge bg-azure-lt text-uppercase">
                                    {{ $item->type }}
                                </span>
                            </td>
                            <td class="text-muted">
                                <a
                                    href="{{ $item->video_url }}"
                                    target="_blank"
                                    rel="noopener"
                                    class="text-reset text-truncate d-inline-block"
                                    style="max-width: 420px"
                                >
                                    {{ $item->video_url }}
                                </a>
                            </td>
                            <td class="text-end">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-primary" wire:click="openModal({{ $item->id }})">
                                        <i class="ti ti-edit"></i> Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" wire:click="confirmDelete({{ $item->id }})">
                                        <i class="ti ti-trash"></i> Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-5">
                                No video sliders found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer d-flex justify-content-between align-items-center">
            <div class="text-muted fs-14">
                Showing {{ $items->firstItem() ?? 0 }}–{{ $items->lastItem() ?? 0 }} of {{ $items->total() }} entries
            </div>
            {{ $items->links() }}
        </div>
    </div>

    <!-- CREATE / EDIT MODAL -->
    @if($showModal)
        <div class="modal modal-blur fade show d-block" style="background:rgba(0,0,0,.6)" tabindex="-1" wire:ignore.self>
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content border-0 shadow">

                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">
                            {{ $editId ? 'Edit Video Slider' : 'Add Video Slider' }}
                        </h5>
                        <button type="button" class="btn-close" wire:click="closeModal"></button>
                    </div>

                    <form wire:submit.prevent="save">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Title</label>
                                <input
                                    type="text"
                                    class="form-control @error('title') is-invalid @enderror"
                                    wire:model.defer="title"
                                    placeholder="Enter title"
                                >
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold">Type</label>
                                    <select class="form-select @error('type') is-invalid @enderror" wire:model.defer="type">
                                        <option value="youtube">YouTube (Shorts)</option>
                                        <option value="instagram">Instagram (Reels)</option>
                                    </select>
                                    @error('type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-8">
                                    <label class="form-label fw-semibold">Video URL</label>
                                    <input
                                        type="text"
                                        class="form-control @error('video_url') is-invalid @enderror"
                                        wire:model.defer="video_url"
                                        placeholder="https://..."
                                    >
                                    @error('video_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-hint">
                                        Paste a YouTube Shorts link, Instagram Reels link, Vimeo link, or direct mp4 URL.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" wire:click="closeModal">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="save">
                                <span wire:loading wire:target="save" class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                                <i class="ti ti-device-floppy me-1"></i>
                                Save
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    @endif

    <!-- DELETE CONFIRMATION MODAL -->
    @if($showDeleteModal)
        <div class="modal modal-blur fade show d-block" style="background:rgba(0,0,0,.6)" tabindex="-1">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content border-0 shadow">

                    <div class="modal-header">
                        <h5 class="modal-title fw-bold text-danger">Confirm Delete</h5>
                        <button type="button" class="btn-close" wire:click="closeDeleteModal"></button>
                    </div>

                    <div class="modal-body">
                        <p class="mb-0">Are you sure you want to delete this video slider?</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" wire:click="closeDeleteModal">
                            Cancel
                        </button>
                        <button type="button" class="btn btn-danger" wire:click="delete" wire:loading.attr="disabled" wire:target="delete">
                            <span wire:loading wire:target="delete" class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                            <i class="ti ti-trash me-1"></i>
                            Delete
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    @endif
</div>
