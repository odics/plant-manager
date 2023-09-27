<div class="modal-overlay" id="modal-overlay"></div>
<div class="modal" id="modal">
    <div class="form-card new-plant">
        <div class="form-header">
            Add New Plant Type
        </div>
        <div class="form-card-body">
            <form class="plant-type-form" id="plant-type-form" action="forms/add-plant-type.php" method="POST">
                <label for="plant-type" id="plant-type-label">Enter new plant type</label>
                <input type="text" id="plant-type" name="plant-type">
                <div class="plant-type-buttons">
                    <button class="btn-primary" id="add-new-type">Add plant type</button>
                    <button class="btn-secondary" id="modal-cancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>