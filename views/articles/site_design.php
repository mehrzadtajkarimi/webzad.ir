<?php foreach ($data as $row) { ?>
<div class="card border-0 shadow-sm mb-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title font-face"><?= $row['title']; ?></h5>
                <p class="card-text"><?= $row['summary']; ?></p>
                <button type="button" class="btn btn-outline-info">ادامه مطالب</button>
            </div>
        </div>
        <div class="col-md-6">
            <img src="public\image\<?= $row['image']; ?>" class="img-fluid "
                 alt="site-design-2"
                 title="site-design-2">
        </div>
    </div>
</div>
<?php } ?>