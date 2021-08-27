<div>
    <div class="form-check">
        <input wire:click="changeUserStatus" @if ($customer->status) checked @endif type="checkbox" class="form-check-input" id="status">
        <label class="form-check-label" for="status"></label>
    </div>
</div>
