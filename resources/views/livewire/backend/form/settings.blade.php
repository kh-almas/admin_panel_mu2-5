<div>
    <form action="{{ route('dashboard.settings.update') }}" method="post">
        @csrf
        @method('put')
        <div class="d-flex justify-content-between mb-4">
            <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckChecked">Registration</label>
                <input name="registration" type="hidden" value="0">
                <input name="registration" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" value="1" {{ $settings->registration || old('registration',0) === 1 ? 'checked' : ''}}>
            </div>
            <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckChecked">Maintenance mood</label>
                <input name="maintenance" type="hidden" value="0">
                <input name="maintenance" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" value="1" {{ $settings->maintenance || old('maintenance',0) === 1 ? 'checked' : ''}}>
            </div>
        </div>
        <div>
            <input wire:model.lazy="maintenance_link" name="maintenance_link" type="text" class="form-control mb-3" placeholder="1630542a-246b-4b66-afa1-dd72a4c43515" value="{{old('store_limit')}}">
            <p class="mb-0">Copy this link before set maintenance mode :</p>
            <p>adminpanel.test/{{ $maintenance_link ?? $settings->maintenance_link ?? '1630542a-246b-4b66-afa1-dd72a4c43515'}}</p>
        </div>
        <div class="border-bottom mb-4"></div>
        <div class="mb-4">
            <div>
                <span class="fw-bold">Can user use library</span>
            </div>
            <div class="d-flex mt-2">
                <div class="d-inline">
                    No
                </div>
                <div class="form-check form-switch mx-2">
                    <input name="permit_library" type="hidden" value="0">
                    <input name="permit_library" class="form-check-input" type="checkbox" value="1" {{ $settings->permit_library || old('permit_library',0) === 1 ? 'checked' : ''}}>
                </div>
                <div class="d-inline">
                    Yes
                </div>
            </div>
        </div>
        @if($positive_use === 1)
        <div class="mb-4">
            <label for="store-limit">How much storage user can use (MB)</label>
            <input name="store_limit" type="number" class="form-control" id="store-limit" placeholder="Default 500MB" value="">
        </div>
        @endif
        <div class="border-bottom mb-4"></div>
        <div class="mb-4">
            <div>
                <span class="fw-bold">User auto approve after registration</span>
            </div>
            <div class="d-flex mt-2">
                <div class="d-inline">
                    No
                </div>
                <div class="form-check form-switch mx-2">
                    <input name="user_approve" type="hidden" value="0">
                    <input name="user_approve" class="form-check-input" type="checkbox" value="1" {{ $settings->user_approve || old('user_approve',0) === 1 ? 'checked' : ''}}>
                </div>
                <div class="d-inline">
                    Yes
                </div>
            </div>
        </div>
{{--        <div class="mb-4">--}}
{{--            <div>--}}
{{--                <span class="fw-bold">User auto approve after registration</span>--}}
{{--            </div>--}}
{{--            <div class="form-check">--}}
{{--                <input wire:click="alw_appv" name="user_approve" class="form-check-input" type="checkbox" value="1" id="defaultCheck10" {{ $auto_appprove ?? 'checked' }}>--}}
{{--                <label class="form-check-label" for="defaultCheck10">--}}
{{--                    yes--}}
{{--                </label>--}}
{{--            </div>--}}
{{--            <div class="form-check">--}}
{{--                <input wire:click="dis_alw_appv" name="user_approve" class="form-check-input" type="checkbox" value="0" id="defaultCheck10" {{ $dont_auto_approve }}>--}}
{{--                <label class="form-check-label" for="defaultCheck10">--}}
{{--                    no--}}
{{--                </label>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="border-bottom mb-4"></div>
        <div class="mb-4">
            <label class="my-1 me-2" for="role">User role When registration</label>
            <select name="new_user_role" class="form-select" id="role">
                <option value="admin" {{ $settings->new_user_role === 'admin' ? 'selected' : ''}}>Admin</option>
                <option value="moderator" {{ $settings->new_user_role === 'moderator' ? 'selected' : ''}}>Moderator</option>
                <option value="user" {{ $settings->new_user_role === 'user' ? 'selected' : ''}}>User</option>
            </select>
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn btn-dark" type="submit">Submit</button>
        </div>
    </form>
</div>
