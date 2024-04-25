<x-three-dots-dropdown>
    <a class="dropdown-item rounded-top" href="{{ route('personal.edit', $id) }}">
        <span class="bi bi-pencil-fill text-success me-2"></span>Edit
    </a>
    <button class="delete-personal dropdown-item rounded-bottom" data-id="{{ $id }}" data-toggle="modal"
        data-target="#delete-personal-modal">
        <span class="bi bi-trash-fill text-danger me-2"></span>Remove
    </button>
</x-three-dots-dropdown>
