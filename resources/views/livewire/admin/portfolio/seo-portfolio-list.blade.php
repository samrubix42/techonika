<div class="container-xl py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1">SEO Portfolio Management</h3>
            <p class="text-muted small mb-0">Manage portfolio cards, keyword rows, logo, and multiple result screenshots.</p>
        </div>

        <button class="btn btn-primary" wire:click="openModal">
            Add SEO Portfolio
        </button>
    </div>

    <div class="card mb-3">
        <div class="card-body p-2">
            <div class="input-icon">
                <span class="input-icon-addon">
                    <i class="ti ti-search"></i>
                </span>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Search by company title..."
                    wire:model.live.debounce.300ms="search"
                >
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-vcenter align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th style="width: 80px;">Logo</th>
                        <th>Title</th>
                        <th>SEO Rows</th>
                        <th>Images</th>
                        <th>Updated</th>
                        <th class="text-end" style="width: 160px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr>
                            <td>
                                @if ($item->logo)
                                    <img
                                        src="{{ asset('storage/' . $item->logo) }}"
                                        alt="{{ $item->title }}"
                                        class="rounded border"
                                        style="width: 60px; height: 60px; object-fit: contain;"
                                    >
                                @else
                                    <div class="bg-light rounded border d-flex align-items-center justify-content-center"
                                         style="width: 60px; height: 60px;">
                                        <i class="ti ti-photo text-muted"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="fw-semibold">{{ $item->title }}</td>
                            <td>
                                <span class="badge bg-azure-lt">
                                    {{ count($item->seo_results ?? []) }} rows
                                </span>
                            </td>
                            <td>
                                <span class="badge bg-primary-lt">
                                    {{ count($item->result_images ?? []) }} images
                                </span>
                            </td>
                            <td>{{ optional($item->updated_at)->format('d M Y, h:i A') }}</td>
                            <td class="text-end">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-primary" wire:click="openModal({{ $item->id }})">
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" wire:click="confirmDelete({{ $item->id }})">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-5 text-muted">
                                No SEO portfolio entries found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @if($showModal)
        <div class="modal fade show d-block" style="background: rgba(0,0,0,.6)">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" style="max-width: 900px;">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header px-4 py-3">
                        <h5 class="modal-title fw-bold">
                            {{ $editId ? 'Edit SEO Portfolio' : 'Add SEO Portfolio' }}
                        </h5>
                        <button type="button" class="btn-close" wire:click="closeModal"></button>
                    </div>

                    <form wire:submit.prevent="save">
                        <div class="modal-body px-4 py-4" style="max-height: 75vh; overflow-y: auto;">
                            <div class="mx-auto" style="max-width: 760px;">
                                <div class="border rounded-3 p-4 bg-light-subtle mb-4">
                                    <div class="row g-4 align-items-start">
                                        <div class="col-md-8">
                                            <label class="form-label fw-semibold">Company Title</label>
                                            <input
                                                type="text"
                                                class="form-control @error('title') is-invalid @enderror"
                                                placeholder="MateBiz Pvt. Ltd."
                                                wire:model.defer="title"
                                            >
                                            @error('title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label fw-semibold">Company Logo</label>
                                            <input
                                                type="file"
                                                class="form-control @error('logo') is-invalid @enderror"
                                                wire:model="logo"
                                                accept="image/*"
                                            >
                                            @error('logo')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <div wire:loading wire:target="logo" class="text-primary small mt-1">Uploading logo...</div>
                                        </div>

                                        @if ($existingLogo || $logo)
                                            <div class="col-12">
                                                <div class="d-flex justify-content-center">
                                                    <div class="border rounded-3 bg-white p-3 text-center" style="width: 220px;">
                                                        <div class="small text-muted mb-2">
                                                            {{ $logo ? 'New logo preview' : 'Current logo' }}
                                                        </div>
                                                        <img
                                                            src="{{ $logo ? $logo->temporaryUrl() : asset('storage/' . $existingLogo) }}"
                                                            alt="Logo preview"
                                                            class="img-fluid rounded mx-auto d-block"
                                                            style="max-height: 110px; object-fit: contain;"
                                                        >
                                                        <button
                                                            type="button"
                                                            class="btn btn-outline-danger btn-sm mt-3 w-100"
                                                            wire:click="removeLogo"
                                                        >
                                                            Remove Logo
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="border rounded-3 p-4 mb-4">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <label class="form-label fw-semibold mb-0">SEO Result Rows</label>
                                            <div class="small text-muted">Add the keyword, initial rank, and current rank rows for the card.</div>
                                        </div>
                                        <button type="button" class="btn btn-outline-primary btn-sm" wire:click="addSeoResult">
                                            Add Row
                                        </button>
                                    </div>

                                    @error('seoResults')
                                        <div class="text-danger small mb-2">{{ $message }}</div>
                                    @enderror

                                    <div class="border rounded-3 overflow-hidden">
                                        <div class="table-responsive">
                                            <table class="table table-sm align-middle mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Keyword</th>
                                                        <th style="width: 180px;">Initial Rank</th>
                                                        <th style="width: 180px;">Current Rank</th>
                                                        <th style="width: 80px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($seoResults as $index => $row)
                                                        <tr wire:key="seo-row-{{ $index }}">
                                                            <td>
                                                                <input
                                                                    type="text"
                                                                    class="form-control @error('seoResults.' . $index . '.keyword') is-invalid @enderror"
                                                                    wire:model.defer="seoResults.{{ $index }}.keyword"
                                                                    placeholder="Website Design Company"
                                                                >
                                                                @error('seoResults.' . $index . '.keyword')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="text"
                                                                    class="form-control @error('seoResults.' . $index . '.initial_rank') is-invalid @enderror"
                                                                    wire:model.defer="seoResults.{{ $index }}.initial_rank"
                                                                    placeholder="N/R"
                                                                >
                                                                @error('seoResults.' . $index . '.initial_rank')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="text"
                                                                    class="form-control @error('seoResults.' . $index . '.current_rank') is-invalid @enderror"
                                                                    wire:model.defer="seoResults.{{ $index }}.current_rank"
                                                                    placeholder="1"
                                                                >
                                                                @error('seoResults.' . $index . '.current_rank')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                            <td class="text-end">
                                                                <button type="button" class="btn btn-outline-danger btn-sm" wire:click="removeSeoResult({{ $index }})">
                                                                    Remove
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="border rounded-3 p-4">
                                    <label class="form-label fw-semibold">Result Images</label>
                                    <input
                                        type="file"
                                        class="form-control @error('resultImages') is-invalid @enderror @error('resultImages.*') is-invalid @enderror"
                                        wire:model="resultImages"
                                        accept="image/*"
                                        multiple
                                    >
                                    @error('resultImages')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                    @error('resultImages.*')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                    <small class="text-muted">You can upload multiple screenshots for this SEO portfolio card.</small>
                                    <div wire:loading wire:target="resultImages" class="text-primary small mt-1">Uploading result images...</div>

                                    @if (!empty($existingResultImages) || !empty($resultImages))
                                        <div class="row g-3 mt-2 justify-content-center">
                                            @foreach ($existingResultImages as $index => $image)
                                                <div class="col-md-3 col-sm-6" wire:key="existing-result-image-{{ $index }}">
                                                    <div class="border rounded-3 p-2 h-100 bg-white">
                                                        <img
                                                            src="{{ asset('storage/' . $image) }}"
                                                            alt="Result image {{ $index + 1 }}"
                                                            class="img-fluid rounded mb-2"
                                                            style="height: 140px; width: 100%; object-fit: cover;"
                                                        >
                                                        <button
                                                            type="button"
                                                            class="btn btn-outline-danger btn-sm w-100"
                                                            wire:click="removeExistingResultImage({{ $index }})"
                                                        >
                                                            Remove
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach

                                            @foreach ($resultImages as $index => $image)
                                                <div class="col-md-3 col-sm-6" wire:key="new-result-image-{{ $index }}">
                                                    <div class="border rounded-3 p-2 h-100 bg-white">
                                                        <img
                                                            src="{{ $image->temporaryUrl() }}"
                                                            alt="New result image {{ $index + 1 }}"
                                                            class="img-fluid rounded mb-2"
                                                            style="height: 140px; width: 100%; object-fit: cover;"
                                                        >
                                                        <button
                                                            type="button"
                                                            class="btn btn-outline-danger btn-sm w-100"
                                                            wire:click="removeNewResultImage({{ $index }})"
                                                        >
                                                            Remove
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer px-4 py-3">
                            <button type="button" class="btn btn-light" wire:click="closeModal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

    @if($showDeleteModal)
        <div class="modal fade show d-block" style="background: rgba(0,0,0,.6)">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">Delete SEO Portfolio</h5>
                        <button type="button" class="btn-close" wire:click="$set('showDeleteModal', false)"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this SEO portfolio entry? Its logo and all uploaded result images will also be removed.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" wire:click="$set('showDeleteModal', false)">Cancel</button>
                        <button type="button" class="btn btn-danger" wire:click="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
