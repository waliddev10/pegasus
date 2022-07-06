<form action="{{ route('user.update', $item->id) }}" accept-charset="UTF-8" class="form needs-validation" id="editForm"
    autocomplete="off">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col">
            <div class="mt-2">
                <label class="form-label">Nama User</label>
                <input type="text" name="nama" class="form-control input-air-primary" value="{{ $item->nama }}" />
            </div>
            <div class=" mt-2">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control input-air-primary"
                    value="{{ $item->username }}" />
            </div>
            <div class=" mt-2">
                <label class="form-label">NIP</label>
                <input type="text" name="nip" class="form-control input-air-primary" value="{{ $item->nip }}" />
            </div>
            <div class=" mt-2">
                <label class="form-label">Password</label>
                <div class="alert alert-warning text-dark" role="alert">
                    Silakan isi password jika ingin merubah password lama, dan kosongi jika tidak ingin merubah
                    password.
                </div>
                <input type="text" name="password" class="form-control input-air-primary" />
            </div>
        </div>
        <div class="col">
            <div class="mt-2">
                <label class="form-label">Jabatan</label>
                <input type="text" name="jabatan" class="form-control input-air-primary" value="{{ $item->jabatan }}" />
            </div>
            <div class="mt-2">
                <label class="form-label">Pangkat</label>
                <input type="text" name="pangkat" class="form-control input-air-primary" value="{{ $item->pangkat }}" />
            </div>
            <div class="mt-2">
                <label class="form-label">Golongan</label>
                <input type="text" name="golongan" class="form-control input-air-primary"
                    value="{{ $item->golongan }}" />
            </div>
            <div class="mt-2">
                <label class="form-label">Role</label>
                <select name="role" class="form-select input-air-primary">
                    <option selected disabled>Pilih Role...</option>
                    <option value="admin" @if($item->role == 'admin') selected @endif>Admin</option>
                    <option value="user" @if($item->role == 'user') selected @endif>User</option>
                </select>
            </div>
        </div>
    </div>

    <div class="mt-5 text-right">
        <div class="col-12">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Ubah Data</button>
        </div>
    </div>

</form>

<script type="text/javascript">
    $("#editForm").on('submit', function(event) {
        event.preventDefault();
        var form = $(this);
        var formData = new FormData($(this)[0]);

        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $("#modalContainer").modal('hide');
                tableDokumen.ajax.reload(null, false);
                showAlert(response.message, response.status || 'success');
            },
            error: function(xhr) {
                var err = eval("(" + xhr.responseText + ")");
                showAlert(err.message, err.status || 'error');
            }
        });
        return false;
    });
</script>
