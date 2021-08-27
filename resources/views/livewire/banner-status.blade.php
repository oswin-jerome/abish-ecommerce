<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="form-check">
        <input wire:click="changeBannerStatus" @if ($banner->status) checked @endif type="checkbox" class="form-check-input" id="status">
        <label class="form-check-label" for="status"></label>
    </div>
</div>
