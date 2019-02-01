<h3><?=($note->id == 0) ? "Add" : "Edit"?>: Note</h3>
<input type="hidden" name="noteId" value="{{ $note->id }}"/>

<div class="form-group">
    <label for="noteFormCategory">Category</label>
    <select class="form-control select2" style="width: 100%" id="noteFormCategory" name="categoryId">
        <option value="">--</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
            <?=($category->id == $note->category_id) ? "selected" : ""?>
            >{{ $category->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="noteFormTitle">Title</label>
    <input type="text" class="form-control" id="noteFormTitle"
           name="title" value="{{ htmlspecialchars($note->title) }}"/>
</div>
<div class="form-group">
    <label for="noteFormNote">Note</label>
    <textarea style="width: 100%; height: 75px" class="form-control" id="noteFormNote"
              name="note">{{ htmlspecialchars($note->note) }}</textarea>
</div>
