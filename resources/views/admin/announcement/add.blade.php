        <form method="post" action="{{ route('list')}}">
                @csrf
                <div class="card-body">
                <div class="form-group">
                
                  <h3>Add Announcement</h3>
                  @include('_message')
                    <label>Title</label>
                    <input type="text" class="form-control" name="title">
                  </div>
                  <div class="form-group">
                    <label>Content</label>
                    <textarea name="content" class="form-control" cols="20" rows="5"></textarea>
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>