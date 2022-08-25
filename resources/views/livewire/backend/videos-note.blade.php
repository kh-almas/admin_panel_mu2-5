<div class="col-xl-4 d-none d-xl-block bg-dark fixed-top hide_scrollbar videonotestyle" id="showallnote">
    <div>
        <i class="far fa-times-circle cursor-pointer d-xl-none d-flex fa-2x mt-1" onclick="hidevideonote()" style="color: #262AF5;"></i>
    </div>



    <!-- Form -->
    <form wire:submit.prevent="s_note">
        <div class="my-4">
            <textarea wire:model="v_n_text" name="v_n_text" class="form-control"  placeholder="Type your note..." id="textarea" rows="3" style="background-color: #262B34; border-color: #262AE1;"></textarea>
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <button class="btn w-100" type="submit" style="background-color: #262A77; color: #00d1b2;">Save</button>
        </div>
    </form>
    <!-- End of Form -->



    <div class="mt-3" style="border-bottom: 1px solid #262AE1"></div>

    <div class="hide_scrollbar" style="overflow-y: scroll !important;">
        <ul>
            @foreach($notes as $note)
                <li class="text-white">(
                    <button wire:click="delete_note({{$note->id}})"  class="text-muted btn p-0" type="submit" onclick="return confirm('Are you want delete note!')">Delete</button>
                    ) {{ $note->text }}
                </li>
            @endforeach
        </ul>

    </div>
</div>
