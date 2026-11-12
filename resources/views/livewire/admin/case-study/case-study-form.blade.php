<div>
    <div class="container-xl">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">{{ $isEdit ? 'Edit Case Study' : 'Add New Case Study' }}</h3>
                <a href="{{ route('admin.case-study.list') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="ti ti-arrow-left me-1"></i> Back to list
                </a>
            </div>

            <div class="card-body">
                <form wire:submit.prevent="save">
                    <div class="row g-3">
                        <!-- Project Name -->
                        <div class="col-md-6">
                            <label class="form-label required">Project Name</label>
                            <input type="text" class="form-control @error('project_name') is-invalid @enderror"
                                @if ($isEdit) wire:model="project_name" @else wire:model.live.debounce.400ms="project_name" @endif
                                placeholder="Enter project name">
                            @error('project_name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Category -->
                        <div class="col-md-6">
                            <label class="form-label required">Category</label>
                            <select class="form-select @error('category_id') is-invalid @enderror" wire:model="category_id">
                                <option value="">Select category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                            @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
                            @if ($categories->isEmpty())
                                <small class="text-muted d-block mt-1">
                                    No active categories yet — <a href="{{ route('admin.case-study.category') }}">create one first</a>.
                                </small>
                            @endif
                        </div>

                        <!-- Slug -->
                        <div class="col-md-6">
                            <label class="form-label required">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" wire:model="slug"
                                placeholder="auto-generated from project name">
                            @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Featured Image -->
                        <div class="col-md-6">
                            <label class="form-label">Featured Image</label>
                            <input type="file" accept="image/*" class="form-control @error('featured_image') is-invalid @enderror" wire:model="featured_image">
                            @error('featured_image') <small class="text-danger">{{ $message }}</small> @enderror
                            <div wire:loading wire:target="featured_image" class="text-muted mt-1">Uploading...</div>

                            @if ($featured_image)
                                <div class="mt-2">
                                    <label class="form-label small">Preview:</label>
                                    <img src="{{ $featured_image->temporaryUrl() }}" alt="Preview" class="img-fluid rounded" style="max-height:150px;">
                                </div>
                            @elseif (!empty($existingImage))
                                <div class="mt-2">
                                    <label class="form-label small">Current image:</label>
                                    <img src="{{ asset('storage/' . $existingImage) }}" alt="Current" class="img-fluid rounded" style="max-height:150px;">
                                </div>
                            @endif
                        </div>

                        <!-- Content (TinyMCE) -->
                        <div class="col-12">
                            <label class="form-label required">Content</label>
                            <div wire:ignore>
                                <textarea id="case-study-editor" class="form-control"></textarea>
                            </div>
                            @error('content') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- SEO -->
                        <div class="col-md-6">
                            <label class="form-label">Meta Title</label>
                            <input type="text" class="form-control @error('meta_title') is-invalid @enderror" wire:model="meta_title">
                            @error('meta_title') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Meta Description</label>
                            <textarea class="form-control @error('meta_description') is-invalid @enderror" rows="2" wire:model="meta_description"></textarea>
                            @error('meta_description') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Status -->
                        <div class="col-12">
                            <label class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" wire:model="is_active">
                                <span class="form-check-label">Active (visible on website)</span>
                            </label>
                        </div>
                    </div>

                    <div class="mt-4 text-end">
                        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="save,featured_image">
                            <span wire:loading.remove wire:target="save">{{ $isEdit ? 'Update Case Study' : 'Save Case Study' }}</span>
                            <span wire:loading wire:target="save">Saving...</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{ asset('tabler/theme/libs/tinymce/tinymce.min.js') }}"></script>
<script>
document.addEventListener('livewire:init', function () {
    if (tinymce.get('case-study-editor')) {
        tinymce.get('case-study-editor').remove();
    }

    tinymce.init({
        selector: '#case-study-editor',
        height: 500,
        menubar: true,
        plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen table paste emoticons wordcount help',
        toolbar: 'undo redo | styleselect | bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image table | emoticons | removeformat | code fullscreen',
        setup: function (editor) {
            editor.on('init', function () {
                editor.setContent(@json($content ?? ''));
            });
            editor.on('Change KeyUp input', function () {
                @this.set('content', editor.getContent(), false);
            });
        }
    });
});
</script>
@endpush
