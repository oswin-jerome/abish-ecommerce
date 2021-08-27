<div>
    {{-- The best athlete wants his opponent at his best. --}}

    <div class="form-check">
        <input wire:click="change_status" @if ($product->status) checked @endif type="checkbox" class="form-check-input" id="status">
        <label class="form-check-label" for="status"></label>
    </div>
</div>
