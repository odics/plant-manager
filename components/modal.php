<?php

function renderModal(string $modalTitle = '', string $modalBody = ''): string
{
    if (!$modalTitle && !$modalBody) {
        return '
    <div class="modal-overlay" id="modal-overlay">
        <div class="modal" id="modal">
            <div class="form-card new-plant">
                <div class="form-header">
                </div>
                <div class="form-card-body">
                <div class="card-text"></div>
                    <div class="plant-type-buttons">
                        <button class="btn-primary" id="delete-plant">Delete</button>
                        <button class="btn-secondary" id="modal-cancel">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>';
    } else {
        return '
    <div class="modal-overlay" id="modal-overlay"></div>
        <div class="modal" id="modal">
            <div class="form-card new-plant">
                <div class="form-header">'
            . $modalTitle .
            '</div>
                <div class="form-card-body">'
            . $modalBody .
            '</div>
            </div>
        </div>';
    }
}
