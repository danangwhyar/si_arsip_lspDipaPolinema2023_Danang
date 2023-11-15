<div class="btn-group" role="group">

    <div class="mx-1">
        <form action="{{ route('arsip.destroy', $model->id) }}" method="POST">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm delete-notification">
                <i class="bi bi-folder-minus"></i> Hapus
            </button>
        </form>
    </div>
    <div class="mx-1">
        <a href="{{ route('arsip.download', $model->id) }}" class="btn btn-warning btn-sm">
                <i class="bi bi-cloud-download"></i> Unduh
        </a>
    </div>
    <div class="mx-1">
        <a href="{{ route('arsip.show', $model->id) }}" class="btn btn-primary btn-sm">
            <i class="bi bi-eye"></i> Lihat >>
        </a>
    </div>    
</div>

