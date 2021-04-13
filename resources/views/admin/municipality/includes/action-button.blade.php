<a href="{{ route('admin.municipality.edit', $id) }}"
   class="btn btn-xs btn-primary" title="Edit">
    <span class="fa fa-edit"></span>
</a>
<a href="{{ route('admin.municipality.show', $id) }}"
   class="btn btn-xs btn-primary"
   title="View">
    <span class="fa fa-eye"></span>
</a>
<form method="POST"
      action="{{ route('admin.municipality.destroy', $id) }}"
      accept-charset="UTF-8"
      class="form-inline"
      style="display: inline-block">
    <input name="_method" type="hidden" value="DELETE">
    {{csrf_field()}}
    <button class="btn btn-danger btn-xs btn-delete-record"
            type="button">
        <span class="fa fa-trash"></span>
    </button>
</form>
