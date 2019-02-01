<table class="table-bordered" style="width: 100%">
    @foreach ($noteCategories as $noteCategory)
        <?php
        $notes = $noteCategory->notes;
        ?>
        <tr>
            <th
                    @if(count($notes)>0)
                    onclick="expandCollapse('cat_{{ $noteCategory->id }}')"
                    @endif
            >
                <a href="#">{{$noteCategory->name}} {{ count($notes) }}</a>
            </th>
        </tr>
        @foreach($notes as $note)
            <tr class="cat_{{ $noteCategory->id }}" style="display: none">
                <td style="padding-left: 50px" onclick="expandCollapse('note_{{ $note->id }}')"><a href="#">{{ $note->title }}</a></td>
            </tr>
            <tr class="note_{{ $note->id }}" style="display: none">
                <td style="padding-left: 100px">
                    <pre>{{ $note->note }}</pre>
                    <a href="#" onclick="editNote_click({{ $note->id }})">Edit</a></td>
            </tr>
        @endforeach
    @endforeach
</table>

