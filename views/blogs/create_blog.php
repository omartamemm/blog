
    <div class="container">
        <div class="create-post-form">
            <h2 class="text-center">Create a New Post</h2>
            <form method="POST" action="index.php?page=add_blog">
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter post title"  name="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" rows="5" placeholder="Write your post content here..." name="content"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Upload Image</label>
                    <input type="file" class="form-control-file" id="image" >
                </div>
                <button type="submit" class="btn btn-primary btn-block">Create Post</button>
            </form>
        </div>
    </div>

    