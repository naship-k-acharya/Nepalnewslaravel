<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create a New Post</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    .post-container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .post-title {
        text-align: center;
        color: #333;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-label {
        font-weight: bold;
        color: #555;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s;
    }
    .form-control:focus {
        border-color: #007bff;
        outline: none;
    }
    .form-control-file {
        display: block;
        margin-top: 4px;
    }
    .btn-primary {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .menu-primary-menu-container {
   
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

#primary-menu {
    list-style: none;
    padding: 0;
    margin-top: 0;
    display: flex;
}

.menu-item {
    margin-right: 20px;
}

.menu-item:last-child {
    margin-right: 0;
}

.menu-item a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

.menu-item a:hover {
    background-color: #f0f0f0;
    color: #007bff;
}
</style>
</head>
<body>

<div class="menu-primary-menu-container">
    <ul id="primary-menu" class="menu">
        <li id="menu-item-735159" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-735159"><a href="/" aria-current="page">होमपेज</a></li>
        <li id="menu-item-1413258" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1413258"><a href="/samachar">समाचार</a></li>
        <li id="menu-item-735066" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735066"><a href="/business">विजनेस</a></li>
        
        <li id="menu-item-1032524" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1032524"><a href="/bichar">विचार</a></li>
        <li id="menu-item-735160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735160"><a href="/khelkuid">खेलकुद</a></li>
        <li id="menu-item-735160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735160"><a href="{{route('login')}}">login</a></li>
        <li id="menu-item-735160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735160"><a href="{{route('register')}}">Signup</a></li>
        <li id="menu-item-735160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735160"><a href="/dashboard">Dashboard</a></li>
        <li id="menu-item-1032527" class="others-megamenu-append-wrap menu-item menu-item-type-custom menu-item-object-custom menu-item-1032527"><a href="#">अन्य</a></li>
        <li id="menu-item-1032527" class="others-megamenu-append-wrap menu-item menu-item-type-custom menu-item-object-custom menu-item-1032527"><a href="/addpost">Add Post</a></li>
        
    </ul>
</div>
<div class="post-container">
    <h2 class="post-title">Create a New Post</h2>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">Title:</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="author" class="form-label">Author:</label>
            <input type="text" id="author" name="author" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="content" class="form-label">Content:</label>
            <textarea id="content" name="content" class="form-control" rows="8" required></textarea>
        </div>
        <div class="form-group">
            <label for="photo" class="form-label">Photo:</label>
            <input type="file" id="photo" name="photo" class="form-control-file" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <h1>here are added post</h1>
    @isset($post)
    <ul >
        @foreach($post as $singlePost)
            <li style="margin-top: 10px; background-color:#ccc;" class="post-item">
                <span>{{ $singlePost->title }}</span>
                <form action="{{ route('posts.destroy', $singlePost->id) }}" method="POST" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button style="float: right; margin-top:-20px;" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endisset
</div>
</body>
</html>
