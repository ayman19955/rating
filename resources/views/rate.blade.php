<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('assets.store') }}" id="assetForm" method="POST">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="customRange2" class="form-label">Rate</label>
                        <input type="range" class="form-range" name="rating" min="0" max="5" value="0" id="customRange2">
                        <div class="text-white" id="ratingDisplay">0</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Comment</label>
                        <textarea class="form-control bg-dark text-white" name="comment" id="exampleInputPassword1"></textarea>
                    </div>
                    <div id="thankYouMessage" class="text-white"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="saveChanges">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
