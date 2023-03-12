<form action="{{ route('profiles.update', $profile->id) }}" method="POST">
    @csrf
    @method('PUT')
    <p>1. User</p>
    <div class="form-group">
        <label for="uuid">UUID</label>
        <input type="int" class="form-control" id="uuid" name="uuid" value="{{ $profile->uuid }}">
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $profile->title }}">
    </div>
    <div class="form-group">
        <label for="staffname">Name</label>
        <input type="text" class="form-control" id="staffname" name="staffname" value="{{ $profile->staffname }}">
    </div>
    <div class="form-group">
        <label for="youtube">Youtube Video</label>
        <input type="text" class="form-control" id="youtube" name="youtube" value="{{ $profile->youtube }}">
    </div>
    <div class="form-group">
        <label for="Jobs">Jobs</label>
        <input type="text" class="form-control" id="Jobs" name="Jobs" value="{{ $profile->Jobs }}">
    </div>
    <div class="form-group">
        <label for="profilepic">Profile Picture</label>
        <input type="text" class="form-control" id="profilepic" name="profilepic" value="{{ $profile->profilepic }}">
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <input type="text" class="form-control" id="text" name="text" value="{{ $profile->text }}">
    </div>
    
    <br>

    <p>2. Experience</p>
    <div class="form-group">
        <label for="uuid">UUID</label>
        <input type="int" class="form-control" id="uuid" name="uuid" value="{{ $experience->uuid }}">
    </div>
    <div class="form-group">
        <label for="header">Header</label>
        <input type="text" class="form-control" id="header" name="header" value="{{ $experience->header }}">
    </div>
    <div class="form-group">
        <label for="years">Years</label>
        <input type="int" class="form-control" id="years" name="years" value="{{ $experience->years }}">
    </div>
    <div class="form-group">
        <label for="detailsscope">Detail Scope</label>
        <input type="text" class="form-control" id="detailsscope" name="detailsscope" value="{{ $experience->detailsscope }}">
    </div>
    <div class="form-group">
        <label for="picture">Picture</label>
        <input type="text" class="form-control" id="picture" name="picture" value="{{ $experience->picture }}">
    </div>

    <br>

    <p>3. Experience Detail</p>
    <div class="form-group">
        <label for="picture">Picture</label>
        <input type="text" class="form-control" id="picture" name="picture" value="{{ $experience_details->picture }}">
    </div>
    <div class="form-group">
        <label for="scope">Scope</label>
        <input type="text" class="form-control" id="scope" name="scope" value="{{ $experience_details->scope }}">
    </div>
    <div class="form-group">
        <label for="details">Details</label>
        <input type="text" class="form-control" id="details" name="details" value="{{ $experience_details->details }}">
    </div>
    <div class="form-group">
        <label for="cost">Cost</label>
        <input type="int" class="form-control" id="cost" name="cost" value="{{ $experience_details->cost }}">
    </div>
    <div class="form-group">
        <label for="statistics">Statistics</label>
        <input type="int" class="form-control" id="statistics" name="statistics" value="{{ $experience_details->statistics }}">
    </div>
    <button type="submit" class="btn btn-primary">Update Profile</button>
</form>