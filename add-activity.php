<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Add Notice';
?>
<?php require './components/header.php'; ?>

<div class="content-wrapper">
    <h3 class="page-title my-5">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-bell-ring"></i>
        </span> Add New Activity
    </h3>

<div class="row">
    <div class="col-lg-8 mx-auto">
            <div class="create-notice">
        <div class="">
            <h1 class="create-notice-title">Create New Activity</h1>
            <form action="" >
                
                <!-- Title -->
                <div class="form-group mt-3">
                    <label>Title</label>
                    <input type="text" name="title" placeholder="Activity Title" required>
                </div>

                <!-- Type -->
                <div class="form-group mt-3">
                    <label>Type</label>
                    <select name="type" required>
                        <option value="">Select Type</option>
                        <option value="General">Regular</option>
                        <option value="Urgent">Financial</option>
                        <option value="Info">Social</option>
                    </select>
                </div>

                <!-- Age Limit -->
                <div class="form-group mt-3">
                    <label>Image:</label>
                    <input type="file" name="image" placeholder="Age limit" min="0">
                </div>



                <!-- Short Description -->
                <div class="form-group mt-3">
                    <label>Objectives</label>
                    <textarea name="description" rows="1" placeholder="Write the Objectives here..." required></textarea>
                </div>
                <!-- Short Description -->
                <div class="form-group mt-3">
                    <label>Short Description</label>
                    <textarea name="description" rows="1" placeholder="Write the activity short description..." required></textarea>
                </div>
                <!-- Description -->
                <div class="form-group mt-3">
                    <label>Description</label>
                    <textarea name="description" rows="5" placeholder="Write the activity detailed description..." required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="form-group mt-4 text-end">
                    <button type="submit" class="btn btn-submit">Add Activity</button>
                </div>

            </form>
        </div>
    </div>
    </div>
</div>
</div>

<?php require './components/footer.php'; ?>
