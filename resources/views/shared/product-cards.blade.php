<div class="card-group">
    @foreach (json_decode($products) as $product)
        <div class="card">
            <img class="card-img-top" src="{{ $product ->image }}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">{{ $product ->name }}</h5>
            <p class="card-text">{{ $product ->description }}</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal{{ $product->id }}">
                    Update
                </button>

                <!-- Modal -->
                <div class="modal fade" id="updateModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{ $product->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('update_product', ['id' => $product->id]) }}">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ $product->name }}">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <label for="image">Image</label>
                                        <input type="text" class="form-control" name="image" id="image" placeholder="Image URL" value="{{ $product->image }}">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <label for="description">Description</label>
                                        <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="{{ $product->description }}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button class="btn btn-success" type="submit">UPDATE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            <form method="POST" action="{{ route('delete_product', ['id' => $product->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
            </form>

            </div>
        </div>
    @endforeach
</div>