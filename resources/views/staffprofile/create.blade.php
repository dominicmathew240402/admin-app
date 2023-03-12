<h1>Add Staff Profile</h1>

<form action="{{ route('profiles.store') }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="uuid">UUID:</label>
        <input type="int" name="uuid" id="uuid" class="form-control">
    </div>
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="staffname">Name:</label>
        <input type="text" name="staffname" id="staffname" class="form-control">
    </div>
    <div class="form-group">
        <label for="youtube">Video:</label>
        <input type="text" name="youtube" id="youtube" class="form-control">
    </div>
    <div class="form-group">
        <label for="Jobs">Job:</label>
        <input type="text" name="Jobs" id="Jobs" class="form-control">
    </div>
    <div class="form-group">
        <label for="profilepic">Image:</label>
        <input type="file" name="profilepic" id="profilepic" class="form-control">
    </div>
    <div class="form-group">
        <label for="profilepic">Text:</label>
        <input type="text" name="text" id="text" class="form-control">
    </div>
    <br>
    <p>2. Experience</p>
    <div class="form-group">
        <label for="uuid2">UUID</label>
        <input type="int" class="form-control" id="uuid2" name="uuid2" >
    </div>
    <div class="form-group">
        <label for="header">Header</label>
        <input type="text" id="header" name="header" class="form-control">
    </div>
    <div class="form-group">
        <label for="years">Years</label>
        <input type="int" class="form-control" id="years" name="years" >
    </div>
    <div class="form-group">
        <label for="detailsscope">Detail Scope</label>
        <input type="text" class="form-control" id="detailsscope" name="detailsscope" >
    </div>
    <div class="form-group">
        <label for="picture">Picture</label>
        <input type="text" class="form-control" id="picture" name="picture" >
    </div>
    <br>

    <p>3. Experience Detail</p>
    <div class="form-group">
        <label for="picture">Picture</label>
        <input type="text" class="form-control" id="picture" name="picture" >
    </div>
    <div class="form-group">
        <label for="scope">Scope</label>
        <input type="text" class="form-control" id="scope" name="scope" value="">
    </div>
    <div class="form-group">
        <label for="details">Details</label>
        <input type="text" class="form-control" id="details" name="details">
    </div>
    <div class="form-group">
        <label for="cost">Cost</label>
        <input type="text" class="form-control" id="cost" name="cost">
    </div>
    <div class="form-group">
        <label for="statistics">Statistics</label>
        <input type="text" class="form-control" id="statistics" name="statistics">
    </div>
    <button type="submit" class="btn btn-primary">Add Profile</button>
</form>